<?php

/**
 * Topic Tag Edit
 *
 * @package radium framework
 * @subpackage Theme
 */

get_header();

radium_sidebar_loader();

?>
<div id="main" class="<?php echo $radium_content_class; ?> clearfix" role="main">

	<?php do_action( 'bbp_template_notices' ); ?>

	<div id="topic-tag" class="bbp-topic-tag">

		<div class="entry-content">

			<?php bbp_topic_tag_description(); ?>

			<?php do_action( 'bbp_template_before_topic_tag_edit' ); ?>

			<?php bbp_get_template_part( 'form', 'topic-tag' ); ?>

			<?php do_action( 'bbp_template_after_topic_tag_edit' ); ?>

		</div>

	</div><!-- #topic-tag -->

</main><!-- #main -->

<?php if( $sidebar['sidebar_active'] ) { ?>

    <aside class="<?php echo $sidebar['sidebar_class']; ?>" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
		<div id="sidebar-main" class="sidebar">
			<?php get_sidebar('Internal Sidebar'); ?>
		</div><!--sidebar-main-->
	</aside>

<?php }

get_footer(); ?>