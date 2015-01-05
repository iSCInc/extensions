#!/usr/bin/env python
# -*- coding: utf-8 -*-
# SUL audit statistics script
# Released under GPL v2 / MIT License
#
# By Legoktm, with contributions from Roan Kattouw, wctaiwan and Earwig
#
# Creates a table for usage on
# <https://www.mediawiki.org/wiki/Admin_tools_development/SUL_Audit>
#
# Dependencies: python-mysqldb package
#
# Setup:
#  1. Create a ~/sul.my.cnf with username/password/hostname of a database
#     server which has a copy of all SUL databases on it
#  2. Create a file named "wikis.csv" which is a list of all database names
#     that are SUL connected.

import bisect
import calendar
import datetime
from collections import defaultdict, OrderedDict
import os
import time
import MySQLdb
import MySQLdb.cursors


# Taken from pywikibot
class Timestamp(datetime.datetime):

    """Class for handling Mediawiki timestamps.

    This inherits from datetime.datetime, so it can use all of the methods
    and operations of a datetime object.  To ensure that the results of any
    operation are also a Timestamp object, be sure to use only Timestamp
    objects (and datetime.timedeltas) in any operation.

    Use Timestamp.fromISOformat() and Timestamp.fromtimestampformat() to
    create Timestamp objects from Mediawiki string formats.

    Use Site.getcurrenttime() for the current time; this is more reliable
    than using Timestamp.utcnow().

    """
    mediawikiTSFormat = "%Y%m%d%H%M%S"
    ISO8601Format = "%Y-%m-%dT%H:%M:%SZ"

    @classmethod
    def fromISOformat(cls, ts):
        """Convert an ISO 8601 timestamp to a Timestamp object."""
        return cls.strptime(ts, cls.ISO8601Format)

    @classmethod
    def fromtimestampformat(cls, ts):
        """Convert the internal MediaWiki timestamp format to a Timestamp object."""
        return cls.strptime(ts, cls.mediawikiTSFormat)

    def toISOformat(self):
        """Convert the Timestamp object to an ISO 8601 timestamp"""
        return self.strftime(self.ISO8601Format)

    def totimestampformat(self):
        """Convert the Timestamp object to the internal MediaWiki timestamp format."""
        return self.strftime(self.mediawikiTSFormat)

    def __str__(self):
        """Return a string format recognized by the API"""
        return self.toISOformat()

    # This function I didn't steal from pywikibot, it's from
    # http://ruslanspivak.com/2011/07/20/how-to-convert-python-utc-datetime-object-to-unix-timestamp/
    def to_unix(self):
        return calendar.timegm(self.utctimetuple())

    def __add__(self, other):
        newdt = datetime.datetime.__add__(self, other)
        if isinstance(newdt, datetime.datetime):
            return Timestamp(newdt.year, newdt.month, newdt.day, newdt.hour,
                             newdt.minute, newdt.second, newdt.microsecond,
                             newdt.tzinfo)
        else:
            return newdt

    def __sub__(self, other):
        newdt = datetime.datetime.__sub__(self, other)
        if isinstance(newdt, datetime.datetime):
            return Timestamp(newdt.year, newdt.month, newdt.day, newdt.hour,
                             newdt.minute, newdt.second, newdt.microsecond,
                             newdt.tzinfo)
        else:
            return newdt


class SULAuditer:
    def get_db(self, dbname):
        """
        Get a (possibly already open) connection to a database
        """
        if not dbname in self.db_cache:
            self.db_cache[dbname] = MySQLdb.connect(
                db=dbname,
                read_default_file=os.path.expanduser('~/sul.my.cnf'),
                cursorclass=MySQLdb.cursors.DictCursor
            )
        return self.db_cache[dbname]

    def close_db(self, dbname):
        """
        Close the connection if we already opened one
        """
        if dbname in self.db_cache:
            db = self.db_cache.pop(dbname)
            db.close()

    def __init__(self):
        self.db_cache = {}
        self.local_accounts = defaultdict(int)
        self.local_attached = defaultdict(int)
        self.local_not_attached = defaultdict(int)
        self.local_with_email = defaultdict(int)
        self.local_clash_global = defaultdict(int)
        self.local_clash_global_but_mergable = defaultdict(int)
        self.global_accounts = 0
        self.global_clashing_accounts = 0

        self.now_utc = Timestamp.utcnow().to_unix()


    @property
    def wikis(self):
        """
        Returns a list of all wikis that are SUL enabled
        """
