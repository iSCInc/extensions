/*jslint regexp: true, browser: true, continue: true, sloppy: true, white: true, forin: true, plusplus: true */
/*global mediaWiki,mw */
mediaWiki.apiSandbox = {
	namespaceOptions: [],

	// build namespace cache
	init: function() {
		$.each( mw.config.get( 'wgFormattedNamespaces' ), function ( nsId, nsName ) {
			if ( Number( nsId ) >= 0 ) {
				if ( nsId === '0' ) {
					nsName = mw.msg( 'apisb-ns-main' );
				}
				mw.apiSandbox.namespaceOptions.push( {
					key: nsId,
					value: nsName
				} );
			}
		} );
	}
};

mediaWiki.apiSandbox.init();
