/*global jQuery, mediaWiki*/
/*jslint regexp: true, browser: true, continue: true, sloppy: true, white: true, forin: true, plusplus: true */
( function ( $, mw, apiSandbox, undefined ) {
	/**
	 * HTML-escapes and pretty-formats an API description string
	 *
	 * @param s {String} String to escape
	 * @return {String}
	 */
	var smartEscape = function( s ) {
		if ( !s ) {
			return ''; // @todo: fully verify paraminfo output
		}
		s = mw.html.escape( s );
		if ( s.indexOf( '\n ' ) >= 0 ) {
			// turns *-bulleted list into a HTML list
			s = s.replace( /^(.*?)((?:\n\s+\*?[^\n]*)+)(.*?)$/m, '$1<ul>$2</ul>$3' ); // outer tags
			s = s.replace( /\n\s+\*?([^\n]*)/g, '\n<li>$1</li>' ); // <li> around bulleted lines
		}
		s = s.replace( /\n(?!<)/, '\n<br/>' );
		s = s.replace( /(?:https?:)?\/\/[^\s<>]+/g, function ( s ) {
			// linkify URLs, input is already HTML-escaped above
			return '<a href="' + s + '">' + s + '</a>';
		} );
		return s;
	};


	/**
	 * Class that creates inputs for a query and builds request data
	 *
	 * @constructor
	 * @param $container {jQuery} Container to put UI into
	 * @param info {Object} Query information
	 * @param prefix {String} Additional prefix for parameter names
	 */
	function UiBuilder( $container, info, prefix ) {
		this.$container = $container;
		this.info = info;
		this.prefix = prefix;

		$container.addClass( 'api-sandbox-builder' ).data( 'builder', this );

		this.createInputs();
	}

	UiBuilder.prototype = {
		/**
		 * Creates inputs and places them into container
		 */
		createInputs: function () {
			var $tables = $( '<div>' ), uiBuilder = this,
				$table, $tbody, i, length, param, name, desc;

			$.each( this.info, function ( action, actionInfo ) {
				var actionParameters = actionInfo.parameters || [];
				if ( !actionParameters || ( actionParameters.length === 0 ) ) {
					name = actionInfo ? actionInfo.name : '';
					$table = $( '<div class="warningbox">' ).text(
						mw.message( 'apisb-no-module-params' , name ).text()
					);
				} else {
					$table = $( '<table class="api-sandbox-params mw-datatable"><thead><tr></tr></thead><tbody></tbody></table>' )
						.find( '> thead > tr' )
						.append( mw.html.element( 'th', { 'class': 'api-sandbox-params-label' }, mw.msg( 'apisb-params-param2', action ) ) )
						.append( mw.html.element( 'th', { 'class': 'api-sandbox-params-value' }, mw.msg( 'apisb-params-input' ) ) )
						.append( mw.html.element( 'th', {}, mw.msg( 'apisb-params-desc' ) ) )
						.end();
					$tbody = $table.find( '> tbody' );
					for ( i = 0, length = actionParameters.length; i < length; i += 1 ) {
						param = actionParameters[i];
						name = uiBuilder.prefix + actionInfo.prefix + param.name;
						desc = param.description;
						if ( param.hasOwnProperty( 'deprecated' ) ) {
							desc = mw.msg( 'apisb-params-deprecated', desc );
						}

						$( '<tr>' )
							.append(
								$( '<td class="api-sandbox-params-label"></td>' )
									.html( mw.html.element( 'label',
										{ 'for': 'param-' + name }, name )
									)
							)
							.append( $( '<td class="api-sandbox-params-value"></td>' ).html( uiBuilder.input( action, param, name ) ) )
							.append( $( '<td class="mw-content-ltr" dir="ltr">' ).html( smartEscape( desc ) ) )
							.appendTo( $tbody );
					}
				}
				$tables.append( $table );
			} );
			this.$container.html( $tables );
		},

		/**
		 * Adds module help to a container
		 * @param $container {jQuery} Container to use
		 */
		setHelp: function ( $container ) {
			var descHtml = '';
			$.each( this.info, function ( moduleName, moduleInfo ) {
				descHtml += '<h6>' + moduleName + '</h6>';
				descHtml += smartEscape( moduleInfo.description );
				if ( moduleInfo.helpurls && moduleInfo.helpurls[0] ) {
					descHtml += ' ' + mw.msg( 'parentheses', mw.html.element( 'a', {
						'target': '_blank',
						'href': moduleInfo.helpurls[0]
					}, mw.msg( 'apisb-docs-more' ) ) );
				}
				descHtml += $( '<div>' ).attr( {
					'id': 'api-sandbox-examples-' + moduleName,
					'style': 'display: none',
					'dir': 'ltr',
					'class': 'mw-content-ltr api-sandbox-examples'
				} )[0].outerHTML;
				descHtml += '<br>';
			} );

			$container.html( descHtml );
		},

		input: function ( action, param, name ) {
			var s, id, attributes,
				value = '';
			switch ( param.type ) {
				case 'limit':
					value = '10';
					/* falls through */
				case 'user':
				case 'timestamp':
				case 'integer':
				case 'string':
					s = mw.html.element( 'input', {
						'class': 'api-sandbox-input',
						'id': 'param-' + name,
						'value': value,
						'type': 'text'
					} );
					break;

				case 'bool':
					// normalisation for later use
					param.type = 'boolean';
					/* falls through */
				case 'boolean':
					s = mw.html.element( 'input', {
						'id': 'param-' + name,
						'type': 'checkbox'
					} );
					break;

				case 'namespace':
					param.type = apiSandbox.namespaceOptions;
					/* falls through */
				default:
					if ( typeof param.type === 'object' ) {
						id = 'param-' + name;
						attributes = { 'id': id };
						if ( param.multi !== undefined ) {
							attributes.multiple = true;
							s = this.select( param.type, attributes, false );
						} else {
							s = this.select( param.type, attributes, true );
						}
					} else {
						s = mw.html.element( 'code', {}, mw.msg( 'parentheses', param.type ) );
					}
			}
			return s;
		},

		select: function ( values, attributes, selected ) {
			var i, length, value, face, attrs,
				s = '';

			attributes['class'] = 'api-sandbox-input';
			if ( attributes.multiple === true ) {
				attributes.size = Math.min( values.length, 10 );
			}
			if ( !$.isArray( selected ) ) {
				if ( selected ) {
					s += mw.html.element( 'option', {
						value: '',
						selected: true
					}, mw.msg( 'apisb-select-value' ) );
				}
				selected = [];
			}

			for ( i = 0, length = values.length; i < length; i += 1 ) {
				value = typeof values[i] === 'object' ? values[i].key : values[i];
				face = typeof values[i] === 'object' ? values[i].value : values[i];
				attrs = { 'value': value };

				if ( $.inArray( value, selected ) >= 0 ) {
					attrs.selected = true;
				}

				s += mw.html.element( 'option', attrs, face );
			}
			s = mw.html.element( 'select', attributes, new mw.html.Raw( s ) );
			return s;
		},

		getRequestData: function () {
			var params = '', i, length, param, name, $node, value, prefix = this.prefix;

			$.each( this.info, function ( action, actionInfo ) {
				if ( !actionInfo.parameters ) {
					return;
				}
				for ( i = 0, length = actionInfo.parameters.length; i < length; i += 1 ) {
					param = actionInfo.parameters[i];
					name = prefix + actionInfo.prefix + param.name;
					$node = $( '#param-' + name );
					if ( param.type === 'boolean' ) {
						if ( $node.prop( 'checked' ) === true ) {
							//the = is needed (at least in post), see bug 25174
							params += '&' + name + '=';
						}
					} else {
						value = $node.val();
						if ( value === undefined || value === null || value === '' ) {
							continue;
						}
						if ( $.isArray( value ) ) {
							value = value.join( '|' );
						}
						params += '&' + encodeURIComponent( name ) + '=' + encodeURIComponent( value );
					}
				}
			} );
			return params;
		}
	};

	apiSandbox.UiBuilder = UiBuilder;
}( jQuery, mediaWiki, mediaWiki.apiSandbox ) );
