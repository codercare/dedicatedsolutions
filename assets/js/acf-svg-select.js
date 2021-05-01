(function($){
	
	
	/**
     * Returns the Select2 version number which is used by ACF.
     *
     * @return int
     */
    function get_acf_select2_version() {
        if ( acf.isset( window, 'jQuery', 'fn', 'select2', 'amd' ) ) {
            return 4;
        }

        if ( acf.isset( window, 'Select2' ) ) {
            return 3;
        }

        return false;
    }
	
	
	/**
	*  initialize_field
	*
	*  This function will initialize the $field.
	*
	*  @date	30/11/17
	*  @since	5.6.5
	*
	*  @param	n/a
	*  @return	n/a
	*/
	function initialize_field( $el ) {
        var $el_select = $el.find( 'select' );
        var el_select_args = $el_select.data();
        var render_icon = function( id, text ) {
            var output = '';
            output += '<span class="select2-swp-acf-si">';
            output += '<img src="' + $el_select.attr('data-image_path') + text + '" height="25px" width="25px" />&nbsp;&nbsp;'; 
            output += text != '' ? '<span class="select2-swp-acf-si__name">' + text + '</span>' : '';
            output += '</span>';

            return output;
        };

        acf.add_filter( 'select2_args', function( select2_args, $select, args, $f ) {
            if ( $el_select === $select ) {
                /**
                 * Checks if it's the Select2 v4 or v3 which is used.
                 *
                 * https://stackoverflow.com/questions/26950588/select2-ajax-define-formatresult-formatselection-and-initselection-roles-and-b#answer-37890878
                 * https://select2.org/configuration/options-api
                 *
                 * It seems that since ACF Pro 5.7.0, `acf.select.version` doesn't exist anymore :/
                 * Now, ACF Pro uses `acf.newSelect2` which doesn't offer the Select2 version in its properties.
                 */
                var select2_version = acf.select2.version || get_acf_select2_version();

                if ( select2_version == 4 ) {
                    select2_args.templateResult = function( state ) {
                        // run default templateResult
                        var text = $.fn.select2.defaults.defaults.templateResult( state );

                        return render_icon( state.id, text );
                    };
                    select2_args.templateSelection = function( state ) {
                        return state.id ? render_icon( state.id, state.text ) : state.text;
                    };
                // v3
                } else {
                    select2_args.formatResult = function( result, container, query, escapeMarkup ) {
                        // run default formatResult
                        var text = $.fn.select2.defaults.formatResult( result, container, query, escapeMarkup );

                        return render_icon( result.id, text );
                    };
                    select2_args.formatSelection = function( object, $div ) {
                        return object.id ? render_icon( object.id, object.text ) : object.text;
                    };
                }
            }

            return select2_args;
        } );

        acf.select2.init(
            $el_select,
            el_select_args,
            $el
        );
    }
	
	
	if( typeof acf.add_action !== 'undefined' ) {
	
		/*
		*  ready & append (ACF5)
		*
		*  These two events are called when a field element is ready for initizliation.
		*  - ready: on page load similar to $(document).ready()
		*  - append: on new DOM elements appended via repeater field or other AJAX calls
		*
		*  @param	n/a
		*  @return	n/a
		*/
		
		acf.add_action('ready_field/type=svg_select', initialize_field);
		acf.add_action('append_field/type=svg_select', initialize_field);
		
		
	} else {
		
		/*
		*  acf/setup_fields (ACF4)
		*
		*  These single event is called when a field element is ready for initizliation.
		*
		*  @param	event		an event object. This can be ignored
		*  @param	element		An element which contains the new HTML
		*  @return	n/a
		*/
		
		$(document).on('acf/setup_fields', function(e, postbox){
			
			// find all relevant fields
			$(postbox).find('.field[data-field_type="svg_select"]').each(function(){
				
				// initialize
				initialize_field( $(this) );
				
			});
		
		});
	
	}

})(jQuery);