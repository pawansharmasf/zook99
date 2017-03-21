/**
 * Main jQuery media file for the plugin.
 */

jQuery(document).ready(function(){
		jQuery('.rm_options').slideUp();
		
		jQuery('.rm_section h3').click(function(){		
			if(jQuery(this).parent().next('.rm_options').css('display')=='none')
				{	jQuery(this).removeClass('inactive');
					jQuery(this).addClass('active');
					jQuery(this).children('img').removeClass('inactive');
					jQuery(this).children('img').addClass('active');
					
				}
			else
				{	jQuery(this).removeClass('active');
					jQuery(this).addClass('inactive');		
					jQuery(this).children('img').removeClass('active');			
					jQuery(this).children('img').addClass('inactive');
				}
				
			jQuery(this).parent().next('.rm_options').slideToggle('slow');	
		});
		
		
});



( function( $ ) {
    $( function() {
        $.fn.wptuts = function( options ) {
					
            var selector = $( this ).selector; // Get the selector
            // Set default options
            var defaults = {
                'preview' : '.preview-upload',
                'text'    : '.text-upload',
                'button'  : '.button-upload'
            };
            var options  = $.extend( defaults, options );
 
            // When the Button is clicked...
            $( options.button ).click( function() {
                // Get the Text element.
                var text = $( this ).siblings( options.text );
 
                // Show WP Media Uploader popup
                tb_show( 'Upload a logo', 'media-upload.php?referer=wptuts&type=image&TB_iframe=true&post_id=0', false );
 
                // Re-define the global function 'send_to_editor'
                // Define where the new value will be sent to
                window.send_to_editor = function( html ) {
                    // Get the URL of new image
                    var src = $( 'img', html ).attr( 'src' );
                    // Send this value to the Text field.
                    text.attr( 'value', src ).trigger( 'change' );
                    tb_remove(); // Then close the popup window
                }
                return false;
            } );
 
            $( options.text ).bind( 'change', function() {
                // Get the value of current object
                var url = this.value;
                // Determine the Preview field
                var preview = $( this ).siblings( options.preview );
                // Bind the value to Preview field
                $( preview ).attr( 'src', url );
            } );
        }
 
        // Usage
        $( '.upload' ).wptuts(); // Use as default option.
    } );
} ( jQuery ) );

