<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				  $cat_title = get_the_archive_title();
          $cat_title = single_cat_title( '', false);
          echo "<h1 class='page-title'>$cat_title</h1>";
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php
			$query_vars = $wp_query->query_vars;
      $query_vars['orderby'] = 'title';
      $query_vars['order'] = 'ASC';
      $new_query = new WP_Query($query_vars);?>

      <div class="product-grid">
     
      <?php while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

					<div class="product-category-item">
                <div class="product-category-image">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>" rel="bookmark">
                    <img src="<?php echo CFS()->get( 'product_image' ); ?>">
                  </a>
                </div>
                <div class="product-category-info">
                  <h2><?php echo CFS()->get( 'product_name' ); ?></h2>  
                  <span class="price"><?php echo CFS()->get( 'price' );?></span>
                </div>
              </div><!-- end product-frame-item -->

			<?php endwhile; ?>

			<?php wp_reset_postdata();  ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
