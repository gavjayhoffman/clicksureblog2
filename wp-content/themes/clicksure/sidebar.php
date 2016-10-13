<!-- sidebar -->

<aside class="sidebar" role="complementary">
  <div class="sidebar-widget">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
    <div id="wpp-3" class="featured-posts">
      <h3>Featured Resources</h3>
      <ul class="featured-list">
      <?php query_posts('cat=7&showposts=2');?>
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <li>
	        <div class="fpost">
	        <div class="fpimage" style="background-color: <?php the_field('card_background'); ?>">
	        	<?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "fr-fp")); ?>
	        </div>
	        <div class="fr-contents">
			<a href="<?php the_permalink();?>" class="fr-title"><?php the_title();?></a>
			<p><?php echo substr(get_the_excerpt(), 0,40); ?>...</p>
			<a href="<?php the_permalink();?>" class="fr-button">download today</a>
			</div>
	        </div>
        </li>
        <?php endwhile;
        ?>
        <?php endif; wp_reset_query(); ?>
      </ul>
    </div>
  </div>
  <div class="sidebar-widget">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
  </div>
</aside>
<!-- /sidebar --> 