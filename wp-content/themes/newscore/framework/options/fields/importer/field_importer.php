<?php
class Radium_Options_importer extends Radium_Options{	
	
	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since 2.1.0
	*/
	function __construct($field = array(), $value ='', $parent){
		
		//parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		$this->field = $field;
		$this->value = $value;
		//$this->render();
		
	}//function
	
	//Check if demo data is installed already
	function check_demo_data_installed() {
		return get_option( 'radium_dummy_install' ) != "";
	}
	
	/**
	 * Field Render Function.
	 *
	 * Takes the vars and outputs the HTML for the field in the settings
	 *
	 * @since 2.1.0
	*/
	function render(){
		
		$output = null;
		
		//Check whether demo data has already been installed 
		if ( $this->check_demo_data_installed() )
			$output .='<div id="message" class="updated fade" style="width:450px;margin:15px 0"><p><strong>Dummy content already installed.</strong></p></div>';
		
		$output .='<button id="import_dummy" type="submit" class="button-primary blue"/><img class="import_dummy_loading" style="display:none;" src="images/wpspin_light.gif" alt="Loading" /><span>'.__('Import dummy content','radium').'</span></button>
		<p class="import_dummy_result"></p>
		<script>	
		jQuery(document).ready(function(){
			jQuery("#import_dummy").bind("click",function(){
			
				jQuery.ajax({
					
						type: "post",
						url: $AjaxUrl,
						dataType: "json",
						data: {action: "radium_install_dummy",   _ajax_nonce: $ajaxNonce},
						beforeSend: function() {
							jQuery(".import_dummy_result").html("");
							jQuery(".import_dummy_loading").css({display:""});
							jQuery("#import_dummy").attr("disabled", "disabled");
							jQuery("#import_dummy > span").html("Importing content...");					
							jQuery(".import_dummy_result").html("Please wait, it can take a few minutes.");					
						
						}, //fadeIn loading just when link is clicked
						success: function(response){ //so, if data is retrieved, store it in html
							var dummy_result = jQuery(".import_dummy_result");
							jQuery("#import_dummy").remove();
							if(typeof response != "undefined")
							{
								if(response.hasOwnProperty("status"))
								{
									switch(response.status)
									{
										case "success":
												dummy_result.html("Completed");
											break;
										case "error":
												dummy_result.html("<font color=\'red\'>"+response.data+"</font>");
											break;
										default:
											break;
									}
									
								}
							}
							jQuery(".import_dummy_loading").css({display:"none"});
						}
					}); //close jQuery.ajax
				
				return false;
			});
		});</script>';
		
		echo $output;
		
	}//function
	
}//class
?>