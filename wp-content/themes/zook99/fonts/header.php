<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]--><head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0" />
 
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="format-detection" content="telephone=no" />
<link rel="shortcut icon" href="<?php bloginfo('url')?>/favicon.ico" type="image/x-icon"/>

<meta property="og:title" content="<?php the_title(); ?>" itemprop="headline"/>
<meta property="og:description" content="Click here to watch." itemprop="description"/>
<meta property="og:url" content="<?php the_permalink(); ?>" itemprop="url"/>
<meta property="og:site_name" content="http://www.lolwatv.com/" itemprop="sourceOrganization"/>
<meta property="og:image" content="<?php 
	if(has_post_thumbnail()) {
	 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 		echo $large_image_url[0];
 } else { video_thumbnail(); } 
?>" />
<meta property="og:type" content="collection"/>

<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:url" content="<?php the_permalink(); ?>"/>
<meta name="twitter:description" content="Click here to watch this amazing video."/>
<meta name="twitter:image" content="<?php 	if(has_post_thumbnail()) {
	 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
 		echo $large_image_url[0];
 } else { video_thumbnail(); } 
?>"/>
<meta name="twitter:domain" content="http://www.lolwa.tv"/>



<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1399011197040524&version=v2.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>


<div class="mainMenu">
	<div class="container">
        <a href="<?php bloginfo('url'); ?>" class="menu-logo"><img src="<?php bloginfo('template_directory'); ?>/images/zook99-logo.png" width="108" height="43"></a>
        <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu( array( 'theme_location'  => 'primary','menu_class' => 'nav navbar-nav') );
      } else {
        echo "Please add a Menu from the 'admin panel > Appearance > Menus' and add it to 'Primary' location.";
      }
    ?>
    <div class="commonStyles1 headerShare layout2">
        <div class="bottomSocialShare newIcons clearfix">
            <div class="fbShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
            <div class="twShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=<?php the_permalink(); ?>&via=lolwatv&hashtags=&text=<?php the_title(); ?>. Check at','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->
            <div class="gpShare shareSmallButton"><a href="#" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>','sharer','toolbar=0,status=0,width=626,height=256,top='+sTop+',left='+sLeft);return false;"></a></div><!-- .shareSmallButton -->              
        </div><!-- .bottomSocialShare -->
    </div><!-- .headerShare -->
  </div><!-- .container -->
</div><!-- .mainMenu -->