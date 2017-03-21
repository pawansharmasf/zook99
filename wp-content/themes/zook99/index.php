<?php 
	get_header(); 
?>

<div class="pageContent layout1">
	<div class="container clearfix">
		<div class="videoListings clearfix">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>			
      <div class="videoPost">
      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <div class="videoThumb">
          	<?php if(has_post_thumbnail()) { the_post_thumbnail(); } else { ?>
            <img src="<?php video_thumbnail(); ?>" />
            <?php } ?>
          </div><!-- .videoThumb -->
          <div class="videoTitle">
          	<h3><?php the_title(); ?></h3>
          </div><!-- .videoTitle -->          
        </a>
      </div><!-- videoPost -->      
  	<?php endwhile; endif; ?>
    </div><!-- videoListings -->
  </div><!-- .container -->
</div><!-- .pageContent -->


<?php get_footer(); ?>