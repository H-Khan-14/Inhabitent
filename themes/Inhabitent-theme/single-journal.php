<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php the_post_navigation(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile; // End of the loop. ?>
  </div><!-- .entry-content -->

	
</article><!-- #post-## -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>