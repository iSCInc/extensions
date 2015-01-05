<?php
/**
 * API sandbox extension. Initial author Max Semenik, based on idea by Salil P. A.
 * License: WTFPL 2.0
 */
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'ApiSandbox',
	'author' => array( 'Max Semenik' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:ApiSandbox',
	'descriptionmsg' => 'apisb-desc',
);

$wgMessagesDirs['ApiSandbox'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['ApiSandbox'] = __DIR__ . '/ApiSandbox.i18n.php';
$wgExtensionMessagesFiles['ApiSandboxAlias'] = __DIR__ . '/ApiSandbox.alias.php';

$wgAutoloadClasses['SpecialApiSandbox'] = __DIR__ . '/SpecialApiSandbox.php';

$wgSpecialPages['ApiSandbox'] = 'SpecialApiSandbox';
$wgSpecialPageGroups['ApiSandbox'] = 'wiki';

$wgResourceModules['ext.apiSandbox'] = array(
	'scripts' => array(
		'apiSandbox.js',
		'UiBuilder.js',
		'main.js',
	),
	'styles' => 'styles.css',
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'ApiSandbox/resources',
	'messages' => array(
		'apisb-loading',
		'apisb-load-error',
		'apisb-request-error',
		'apisb-select-value',
		'apisb-docs-more',
		'apisb-params-param2',
		'apisb-params-input',
		'apisb-params-desc',
		'apisb-params-deprecated',
		'apisb-ns-main',
		'apisb-example',
		'apisb-examples',
		'apisb-clear',
		'apisb-submit',
		'apisb-request-time',
		'parentheses',
		'apisb-no-module-params',
	),
	'dependencies' => array(
		'mediawiki.util',
		'jquery.ui.button',
	)
);

$wgHooks['APIGetDescription'][] = 'efASAPIGetDescription';

/**
 * @param $module ApiBase
 * @param $desc array
 * @return bool
 */
function efASAPIGetDescription( &$module, &$desc ) {
	if ( !$module instanceof ApiMain ) {
		return true;
	}

	$desc[] = 'The ApiSandbox extension is installed on this wiki. It adds a graphical ' .
		'interface to interact with the MediaWiki API.';
	$desc[] = 'It is helpful for new users, as it allows debugging API requests without ' .
		'any external tools.';
	$desc[] = 'See ' . SpecialPage::getTitleFor( 'ApiSandbox' )->getCanonicalURL();

	// Append some more whitespace for ApiMain
	for ( $i = 0; $i < 3; $i++ ) {
		$desc[] = '';
	}

	return true;
}
