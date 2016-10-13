<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="main-post" style="background-image: url('<?php echo $thumb['0'];?>'); background-color: <?php the_field('card_background'); ?>">
	
</div>
<div class="wrapper">
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="photoholder">
				<div class="hellophoto"> <?php echo get_avatar( get_the_author_email(), '150' ); ?> </div>
		</div>
		<h1><?php the_title();?></h1>
		<div class="authorinfo"> <span class="author">
		  <?php _e( 'Posted by', 'html5blank' ); ?>
		  <?php the_author_posts_link(); ?>
		  </span> <span class="date">on
		  <?php the_time('j F, Y'); ?>
		  </span> </div>
		
		<?php the_content();?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
<div class="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2') ) : ?>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
