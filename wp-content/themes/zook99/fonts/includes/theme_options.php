<?php

$themename = "Theme";
$shortname = "drtheme";

$options = array (

	array( "name" => $themename." Options",
		"type" => "title"),

	array( "name" => "General Settings",
		"type" => "section"),

	array( "type" => "open"),
	
	array( 
		"type" => "block_heading",
		"name" => "Website Logo"
		),

	array( "name" => "Website Logo",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_siteLogo",
		"type" => "website_logo",
		"std" => ""),


	array( 
		"type" => "block_heading",
		"name" => "Featured testimonial"
		),

	array( "name" => "Testimonial Content",
		"desc" => "Testimonial Text (80 to 100 characters)",
		"id" => $shortname."_featuredTesti",
		"type" => "textarea",
		"std" => ""),

	array( "name" => "Written by",
		"desc" => "Writer name",
		"id" => $shortname."_writtenBy",
		"type" => "text",
		"std" => ""),
	
	array( 
		"type" => "block_heading",
		"name" => "General Contacts"
		),

	array( "name" => "Toll Free number",
		"desc" => "(855) 566-8181",
		"id" => $shortname."_tollFreeNum",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Contact Email",
		"desc" => "name@example.com",
		"id" => $shortname."_contactEmail",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Facebook Link",
		"desc" => "http://www.facebook.com/pagename",
		"id" => $shortname."_FBlink",
		"type" => "text",
		"std" => ""),

	array( "name" => "YouTube Link",
		"desc" => "http://www.youtube.com/channel",
		"id" => $shortname."_YTlink",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Twitter Link",
		"desc" => "http://www.twitter.com/username",
		"id" => $shortname."_TWlink",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Copyright Info",
		"desc" => "© 2014 The Senior Safety Company. All Rights Reserved",
		"id" => $shortname."_copyrightInfo",
		"type" => "text",
		"std" => ""),
	
	array( "name" => "Header Text",
		"desc" => "Financing available",
		"id" => $shortname."_headerText",
		"type" => "editor",
		"std" => ""),
	


	array( 
		"type" => "block_heading",
		"name" => "Industry Links (Footer)"
		),

	array( "name" => "Logo 1",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_fLogo1",
		"type" => "industry_logo",
		"std" => ""),

	array( 
		"id" => $shortname."_fLogo1link",		
		"type" => "industry_logo_link",
		"std" => ""),

	array( "name" => "Logo 2",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_fLogo2",
		"type" => "industry_logo",
		"std" => ""),

	array( 
		"id" => $shortname."_fLogo2link",		
		"type" => "industry_logo_link",
		"std" => ""),

	array( "name" => "Logo 3",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_fLogo3",
		"type" => "industry_logo",
		"std" => ""),

	array( 
		"id" => $shortname."_fLogo3link",		
		"type" => "industry_logo_link",
		"std" => ""),

	array( "name" => "Logo 4",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_fLogo4",
		"type" => "industry_logo",
		"std" => ""),

	array( 
		"id" => $shortname."_fLogo4link",		
		"type" => "industry_logo_link",
		"std" => ""),

	array( "type" => "close"),


	array( "name" => "Home page settings",
		"type" => "section"),

	array( "type" => "open"),

	array( 
		"type" => "block_heading",
		"name" => "Category Sections"
		),

	array( "name" => "Category 1",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_image1",
		"type" => "featured_box_image",
		"std" => ""),

	array( 
		"id" => $shortname."_image1text",		
		"type" => "featured_box_text",
		"std" => ""),
	array( 
		"id" => $shortname."_image1link",
		"type" => "featured_box_link",
		"std" => ""),

	array( "name" => "Category 2",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_image2",
		"type" => "featured_box_image",
		"std" => ""),

	array( 
		"id" => $shortname."_image2text",		
		"type" => "featured_box_text",
		"std" => ""),
	array( 
		"id" => $shortname."_image2link",
		"type" => "featured_box_link",
		"std" => ""),

	array( "name" => "Category 3 ",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_image3",
		"type" => "featured_box_image",
		"std" => ""),

	array( 
		"id" => $shortname."_image3text",		
		"type" => "featured_box_text",
		"std" => ""),

	array( 
		"id" => $shortname."_image3link",
		"type" => "featured_box_link",
		"std" => ""),

	array( "name" => "Category 4 ",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_image4",
		"type" => "featured_box_image",
		"std" => ""),

	array( 
		"id" => $shortname."_image4text",		
		"type" => "featured_box_text",
		"std" => ""),
	array( 
		"id" => $shortname."_image4link",
		"type" => "featured_box_link",
		"std" => ""),

	array( 
		"type" => "block_heading",
		"name" => "Made In America Sections"
		),

	array( "name" => "Fill Details",
		"desc" => "Enter Some Text here",
		"id" => $shortname."_madeInAmerica",
		"type" => "madeInAmerica",
		"std" => ""),

	array( 
		"id" => $shortname."_madeInAmericatext",		
		"type" => "madeInAmerica_text",
		"std" => ""),
	array( 
		"id" => $shortname."_madeInAmericapara",		
		"type" => "madeInAmerica_para",
		"std" => ""),
	array( 
		"id" => $shortname."_madeInAmericalink",
		"type" => "madeInAmerica_link",
		"std" => ""),

	array( 
		"type" => "block_heading",
		"name" => "Call to Action - Free brochure"
		),

	array( "name" => "Call to Action Text",
		"desc" => "Contact us for a free brochure",
		"id" => $shortname."_c2actionText",
		"type" => "text",
		"std" => ""),

	array( "name" => "Call to Action Link",
		"desc" => "http://seniorsafetycompany.com/contact-us/",
		"id" => $shortname."_c2actionLink",
		"type" => "text",
		"std" => ""),

	


	array("type" => "block_sap"),

	array( "type" => "close"),

);


