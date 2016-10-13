<?php query_posts('cat=-2'); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="bloggingcards"> 
    <!-- post thumbnail -->
    <div class="blogfeatimg" style="background-color: <?php the_field('card_background'); ?>">
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
      <?php the_post_thumbnail('post-thumbnail', array( 'class'	=> "sety_nd")); ?>
      <?php endif; ?>
    </div>
    <!-- /post thumbnail --> 
    <!--<div class="authorpic"> <?php echo get_avatar( get_the_author_email(), '80' ); ?> </div>-->
    <ul class="post-categories">
      	          <?php 
		          wp_list_categories(array(
		          	'exclude' => array('1'),
		          	'title_li' => '',
		          	'orderby' => 'name'
		          )); 
	          ?>
    </ul>
    <!-- card internals -->
    <div class="cardinternal">
      <p class="blogtitle"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
        </a> </p>
      <div class="authorinfo"> <span class="author">
        <?php _e( 'Posted by', 'html5blank' ); ?>
        <?php the_author_posts_link(); ?>
        </span> <span class="date">on
        <?php the_time('j F, Y'); ?>
        </span> </div>
      <div class="excerpt">
        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
      </div>
    </div>
    <div class="postbutton"> <a class="" href="<?php the_permalink();?>"></a> </div>
    <!-- /card internals --> 
    
    <!-- post details --> 
    <!--<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>--> 
    <!-- /post details -->
    
    <?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
    <?php// edit_post_link(); ?>
  </div>
</article>
<!-- /article -->

<?php endwhile; ?>
<?php else: ?>

<!-- article -->
<article>
  <h2>
    <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
  </h2>
</article>
<!-- /article -->

<?php endif; ?>