#        return ['enwikivoyage']  # Uncomment this for fast debugging on a "medium" wiki
        if not hasattr(self, '_wikis'):
            with open(os.path.expanduser('~/wikis.csv')) as f:
                self._wikis = f.read().splitlines()

        return self._wikis

    def round_user_ts(self, row):
        """
        Given a result row with aa_lastlogin and user_touched rows,
        estimate when the user was last active in months
        """
        AA_DEPLOY = 20130430225551  # SELECT MIN(aa_lastlogin) on enwiki, should be a good estimate
        #AA_DEPLOY = 20140702101508  # On Legoktm's local development machine
        # Okay, so if a user hasn't logged in for a VERY long time, they're not in AA.
        if row['aa_lastlogin']:
            # Yay, they're in AA.
            touched_ts = row['aa_lastlogin']
        elif row['user_touched'] and (int(row['user_touched']) < AA_DEPLOY):
            # If their user_touched is before AA was deployed, use it.
            touched_ts = row['user_touched']
        else:
            # Their user_touched is after AA was deployed, but they've never logged in.
            # So use the oldest timestamp that we know they haven't logged in since.
            touched_ts = str(AA_DEPLOY)
        touched = Timestamp.fromtimestampformat(touched_ts)
        months = (self.now_utc - touched.to_unix()) / (60 * 60 * 24 * 30)  # Okay, estimate a month is 30 days.
        months += 1  # Touched in the past month (0) is "1 month"
        return months

    def handle_global_user_info(self, res):
        self.global_clashing_accounts += len(res)

    def handle_local_user_info(self, res):
        """
        Takes a set of database results, and processes them
        """
        for row in res:
            months = self.round_user_ts(row)
            self.local_accounts[months] += 1
            if row['lu_attached_method']:
                # Linked to a global account
                self.local_attached[months] += 1
            else:
                self.local_not_attached[months] += 1
                if row['user_email']:
                    # Have an email set, but note that it might not be confirmed.
                    self.local_with_email[months] += 1
                if row['gu_id']:
                    # There is a global account, but this account is not attached.
                    self.local_clash_global[months] += 1
                    # A local email is set AND it matches the global email
                    if row['user_email'] and row['gu_email_authenticated'] and (row['user_email'] == row['gu_email']):
                        self.local_clash_global_but_mergable[months] += 1

    def handle_count_global_users(self, res):
        self.global_accounts = res[0]['COUNT(*)']

    def get_count_global_users(self):
        cur = self.get_db('centralauth').cursor()
        t = time.time()
        cur.execute("""
        SELECT
            COUNT(*)
        FROM globaluser
        """)
        res = cur.fetchall()
        f = time.time() - t
        self.handle_count_global_users(res)
        print 'centralauth: Counting all global users took %s' % f

    def get_bulk_global_user_info(self, limit=5000, last=0):
        cur = self.get_db('centralauth').cursor()
        t = time.time()
        cur.execute("""
        SELECT
            gu_id
        FROM globaluser
        WHERE gu_id > %s
        AND (
            SELECT
                COUNT(*)
            FROM localuser
            WHERE lu_name=gu_name
        ) != (
            SELECT
                COUNT(*)
            FROM localnames
            WHERE ln_name=gu_name
        )
        LIMIT %s""", (last, limit))
        res = cur.fetchall()
        f = time.time() - t
        self.handle_global_user_info(res)
        if res:
            last_id = res[-1]['gu_id']
        else:
            last_id = 0
        print 'centralauth: Fetched up til %s, took %s seconds' % (last_id, f)
        return len(res), last_id

    def get_bulk_local_user_info(self, dbname, limit=5000, last=''):
        """
        Does a massive SQL query to get some basic info
        """
        cur = self.get_db(dbname).cursor()
        t = time.time()
        cur.execute("""
        SELECT
            user_id,
            user_name,
            user_touched,
            aa_lastlogin,
            user_email,
            lu_attached_method,
            gu_id,
            gu_email,
            gu_email_authenticated
        FROM user
        LEFT JOIN centralauth.localuser AS localuser
        ON user.user_name=localuser.lu_name AND lu_wiki=%s
        LEFT JOIN accountaudit_login
        ON user.user_id=accountaudit_login.aa_user
        LEFT JOIN centralauth.globaluser AS globaluser
        ON user.user_name=globaluser.gu_name
        WHERE user_id > %s
        ORDER BY user_id
        LIMIT %s""", (dbname, last, limit))
        res = cur.fetchall()
        f = time.time() - t
        cur.close()
        #print res
        self.handle_local_user_info(res)
        if res:
            last_id = res[-1]['user_id']
        else:
            last_id = 0
        print '%s: Fetched up til %s, took %s seconds' % (dbname, last_id, f)
        return len(res), last_id

    def run_local_info(self):
        limit = 5000
        for dbname in self.wikis:
            print 'Starting on %s...' % dbname
            count, last_id = self.get_bulk_local_user_info(dbname, limit)
            while count == limit:
                count, last_id = self.get_bulk_local_user_info(dbname, limit, last_id)
            self.close_db(dbname)  # Close our connection since we should be done here.

    def run_global_info(self):
        limit = 5000
        print 'Starting to fetch global user count'
        self.get_count_global_users()
        print 'Starting to fetch global info'
        count, last_id = self.get_bulk_global_user_info(limit)
        while count == limit:
            count, last_id = self.get_bulk_global_user_info(limit, last_id)
        self.close_db('centralauth')

    def run(self):
        self.run_local_info()
        self.run_global_info()