function mytheme_add_admin() {
	global $themename, $shortname, $options;
	 
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
			foreach ($options as $value) {
			update_option( $value['id'], $_REQUEST[ $value['id'] ] );
		}
	 
		foreach ($options as $value) {
			if( isset( $_REQUEST[ $value['id'] ] ) ) { 
				update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 		
			} else { 
				delete_option( $value['id'] ); 
			} 
		}
		
		header("Location: admin.php?page=theme_options.php&saved=true"); 
	 
	}
	}
 
	$wptuts_options_page = add_menu_page($themename, 'Theme Options', 'administrator', basename(__FILE__), 'mytheme_admin');
	add_action( 'admin_print_scripts-' . $wptuts_options_page, 'wptuts_print_scripts' );

}

function mytheme_add_init() {
	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/includes/admin.css", false, "1.0", "all");
	wp_enqueue_script("admin_script", $file_dir."/includes/admin.js", false, "1.0");
}

function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
$home_block = 1; 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>

<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> Settings</h2>
<div class="rm_opts">
  <form method="post">
    <?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
	break;
 
case "close":
  echo "</div></div><br />";
	break;
 
case "title":
	echo "<p>Please configure the options below.</p>";
	break;
	
case "clearfix";
	echo "<div class='clearfix'></div>";
	break;
	
case "block_sap";
	echo "<div class='block_sap'></div>";
	break;
	
case "block_heading";
	echo "<h4 class='block_heading'>" . $value['name'] ."</h4>";
	break;
	
case "home_block":
	?>
    <div class="admin_home_block">
    <?php
	break;
	
case "home_block_close";
	echo "</div>";
	break;
	
case "footer_icon";
	?>
    <div class='upload rm_input rm_text'>
      <label><?php echo $value['name']; ?></label>
      <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" />
      <input type='button' class='button button-upload' value='Upload an image'/>
      </br>
      <img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } ?>" class='preview-upload' /> </div>
    <?php
	break;

	
