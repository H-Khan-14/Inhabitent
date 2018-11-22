<?php echo "Is this page connected to the proper page? I certainly hope so. If not I am screwed."; ?>
<?php get_header(); ?>
<div class="shop-container">	
        <div class="shop-header">
          <h1>Shop Stuff</h1>

          <ul class="product-list"><?php
            $categories = get_categories( array(
              'orderby' => 'name',
              'order' => 'ASC',
              'taxonomy' => 'productcat'
            ));
            foreach( $categories as $category ) {
              $categorylink = home_url('/') . $category->taxonomy . '/' . $category->name; ?>
              <li>
                <a href = <?php echo "$categorylink" ?>><?php echo $category->name ?></a>
              </li><?php
            }?>
          </ul>
        </div><!-- .page-header -->

        <div class="product-frame">
          <?php        
            $first_args = array( 'post_type' => 'Product', 'posts_per_page' => 16);
            $first_args['orderby'] = 'title';
            $first_args['order'] = 'ASC';
            $first_query = new WP_Query($first_args); // exclude category
            while($first_query->have_posts()) : $first_query->the_post();?>
              <div class="product-frame-item">
                <div class="product-image-wrapper">
                  <a href="<?php echo get_permalink(get_the_ID()); ?>" rel="bookmark">
                    <img src="<?php echo CFS()->get( 'product_image' ); ?>">
                  </a>
                </div>
                <div class="product-info">
                  <h2><?php echo CFS()->get( 'product_name' ); ?></h2>  
                  <span class="price"><?php echo CFS()->get( 'price' );?></span>
                </div>
              </div><!-- end product-frame-item -->
            <?php
            endwhile;
            wp_reset_postdata();  
          ?>
        </div><!-- end product-grid -->
        <?php get_footer(); ?>