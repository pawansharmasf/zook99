<?php 
	get_header(); 
	the_post(); 
?>    
	<section id="heroBanner">
  	<div class="container">
    	<?php if(has_post_thumbnail()) { 
					the_post_thumbnail();	
				} else { ?>
        	<img src="<?php bloginfo('template_directory'); ?>/images/heroBanner.jpg">
      <?php } ?>

    </div><!-- .container -->
  </section><!-- #heroBanner -->

	<section class="pageContent">
  	<div class="container" style="text-align:center;">
    	<h1>404 Error!</h1>
    	<h2>Sorry, but the page you are looking for doesn't exist.</h2>
      <p>Please choose an option from menu above.</p>
    </div>
  </section>
    
<?php get_footer(); ?>
