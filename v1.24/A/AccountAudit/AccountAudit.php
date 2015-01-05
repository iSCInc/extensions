<?php
/*
 * Extension:AccountAudit. This extension is used to audit active/inactive user accounts
 * by, at least initially, keeping track of the timestamp of the most recent login action
 * for a user on a wiki.
 *
 * @author Peter Gehres <pgehres@wikimedia.org>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install the AccountAudit extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/AccountAudit/AccountAudit.php" );
EOT;
	exit( 1 );
}

$wgExtensionCredits[ 'other' ][ ] = array(
	'path'           => __FILE__,
	'name'           => 'AccountAudit',
	'author'         => array( 'Peter Gehres', ),
	'url'            => 'https://www.mediawiki.org/wiki/Extension:AccountAudit',
	'descriptionmsg' => 'accountaudit-desc',
	'version'        => '1.0.0',
);

$wgAutoloadClasses['AccountAudit'] = __DIR__ . '/AccountAudit.body.php';
$wgAutoloadClasses['AccountAuditHooks'] = __DIR__ . '/AccountAudit.hooks.php';

$wgHooks['UserLoginComplete'][] = 'AccountAuditHooks::onUserLoginComplete';

// For Extension:UserMerge
$wgHooks['MergeAccountFromTo'][] = 'AccountAuditHooks::onMergeAccountFromTo';
$wgHooks['DeleteAccount'][] = 'AccountAuditHooks::onDeleteAccount';

$wgMessagesDirs['AccountAudit'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['AccountAudit'] = __DIR__ . '/AccountAudit.i18n.php';

// Schema updates for update.php
$wgHooks['LoadExtensionSchemaUpdates'][] = 'AccountAuditHooks::loadExtensionSchemaUpdates';
