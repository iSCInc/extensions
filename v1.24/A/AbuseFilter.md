AbuseFilter
====

    require_once "$IP/extensions/AbuseFilter/AbuseFilter.php";
        $wgGroupPermissions['sysop']['abusefilter-modify'] = true;
        $wgGroupPermissions['*']['abusefilter-log-detail'] = true;
        $wgGroupPermissions['*']['abusefilter-view'] = true;
        $wgGroupPermissions['*']['abusefilter-log'] = true;
        $wgGroupPermissions['sysop']['abusefilter-private'] = true;
        $wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
        $wgGroupPermissions['sysop']['abusefilter-revert'] = true;
