<?php
/**
 * My IP
 *
 * MyIP extension for iSC Inc. MediaWiki.
 * Shows your IP address in a special page.
 *
 * @file
 * @author Suriyaa Sundararuban
 * @date 2014-present
 * @copyright © 2014-present Suriyaa Sundararuban
 * @license Copyright
 * @ingroup Extensions
 * @ingroup SpecialPage
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is a iSC Inc. specific MediaWiki extension named MyIP.\n";
	exit( 1 );
}

// CREDIT in Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'MyIP',
	'version' => '1.1',
	'author' => array('[http://suriyaa.isc Suriyaa Sundararuban]'),
	'url' => 'http://extensions.inc.isc/MyIP',
	'description' => "Shows your IP address in a [[Special:MyIP|Special page]]",
	'descriptionmsg' => 'MyIP-desc',
        'license-name' => "Copyright",
);

// New user right, given to everyone by default (so even anonymous users can access the special page)
$wgAvailableRights[] = 'MyIP';
$wgGroupPermissions['*']['MyIP'] = true;

// Set up the special page
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['MyIP'] = $dir . '/resources/i18n/MyIP.i18n.php';
$wgExtensionMessagesFiles['MyIPAlias'] = $dir . '/resources/alias/MyIP.alias.php';
$wgAutoloadClasses['MyIP'] = $dir . '/includes/MyIP_body.php';
$wgSpecialPages['MyIP'] = 'MyIP';
// Special page group for MediaWiki 1.23+ and iSC Inc. 1.0+
$wgSpecialPageGroups['MyIP'] = 'users';
