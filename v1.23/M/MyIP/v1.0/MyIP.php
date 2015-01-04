<?php
/**
 * My IP
 *
 * MyIP extension for iSC Inc. MediaWiki.
 * Shows in a special page your IP address.
 *
 * @file
 * @author Suriyaa Sundararuban
 * @date 2014-present
 * @copyright © 2014-present Suriyaa Sundararuban
 * @license MIT License / Apache v2.0 / Copyright
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is a iSC Inc. specific MediaWiki extension named MyIP.\n";
	exit( 1 );
}

// Extension credits that show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'MyIP',
	'version' => '1.0',
	'author' => 'Suriyaa Sundararuban',
	'url' => 'http://extensions.inc.isc/MyIP',
	'descriptionmsg' => 'MyIP-desc',
);

// New user right, given to everyone by default (so even anonymous users can access the special page)
$wgAvailableRights[] = 'MyIP';
$wgGroupPermissions['*']['MyIP'] = true;

// Set up the special page
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['MyIP'] = $dir . 'MyIP.i18n.php';
$wgExtensionMessagesFiles['MyIPAlias'] = $dir . 'MyIP.alias.php';
$wgAutoloadClasses['MyIP'] = $dir . 'MyIP_body.php';
$wgSpecialPages['MyIP'] = 'MyIP';
// Special page group for MediaWiki 1.23+
$wgSpecialPageGroups['MyIP'] = 'users';