case "featured_box_image";
	?>
  <div class="featuredBox clearfix">
    <div class="featuredBoxlabel">
    	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?> >></label>
    </div><!-- .featuredBoxlabel -->
    <div class="featuredBoxImage">
    	<img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo bloginfo('template_directory'). "/images/placeholder-313x184.jpg"; } ?>" class='preview-upload' />
      <div class="featuredUplaodBtn clearfix" style="padding-top:5px;">
        <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" /><input type='button' class='button button-upload' value='Upload an image'/>
        <div class="fbTextDesc">(Upload a background image of size 220px*164px)</div>
      </div><!-- .reelUplaodBtn -->
      

    </div>
    
    <div class="fBoxUploadOptions">
      <?php $name_text = $value['id'].'text'; ?>
      <div class="featuredUploadText">	
        <input placeholder="Walk-in Tubs, Ramps etc." name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" />
        <div class="fbTextDesc">(Category Heading)</div>
      </div>

			<?php $name_text = $value['id'].'link'; ?>
      <div class="featuredUploadText">	
        <input placeholder="" name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" /><br />
        <div class="fbTextDesc">(Link to category Page)</div>
      </div>
		</div><!-- .fBoxUploadOptions -->
	</div><!-- .featuredBox  -->
	
	<?php
	break;

	
case "madeInAmerica";
	?>
  <div class="featuredBox clearfix">
    <div class="featuredBoxlabel">
    	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?> >></label>
    </div><!-- .featuredBoxlabel -->
    <div class="featuredBoxImage">
    	<img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo bloginfo('template_directory'). "/images/placeholder-313x184.jpg"; } ?>" class='preview-upload' />
      <div class="featuredUplaodBtn clearfix" style="padding-top:5px;">
        <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" /><input type='button' class='button button-upload' value='Upload an image'/>
        <div class="fbTextDesc">(Upload a background image of size 220px*164px)</div>
      </div><!-- .reelUplaodBtn -->
      

    </div>
    
    <div class="fBoxUploadOptions">
      <?php $name_text = $value['id'].'text'; ?>
      <div class="featuredUploadText">	
        <input placeholder="Made in America etc." name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" />
        <div class="fbTextDesc">(Section Heading)</div>
      </div>

      <?php $name_text = $value['id'].'para'; ?>
      <div class="featuredUploadText">	
        <input placeholder="Enter 80-100 letters Description" name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" />
        <div class="fbTextDesc">Section Description (80-100 letters)</div>
      </div>

			<?php $name_text = $value['id'].'link'; ?>
      <div class="featuredUploadText">	
        <input placeholder="" name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" /><br />
        <div class="fbTextDesc">Link to Page</div>
      </div>
		</div><!-- .fBoxUploadOptions -->
	</div><!-- .featuredBox  -->
	
	<?php
	break;


case "industry_logo";
	?>
  <div class="featuredBox clearfix websiteLogo">
    <div class="featuredBoxlabel">
    	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    </div><!-- .featuredBoxlabel -->
    <div class="featuredBoxImage">
    	<img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo bloginfo('template_directory'). "/images/placeholder-313x184.jpg"; } ?>" class='preview-upload' />
      <div class="featuredUplaodBtn clearfix" style="padding-top:5px;">
        <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" /><input type='button' class='button button-upload' value='upload a Logo'/>
      </div><!-- .reelUplaodBtn -->
      
			<?php $name_text = $value['id'].'link'; ?>
      <div class="featuredUploadText" style="margin-top:5px;">	
        <input placeholder="Enter a Url" name="<?php echo $name_text; ?>" id="<?php echo $name_text; ?>" type="text" value="<?php if ( get_settings( $name_text ) != "") { echo stripslashes(get_settings( $name_text )  ); } else { echo $value['std']; } ?>" /><br />
        <div class="fbTextDesc">(Add a link)</div>
      </div>

    </div>
    
	</div><!-- .featuredBox  -->
	
	<?php
	break;




