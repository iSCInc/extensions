/*global jQuery, mediaWiki, apiSandbox, mw*/
/*jslint regexp: true, browser: true, continue: true, sloppy: true, white: true, forin: true, plusplus: true */
( function ( $, mw, apiSandbox, undefined ) {

	var mainRequest, genericRequest, generatorRequest, queryRequest, // UiBuilder objects
		// Caches
		paramInfo,
		// page elements
		$format, $action, $query, $queryRow, $help, $mainContainer, $genericContainer,
		$generatorContainer, $queryContainer, $generatorBox, $form, $submit, $requestUrl, $requestPost,
		$output, $postRow, $buttonsContainer, $examplesButton, $pageScroll,
		UiBuilder = apiSandbox.UiBuilder;

	/** Local utility functions **/

	// get the first element in a list that is "scrollable"
	// depends on browser and skin (i.e. body or html)
	function getScrollableElement( /* selectors, ... */ ) {
		var i, argLen, el, $el, canScroll;
		for ( i = 0, argLen = arguments.length; i < argLen; i += 1 ) {
			el = arguments[i];
			$el = $( el );
			if ( $el.scrollTop() > 0 ) {
				return el;
			} else {
				$el.scrollTop( 1 );
				canScroll = $el.scrollTop() > 0;
				$el.scrollTop( 0 );
				if ( canScroll ) {
					return el;
				}
			}
		}
		return [];
	}

	function updateGenerator( callback ) {
		var generator = $( '#param-generator' ).val();
		if ( generator === '' ) {
			$generatorBox.hide();
		} else {
			$generatorBox.show();
			getParamInfo(
				{ querymodules: generator },
				function () {
					showLoading( $generatorContainer );
				},
				function () {
					generatorRequest = new UiBuilder( $generatorContainer, { generator: paramInfo.querymodules[generator] }, 'g' );
					if ( typeof callback === 'function' ) {
						callback();
					}
				},
				function () {
					showLoadError( $generatorContainer, 'apisb-request-error' );
				}
			);
		}
	}

	/**
	 * Displays a spinner and a "Loading..."
	 * @param $element {jQuery} Container for the loading message
	 */
	function showLoading( $element ) {
		$element
			.text( mw.msg( 'apisb-loading' ) )
			.prepend( $.createSpinner( { size: 'small', type: 'inline' } ) );
	}

	function showLoadError( $element, message ) {
		$element.html(
			mw.html.element( 'span', { 'class': 'error' }, mw.msg( message ) )
		);
	}

	/**
	 *
	 * @param what {object} Object with properties defining which information to retrieve, e.g. {modules:'query'}
	 * @param loadCallback {function} Callback called before retrieval of information from API starts
	 * @param completeCallback {function} Callback called when information is ready, either from API or cache
	 * @param errorCallback {function} Callback called when API call fails
	 */
	function getParamInfo( what, loadCallback, completeCallback, errorCallback ) {
		var needed, param, subParam, values;

		needed = {};

		// Copy the requested API call parameters, skipping the ones we already have in cache.
		for ( param in what ) {
			// For safety/forwards-compatibility we're only touching 'modules' and 'querymodules'.
			// In the worst case we'll make some unnecessary requests for any other ones.
			if ( param !== 'modules' && param !== 'querymodules' ) {
				needed[param] = what[param];
			} else {
				// paramInfo[param] is known to be an object here, and what[param] is a pipe-separated list.
				// Keep only values for which we do not yet have cached information.
				/*jshint loopfunc:true */
				values = $.grep( what[param].split( '|' ), function ( value ) {
					return !paramInfo[param].hasOwnProperty( value );
				} );
				if ( values.length !== 0 ) {
					needed[param] = values.join( '|' );
				}
			}
		}

		if ( $.isEmptyObject( needed ) ) {
			// Everything's in cache
			completeCallback();
		} else {
			loadCallback();
			needed.format = 'json';
			needed.action = 'paraminfo';
			$.getJSON(
				mw.util.wikiScript( 'api' ),
				needed,
				function ( data ) {
					var prop, i, info;

					if ( data.error || !data.paraminfo ) {
						errorCallback();
						return;
					}

					for ( prop in data.paraminfo ) {
						if ( paramInfo[prop] === undefined ) {
							paramInfo[prop] = data.paraminfo[prop];
						} else {
							for ( i = 0; i < data.paraminfo[prop].length; i++ ) {
								info = data.paraminfo[prop][i];
								if ( !paramInfo[prop].hasOwnProperty( info.name ) ) {
									paramInfo[prop][info.name] = info;
								}
							}
						}
					}

					if ( data.warnings ) {
						var tooManyValuesWarning = data.warnings.paraminfo && data.warnings.paraminfo['*'];
						var tooManyValuesWarningRegexp = /^Too many values supplied for parameter '(querymodules|modules)'/;

						if ( tooManyValuesWarning && tooManyValuesWarningRegexp.test( tooManyValuesWarning ) ) {
							// We request more values than we can, but we have some of them cached now.
							// Call getParamInfo() again, which will fire the same request with them skipped.
							getParamInfo( what, loadCallback, completeCallback, errorCallback );
						} else {
							// Some other warning, let's bail.
							errorCallback();
							return;
						}
					} else {
						completeCallback();
					}
				}
			).error( errorCallback );
		}
	}

	/**
	 * Resets all form fields
	 */
	function resetUI() {
		$( '.api-sandbox-builder' ).each( function () {
			$( this ).data( 'builder' ).createInputs();
		} );
	}

	/**
	 * Sets the selected element(s) of a <select> input
	 * @param $el {jQuery} Element to modify
	 * @param value {string} Value(s) to select
	 */
	function setSelect( $el, value ) {
		var i, splitted;
		if ( $el.attr( 'multiple' ) ) {
			splitted = value.split( '|' );
			for ( i = 0; i < splitted.length; i++ ) {
				$el.find( 'option[value="' + mw.html.escape( splitted[i] ) + '"]' )
					.prop( 'selected', true );
			}
		} else {
			$el.find( 'option[value="' + mw.html.escape( value ) + '"]' )
				.prop( 'selected', true );
		}
	}

	/**
	 * @context {Element}
	 * @param e {jQuery.Event}
	 */
	function exampleClick( e ) {
		var link;
		e.preventDefault();

		resetUI();
		link = $( this ).data( 'exampleLink' ).replace( /^.*?\?/, '' );
		applyParams( link );
	}

	/**
	 * Sets form fields according to a URI query string
	 * @param link {string} Query string to apply
	 */
	function applyParams( link ) {
		var params, i, obj, pieces, key, value;
		params = link.split( '&' );
		obj = {};
		for ( i = 0; i < params.length; i++ ) {
			pieces = params[i].split( '=' );
			if ( pieces.length === 1 ) { // checkbox
				obj[pieces[0]] = null;
			} else {
				key = pieces[0];
				value = decodeURIComponent( pieces.slice( 1 ).join( '=' ) );
				obj[key] = value;
			}
		}
		applyObject( obj );

		/**
		 * Sets form fields according to an object properties
		 * @param obj {object} Object with properties representing an API request, e.g. {action:'edit',format:'json'}
		 */
		function applyObject( obj ) {
			var blacklist = [];

			// Set action
			if ( obj.action ) {
				setSelect( $action, obj.action );
				updateUI( function () {
					blacklist.push( 'action' );
					applyListParameter( obj, blacklist );
				}, true );
			} else {
				applyGeneratorParameter( obj, blacklist );
			}
		}

		function applyListParameter( obj, blacklist ) {
			var query = [];
			// Set query module, if any
			if ( obj.list ) {
				blacklist.push( 'list' );
				query = query.concat( $.map( obj.list.split( '|' ), function ( value ) {
					return 'list=' + value;
				} ) );
			}
			if ( obj.prop ) {
				blacklist.push( 'prop' );
				query = query.concat( $.map( obj.prop.split( '|' ), function ( value ) {
					return 'prop=' + value;
				} ) );
			}
			if ( obj.meta ) {
				blacklist.push( 'meta' );
				query = query.concat( $.map( obj.meta.split( '|' ), function ( value ) {
					return 'meta=' + value;
				} ) );
			}
			if ( query ) {
				setSelect( $query, query.join( '|' ) );
				updateUI( function () {
					applyGeneratorParameter( obj, blacklist );
				}, true );
			} else {
				applyGeneratorParameter( obj, blacklist );
			}
		}

		function applyGeneratorParameter( obj, blacklist ) {
			// Set generator, if any
			if ( obj.generator ) {
				setSelect( $( '#param-generator' ), obj.generator );
				updateGenerator( function () {
					applyRemainingFieldParameters( obj, blacklist );
				} );
			} else {
				applyRemainingFieldParameters( obj, blacklist );
			}
		}

		function applyRemainingFieldParameters( obj, blacklist ) {
			var key, value, $el, nodeName;
			// Set the remaining fields
			for ( key in obj ) {
				if ( obj.hasOwnProperty( key ) && blacklist.indexOf( key ) === -1 ) {
					value = obj[ key ];
					$el = $( '#param-' + key );
					if ( value === null ) { // checkbox
						$( '#param-' + key ).prop( 'checked', true );
					} else if ( $el[ 0 ] ) {
						nodeName = $el[ 0 ].nodeName.toLowerCase();
						switch ( nodeName ) {
							case 'select':
								setSelect( $el, value );
								break;
							case 'input':
								if ( $el.attr( 'type' ) === 'checkbox' ) {
									$( '#param-' + key ).prop( 'checked', true );
								} else {
									$el.val( value );
								}
								break;
							default:
								mw.log( 'Unrecognised node name "' + nodeName + '"' );
						}
					}
				}
			}
		}
	}

	function updateExamples( info ) {
		var i, $list, urlRegex, count, href, text, match, prefix, $prefix, linkText;

		$.each( info, function ( action, actionInfo ) {
			if ( actionInfo.allexamples === undefined ) {
				return;
			}
			var $actionExamplesContent = $( '#api-sandbox-examples-' + action );
			// on 1.18, convert everything into 1.19 format
			if ( actionInfo.allexamples.length > 0 && typeof actionInfo.allexamples[0] === 'string' ) {
				for ( i = 0; i < actionInfo.allexamples.length; i++ ) {
					actionInfo.allexamples[i] = { '*': actionInfo.allexamples[i] };
				}
			}
			$actionExamplesContent.hide().html( '' );
			$list = $( '<ul>' );
			urlRegex = /api.php\?\S+/m;
			count = 0;
			for ( i = 0; i < actionInfo.allexamples.length; i++ ) {
				href = '';
				text = '';
				while ( i < actionInfo.allexamples.length && actionInfo.allexamples[i].description === undefined ) {
					match = urlRegex.exec( actionInfo.allexamples[i]['*'] );
					if ( match ) {
						href = match[0];
						break;
					} else {
						text += '\n' + actionInfo.allexamples[i]['*'];
					}
					i++;
				}
				if ( !href ) {
					href = actionInfo.allexamples[i]['*'];
				}
				if ( !text ) {
					text = actionInfo.allexamples[i].description !== undefined ? actionInfo.allexamples[i].description : href;
				}
				prefix = text.replace( /[^\n]*$/, '' );
				$prefix = prefix.length ? $( '<b>' ).text( prefix ) : [];
				linkText = text.replace( /^.*\n/, '' );
				$( '<li>' )
					.append( $prefix )
					.append(
						$( '<a>' )
							.attr( 'href', '#' )
							.data( 'exampleLink', href )
							.text( linkText )
							.click( exampleClick )
					).appendTo( $list );
				count++;
			}
			$examplesButton.button( 'option', 'text', mw.msg( count === 1 ? 'apisb-example' : 'apisb-examples' ) );
			$list.appendTo( $actionExamplesContent );
			if ( count ) {
				$examplesButton.show();
			} else {
				$examplesButton.hide();
			}
		} );
	}

	function updateQueryInfo( action, query, callback ) {
		var data, queryModule, queryModules = [],
			isQuery = action === 'query';

		if ( action === '' || ( isQuery && query !== null && query[0] === "" ) ) {
			$submit.button( 'option', 'disabled', true );
			return;
		}

		if ( $.isArray( query ) ) {
			$.each( query, function ( key, value ) {
				queryModules.push( value.replace( /^.*=/, '' ) );
			} );
		} else if ( query !== null ) {
			queryModules.push( query.replace( /^.*=/, '' ) );
		}

		query = queryModules.join( '|' );

		data = {};
		if ( isQuery ) {
			data.querymodules = query;
		} else {
			data.modules = action;
		}
		getParamInfo( data,
			function () {
				showLoading( $mainContainer );
				$submit.button( 'option', 'disabled', true );
				$( '.api-sandbox-examples' ).hide();
			},
			function () {
				var info = {};
				if ( isQuery ) {
					$.each( queryModules, function ( key, queryModule )  {
						info[queryModule] = paramInfo.querymodules[queryModule];
					} );
				} else {
					info[action] = paramInfo.modules[action];
				}
				mainRequest = new UiBuilder( $mainContainer, info, '' );
				mainRequest.setHelp( $help );
				$submit.button( 'option', 'disabled', false );
				updateExamples( info );
				if ( typeof callback === 'function' ) {
					callback();
				}
			},
			function () {
				$submit.button( 'option', 'disabled', false );
				showLoadError( $mainContainer, 'apisb-load-error' );
				$( '.api-sandbox-examples' ).hide();
			}
		);
	}

	/**
	 * Updates UI after basic query parameters have been changed
	 */
	function updateUI( callback, callIfEmpty ) {
		var a = $action.val(),
			q = $query.val(),
			isQuery = a === 'query';
		if ( isQuery ) {
			$queryRow.show();
			if ( q !== '' ) {
				$queryContainer.show();
			} else {
				$queryContainer.hide();
			}
		} else {
			$queryRow.hide();
			$queryContainer.hide();
		}
		$mainContainer.text( '' );
		$help.text( '' );
		updateQueryInfo( a, q, callback );
		$generatorBox.hide();
		if ( q === '' && callIfEmpty && typeof callback === 'function' ) {
			callback();
		}
	}

	/**
	 * Extract the backend response time from the HTML source of a page.
	 *
	 * @param html {string} HTML source of a MediaWiki page
	 * @return {number|null} Backend response time in seconds or null if a value
	 *  could not be extracted
	 */
	function extractResponseTime( html ) {
		var match;

		// Starting with MediaWiki 1.23 (b20f740e38), the backend response time
		// is embedded in the page source as a JavaScript configuration variable
		// set to whole milliseconds.
		match = html.match( /"wgBackendResponseTime":\s*(\d+)/ );
		if ( match !== null ) {
			return parseInt( match[1], 10 ) / 1000;
		}

		// Earlier versions embed the backend response time in seconds in an
		// HTML comment.
		match = html.match( /<!-- Served [^>]*?in (\d+(\.\d+)?) secs. -->/ );
		if ( match !== null ) {
			return parseFloat( match[1] );
		}

		return null;
	}

	function runQuery( options ) {
		$.ajax( {
			url: options.url,
			data: options.params || {},
			dataType: 'text',
			type: options.type || 'GET',
			success: function ( origData, textStatus, jqXHR ) {
				var data = origData, match, respTime;

				if ( /html/.test( jqXHR.getResponseHeader( 'Content-Type' ) ) ) {
					match = data.match( /<pre[ >][\s\S]*<\/pre>/ );
				}

				if ( match ) {
					respTime = extractResponseTime( data );
					data = match[0];
					if ( respTime !== null ) {
						data += '\n<br/>' + mw.message( 'apisb-request-time', respTime ).escaped();
					}
				} else {
					// some actions don't honor user-specified format
					data = '<pre>' + mw.html.escape( data ) + '</pre>';
				}
				$output.html( data );
				if ( options.success ) {
					options.success( origData );
				}
			},
			error: function () {
				showLoadError( $output, 'apisb-request-error' );
			},
			// either success or error
			complete: function () {
				$pageScroll.animate( { scrollTop: $( '#api-sandbox-result' ).offset().top }, 400 );
			}
		} );
	}

	/** When the dom is ready... **/

	$( function () {
		$( '#api-sandbox-content' ).show();

		// init page elements
		$format = $( '#api-sandbox-format' );
		$action = $( '#api-sandbox-action' );
		$query = $( '#api-sandbox-query' );
		$queryRow = $( '#api-sandbox-query-row' );
		$help = $( '#api-sandbox-help' );
		$mainContainer = $( '#api-sandbox-main-inputs' );
		$generatorContainer = $( '#api-sandbox-generator-inputs' );
		$queryContainer = $( '#api-sandbox-query-inputs' );
		$generatorBox = $( '#api-sandbox-generator-parameters' );
		$requestUrl = $( '#api-sandbox-url' );
		$requestPost = $( '#api-sandbox-post' );
		$output = $( '#api-sandbox-output' );
		$postRow = $( '#api-sandbox-post-row' );
		$buttonsContainer = $( '#api-sandbox-buttons' );
		$pageScroll = $( getScrollableElement( 'body', 'html' ) );
		$form = $( '#api-sandbox-form' );
		$submit = $( '<button>' )
			.attr( 'type', 'submit' )
			.text( mw.msg( 'apisb-submit' ) )
			.appendTo( $buttonsContainer );
		$submit = $submit.clone( /*dataAndEvents=*/true, /*deep=*/true )
			.appendTo( '#api-sandbox-parameters' )
			.add( $submit )
			.button( { disabled: true } );

		$examplesButton = $( '<button>' )
			.attr( 'type', 'button' )
			.text( mw.msg( 'apisb-examples' ) )
			.click( function ( e ) {
				$( '.api-sandbox-examples' ).slideToggle();
			} )
			.button()
			.hide()
			.appendTo( $buttonsContainer );

		$( '<button>' )
			.attr( 'type', 'button' )
			.text( mw.msg( 'apisb-clear' ) )
			.click( function ( e ) {
				resetUI();
			} )
			.button()
			.appendTo( $buttonsContainer );

		// init caches
		paramInfo = { modules: {}, querymodules: {} };

		// load stuff we need from the beginning
		getParamInfo(
			{
				mainmodule: 1,
				modules: 'query'
			},
			function () {
			},
			function () {
				paramInfo.mainmodule.parameters = paramInfo.mainmodule.parameters.slice( 2 ); // remove format and action
				paramInfo.modules.query.parameters = paramInfo.modules.query.parameters.slice( 3 );
				$genericContainer = $( '#api-sandbox-generic-inputs > div' );
				genericRequest = new UiBuilder( $genericContainer, { main: paramInfo.mainmodule }, '' );
				queryRequest = new UiBuilder( $queryContainer, { query: paramInfo.modules.query }, '' );
			},
			function () {
			}
		);

		$action.change( function () {
			updateUI();
		} );
		$query.change( function ( event ) {
			if ( $query.val() !== null ) {
				updateUI();
			}
		} );

		$( document ).on( 'change', '#param-generator', updateGenerator );

		function doHash() {
			var hash = window.location.hash.replace( /^#/, '' );
			applyParams( hash );
		}

		$( window ).on( 'popstate', function ( e ) {
			if ( genericRequest ) {
				genericRequest.createInputs();
			}
			if ( generatorRequest ) {
				generatorRequest.createInputs();
			}
			if ( queryRequest ) {
				queryRequest.createInputs();
			}
			doHash();
		} );

		$form.submit( function ( e ) {
			var url, params, mustBePosted, historyEntry, formatStr;

			// Prevent browser from submitting the form
			// and reloading the page to the action-url.
			// We're doing it with AJAX instead, below.
			e.preventDefault();

			if ( $submit.button( 'option', 'disabled' ) === true ) {
				return;
			}

			url = $.param( { action: $action.val() } );
			params = mainRequest.getRequestData();
			$.each( mainRequest.info, function ( moduleName, moduleInfo ) {
				if ( moduleInfo.mustbeposted === '' ) {
					mustBePosted = true;
				}
			} );
			if ( $action.val() === 'query' ) {
				var lists = [], metas = [], props = [];
				$.each( $query.val(), function ( index, queryParam ) {
					if ( queryParam.substring( 0, 5 ) == 'list=' ) {
						lists.push( queryParam.substring( 5 ) );
					} else if ( queryParam.substring( 0, 5 ) == 'meta=' ) {
						metas.push( queryParam.substring( 5 ) );
					} else if ( queryParam.substring( 0, 5 ) == 'prop=' ) {
						props.push( queryParam.substring( 5 ) );
					}
				} );
				url += '&';
				if ( lists.length ) url += 'list=' + lists.join( '|' ) + '&';
				if ( metas.length ) url += 'meta=' + metas.join( '|' ) + '&';
				if ( props.length ) url += 'prop=' + props.join( '|' ) + '&';
				url = url.substring( 0, url.length - 1 ); // Get rid of the last &
				params += queryRequest.getRequestData();
			}
			formatStr = $format.val();
			url += '&format=' + formatStr;

			params += genericRequest.getRequestData();
			if ( $( '#param-generator' ).length && $( '#param-generator' ).val() ) {
				params += generatorRequest.getRequestData();
			}

			historyEntry = '#' + url + params;

			if ( window.location.hash !== historyEntry && history && history.pushState ) {
				history.pushState( null, '', historyEntry );
			}
			url = mw.util.wikiScript( 'api' ) + '?' + url;

			showLoading( $output );
			if ( mustBePosted ) {
				$requestUrl.val( url );
				if ( params.length > 0 ) {
					params = params.substr( 1 ); // remove leading &
				}
				$requestPost.val( params );
				$postRow.show();
			} else {
				$requestUrl.val( url + params );
				$postRow.hide();
			}
			// There is no nonefm format
			if ( formatStr !== 'none' ) {
				url = url.replace( /(&format=[^&]+)/, '$1fm' );
			}
			runQuery( { url: url, params: params,
				type: mustBePosted ? 'POST' : 'GET' } );
		} );
		doHash();
	} );
}( jQuery, mediaWiki, mw.apiSandbox ) );
