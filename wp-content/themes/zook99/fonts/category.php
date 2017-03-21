<?php 
	get_header(); 
?>

<div class="pageContent layout1">
	<div class="container clearfix">
		<div class="videoListings clearfix">
    <h1 class="categoryTitle">Category: <?php single_cat_title(); ?></h1>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>			
      <div class="videoPost">
      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <div class="videoThumb">
            <?php the_post_thumbnail('small'); ?>
          </div><!-- .videoThumb -->
          <div class="videoTitle">
          	<h3><?php the_title(); ?></h3>
          </div><!-- .videoTitle -->
          <div class="videoPlay"></div><!-- .videoPlay -->
        </a>
      </div><!-- videoPost -->      
  	<?php endwhile; endif; ?>
    </div><!-- videoListings -->
  </div><!-- .container -->
</div><!-- .pageContent -->


<?php get_footer(); ?>