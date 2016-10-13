<?php
/**
 * Template Name: Front Blog Page Main
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<main role="main"> 
  <!-- section -->
  <section>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php the_content(); ?>
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
              <li>
                <?php the_category('<li>'); ?>
              </li>
            </ul>
            <p class="topexcerpt"><?php echo substr(get_the_excerpt(), 0,127); ?>...</p>
            <a class="fp-button" href="<? the_permalink();?>">Continue Reading</a> </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif; wp_reset_query(); ?>
      
      
      <!--END FEATURED POST AREA-->
      
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
    
  </section>
  <!-- /section --> 


</main>


<?php query_posts('cat=5&showposts=1');?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
<?php get_template_part('pagination'); ?>
<?php endwhile;
?>
<?php endif; wp_reset_query(); ?>



<?php //get_sidebar(); ?>
<?php //get_footer(); ?>