class TableCreator:

    MONTHS = (1, 2, 3, 4, 5, 6, 9, 12, 18, 24, 30, 36)

    def find_adjusted_month(self, m):
        if m > 36:
            return 'max'
        return self.MONTHS[bisect.bisect_left(self.MONTHS, m)]

    def clean_global_dict(self, data):
        l = [data]
        for m in self.MONTHS:
            l.append('-')
        return l

    def clean_dict(self, data):
        l = []
        # Do a bit of rounding here...
        for m in list(data):
            if not m in self.MONTHS:
                data[self.find_adjusted_month(m)] += data.pop(m)
        for m in TableCreator.MONTHS:
            l.append(data[m])

        # Ugh hack to handle - rows
        if type(l[0]) == int:
            cum = sum(l)
            l.insert(0, sum(l) + data['max'])
        else:
            cum = '-'
            l.insert(0, '-')

        # Add Keegan's cumulative row
        l.append(cum)

        return l

    def format_num(self, foo):
        if isinstance(foo, (int, long)):
            foo = '{{formatnum:%s}}' % foo
        return foo

    def add_table_row(self, desc, cleaned_data):
        cleaned_data.insert(0, "''%s''" % desc)
        return "\n|" + ' || '.join(self.format_num(foo) for foo in cleaned_data) + '\n|-'

    def create_table(self, audit):
        mapper = OrderedDict([
            ('total', audit.local_accounts),
            ('attached accounts', audit.local_attached),
            ('non-attached accounts', audit.local_not_attached),
            ('... with e-mail', audit.local_with_email),
            ('... who do not clash with another account', defaultdict(lambda: '-')),  # TODO
            ('... who clash with a global account', audit.local_clash_global),
            ('... global clash but appear to be merge-able', audit.local_clash_global_but_mergable),
            ('... who clash with 1 or more local accounts', defaultdict(lambda: '-')),  # TODO
            ('... local clash but appear to be merge-able', defaultdict(lambda: '-')),  # TODO
        ])

        gbl_mapper = OrderedDict([
            ('total', audit.global_accounts),
            ('... who clash with 1 or more local accounts', audit.global_clashing_accounts),
            ('... who do not clash with local accounts', audit.global_accounts-audit.global_clashing_accounts),
        ])

        text = """
{| class="wikitable" style="text-align: center;"
|-
! rowspan="2" colspan="2" | Group !! rowspan="2" | Total !! colspan="13" | Accounts touched in last ... !! rowspan="2" | Group name
|-
! 1mo !! 2mo !! 3mo !! 4mo !! 5mo !! 6mo !! 9mo !! 12mo !! 18mo !! 24mo !! 30mo !! 36mo !! 1-36mo
|-
! rowspan="9" | Local accounts"""
        for desc in mapper:
            cleaned = self.clean_dict(mapper[desc])
            text += self.add_table_row(desc, cleaned)
        # Now global stuff!
        text += '\n! rowspan="3" | Global accounts'
        for desc in gbl_mapper:
            cleaned = self.clean_global_dict(gbl_mapper[desc])
            text += self.add_table_row(desc, cleaned)
        text += '|}'
        return text


if __name__ == '__main__':
    audit = SULAuditer()
    audit.run()
    tc = TableCreator()
    table = tc.create_table(audit)
    # TODO, log this to a wiki page?
    with open(os.path.expanduser('~/sul/table.wikitext'), 'w') as f:
        f.write(table)
