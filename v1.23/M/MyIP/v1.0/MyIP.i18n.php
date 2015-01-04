<?php
/**
 * Internationalization file for MyIP extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English (English) */
$messages['en'] = array(
	'myip' => 'My IP',
	'myip-desc' => 'Shows current user\'s [[Special:MyIP|IP address]]',
	'myip-out' => 'Your IP address:',
	// For Special:ListGroupRights
	'right-myip' => 'View [[Special:MyIP|own IP address]]',
);

$messages['qqq'] = array(
	'myip-desc' => '{{desc}}',
	'right-myip' => '{{doc-right|myip}}',
);

/** German (Deutsch) */
$messages['de'] = array(
	'myip' => 'Meine IP',
	'myip-desc' => 'Zeigt den aktuellen Benutzer\s [[Special:MyIP|IP-Adresse]]',
	'myip-out' => 'Deine IP-Adresse:',
	'right-myip' => 'Zeige [[Special:MyIP|meine IP-Adresse]]',
);
