<?php get_header(); ?>

<!--FEATURED POST AREA-->
<?php query_posts('cat=2&showposts=1');?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div id="featured-post" style="background-image: url('<?php echo $thumb['0'];?>')">
  <div class="fp-internal">
    <div class="fp-card">
      <div class="authorpic"> <?php echo get_avatar( get_the_author_email(), '150' ); ?> </div>
      <p class="blogtitle"><a href="<?php the_permalink();?>">
        <?php the_title(); ?>
        </a></p>
<ul class="post-categories">
	          <?php 
		          wp_list_categories(array(
		          	'exclude' => array('1'),
		          	'title_li' => '',
		          	'orderby' => 'name'
		          )); 
	          ?>
</ul>
      <p class="topexcerpt"><?php echo substr(get_the_excerpt(), 0,127); ?>...</p>
      <a class="fp-button" href="<? the_permalink();?>">Continue Reading</a> </div>
  </div>
</div>
<?php endwhile;?>
<?php endif; wp_reset_query(); ?>


<!--END FEATURED POST AREA-->


<div class="wrapper">

<!--NEWSLETTER SIGN UP AREA-->



	<div class="newsletter">
		<p>Stay up to date with all of our latest news, tips, downloads &amp; guides</p>
		<div class="formfields">
		<input type="text" placeholder="Enter your email address here..." />
		<input type="submit" value="sign me up"/>
		</div>
	</div>
		


<!--FINISH NEWSLETTER SIGN UP AREA-->






<main role="main">
		
		<section class="mainblog">

			<?php get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		
	</main>







<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
