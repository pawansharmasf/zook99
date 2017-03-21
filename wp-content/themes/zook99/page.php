<?php 
	get_header();
	the_post(); 
?>

<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js"></script>

<div id="container_notlike" style="display:none">
YOU DONT LIKE
</div>

<div id="container_like" style="display:none">
YOU LIKE
</div>

<div class="pageContent layout2 commonStyles1">

 	
	<div class="container clearfix">
    
    <div class="pageLeft">
    	<article id="post" class="singlePost">
        
        <h1><?php the_title(); ?></h1>
        <div class="postExcerpt">
        	<p><?php the_content(); ?></p>
        </div><!-- .postExcerpt -->
                        
      </article><!-- .singlePost -->
    </div><!-- .pageLeft -->
    <div class="pageRight">
    
    	<div class="googleAd">
       asdf
      </div><!-- .googleAd -->

    	<?php if ( !function_exists('dynamic_sidebar')
			|| !dynamic_sidebar('Single Page') ) : ?>
			<?php endif; ?>

    </div><!-- .pageRight -->
  </div><!-- .container -->
</div><!-- .pageContent -->


<?php get_footer(); ?>