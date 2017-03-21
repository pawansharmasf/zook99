<?php 

/* =This functions setups Meta options for the Deafault page template
**************************************************************/
add_action('admin_init','page_meta_init');
function page_meta_init()
{
	add_meta_box( 'ad_info',	'Facebook ad Details', 'fb_ads', 'post', 'side', 'high');
	add_action('save_post',	'theme_meta_save');
}


function fb_ads(){
	global $post;
	$is_aads = get_post_meta($post->ID,'is_aads',TRUE);
	?>

  <p><label for="is_aads"><input id="is_aads" type="checkbox" name="is_aads" value="yes" <?php if(!empty($is_aads) && $is_aads == 'yes') { echo 'checked="checked"'; } ?>  /> Is Ads running?</label></p>

  
	<?php
	// create a custom nonce for submit verification later
	echo '<input type="hidden" name="my_meta_noncename" value="' . wp_create_nonce(__FILE__) . '" />';
}

  
function theme_meta_save($post_id) 
{
	// making sure that data is coming from our meta box
	if (!wp_verify_nonce($_POST['my_meta_noncename'],__FILE__)) return $post_id;

	// checking user permissions
	if ($_POST['post_type'] == 'page') {
			if (!current_user_can('edit_page', $post_id)) 
				return $post_id;
	} else {
			if (!current_user_can('edit_post', $post_id)) 
				return $post_id;
	}
		$current_data = array();
    $posted_data = $_POST;
    
    foreach($posted_data as $key => $data) {
        $current_data .= get_post_meta($post_id, $key, TRUE);
        
			if (isset($data)) {
				delete_post_meta($post_id,$key);
			}	else {
				update_post_meta($post_id,$key,$data);
			}
        
      add_post_meta($post_id,$key,$data,TRUE);
    }

		$new_arr = array('is_aads');		
		foreach($new_arr as $chk_key) {
			if( isset( $_POST[$chk_key] ) ) {
					update_post_meta( $post_id, $chk_key, 'yes' );
			} else {
					update_post_meta( $post_id, $chk_key, '' );
			}
		}


	return $post_id;
}
?>
