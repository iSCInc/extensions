<?php
/**
 * Main class for MyIP
 * @file
 * @ingroup Extensions
 */
if ( !defined( 'MEDIAWIKI' ) ) {
	echo "This is a iSC Inc. specific MediaWiki extension named MyIP.\n";
	exit( 1 );
}

class MyIP extends SpecialPage {

	/**
	 * Constructor
	 */
	public function  __construct() {
		parent::__construct( 'MyIP'/*class*/, 'myip'/*restriction*/ );
	}

	/**
	 * Show the special page
	 *
	 * @param $par Mixed: parameter passed to the page or null
	 */
	public function execute( $par ) {
		global $wgOut;
		$wgOut->setPageTitle( wfMsg( 'myip' ) );
		$ip = wfGetIP();
		$wgOut->addWikiText( wfMsg( 'myip-out' ) . " $ip" );
	}
}