case "website_logo";
	?>
  <div class="featuredBox clearfix websiteLogo">
    <div class="featuredBoxlabel">
    	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
    </div><!-- .featuredBoxlabel -->
    <div class="featuredBoxImage">
    	<img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo bloginfo('template_directory'). "/images/placeholder-313x184.jpg"; } ?>" class='preview-upload' />
      <div class="featuredUplaodBtn clearfix" style="padding-top:5px;">
        <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" /><input type='button' class='button button-upload' value='Upload a logo'/>
      </div><!-- .reelUplaodBtn -->
    </div>
	</div><!-- .featuredBox  -->
	
	<?php
	break;


case 'editor':
?>
    <div class="rm_input rm_text">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
			<div class="rm_input_editor">    
				<?php
         if ( get_settings( $value['id'] ) != "") { 
          $content =  stripslashes(get_settings( $value['id'])  ); 
         } else { 
          $content =  $value['std']; 
         } 
        $settings = array( 'media_buttons' => false, 'wpautop' => false, 'textarea_rows' => 7);
        wp_editor( $content, $value['id'], $settings);
        ?>
			</div><!-- .rm_input_editor -->
      <div style="clear:both;"></div>
    </div>
    
		<?php
break;
 

case "icon";
	?>
    <div class='upload'> <img src="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo bloginfo('template_directory'). "/images/placeholder-60x60.jpg"; } ?>" class='preview-upload' />
      <input type='text' class='regular-text text-upload' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>"  value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>" />
      <input type='button' class='button button-upload' value='Upload an image'/>
      </br>
    </div>
    <?php
	break;
	

case 'texttime':
?>
    <div class="rm_input rm_text jimmyTime">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
      <input timebox="open" id="<?php echo $value['id']; ?>_zzopen" name="<?php echo $value['id']; ?>_open" class="defaultValueExample timeOpen" type="text" value="<?php if ( get_settings( $value['id'].'_open' ) != "") { echo stripslashes(get_settings( $value['id'].'_open') ); } ?>" placeholder="Open" /> to 
      <input timebox="close" id="<?php echo $value['id']; ?>_zclose" name="<?php echo $value['id'].'_close'; ?>" class="defaultValueExample timeClose" type="text" value="<?php if ( get_settings( $value['id'].'_close' ) != "") { echo stripslashes(get_settings( $value['id'].'_close') ); } ?>" placeholder="Close" />
      <span><?php 
					if(get_settings( $value['id'].'_close') == "" && get_settings( $value['id'].'_open') == "") {
						echo "<strong style='color:red'>Please enter time.</strong>";
					} else if(get_settings( $value['id'].'_close') == "" || get_settings( $value['id'].'_open') == "") {
							echo "<strong style='color:red'>Please Correct time.</strong>";
					} else {
							echo "<strong style='color:green'>Perfect!</strong>";
					}
			
			 ?></span>
    </div>
    <?php
break;

case 'text':
?>
    <div class="rm_input rm_text">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
      <input placeholder="<?php echo $value['desc']; ?>" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
    </div>
    <?php
break;
 
case 'textarea':
?>
    <div class="rm_input rm_textarea">
      <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
      <textarea placeholder="<?php echo $value['desc']; ?>" name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } ?>
</textarea>
    </div>
    <?php
break;
 
case "section":
	$i++;
	?>
    <div class="rm_section">
    <div class="rm_title">
      <h3><img src="<?php bloginfo('template_directory')?>/images/trans.png" class="inactive" alt="""><?php echo $value['name']; ?></h3>
      <span class="submit">
      <input name="save<?php echo $i; ?>" type="submit" value="Save changes" class="button button-primary button-large" />
      </span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <?php 
		break;
}
}
?>
    <input type="hidden" name="action" value="save" />
  </form>
</div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');

function wptuts_print_scripts() {
    wp_enqueue_style( 'thickbox' ); // Stylesheet used by Thickbox
    wp_enqueue_script( 'thickbox' );
    wp_enqueue_script( 'media-upload' );
}

?>
