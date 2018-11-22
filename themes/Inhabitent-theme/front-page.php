<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <!-- Inhabitent logo/picture section -->
            <div class = "home-section test">
                <img src = <?php echo get_template_directory_uri().'/assets/images/logos/inhabitent-logo-full.svg' ?> >
            </div>
            <!-- Shop stuff section -->
            <div class = "product-info-container">
                <h2>Shop Stuff</h2>
                <div class="product-type-container">
                <?php
              
                $categories = get_categories( array(
                    'orderby' => 'name',
                    'order' => 'ASC',
                    'taxonomy' => 'productcat',
                    'hide_empty' => 0
                ));
            
                foreach( $categories as $category ) {
                    $categorylink = home_url('/') . $category->taxonomy . '/' . $category->name;
            ?>
                <!-- DO  -->
                <div class = "product-type-wrapper">
                        <img src = <?php echo get_template_directory_uri()."/assets/images/product-type-icons/$category->slug.svg"?> alt="<?php echo $category->name?>">
                        <p><?php echo $category->description ?></p>
                        <p>
                            <a href = <?php echo "$categorylink" ?> class = "button"><?php echo $category->name ?> Stuff</a>
                        </p>
                    </div>
                <?php } ?>
                </div>
            </div>
            <?php
            $args = array( 'post_type' => 'product', 'order' => 'ASC' );
            $product_posts = get_posts( $args ); // returns an array of posts
        ?>
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

        <?php /* Content from your array of post results goes here */ ?>

        <?php endforeach; wp_reset_postdata(); ?>
<!-- This section is the creation of the 2nd loop for Journal entries -->
    <div class="journal-embed container">
        <h2 class="embed-title">INHABITENT JOURNAL</h2>
        <ul>
          <?php 
            $args = array (
              'numberposts' => 3,
              'post_type' => 'journal'
            );
            $journals = get_posts($args);

            foreach ($journals as $journal) {
            $journallink = get_permalink($journal->ID);
            $post_thumbnail_id = get_post_thumbnail_id($journal->ID);
            $post_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
            ?>
              <li>
              <div class = "entry-pic-wrapper">
                  <img class = "entry-journal-pic" src = <?php echo $post_image_url[0];  ?> >
              </div>
              <div class = "entry-info-wrapper">
                  <span>
                      <span class = "posted-date">
                          <time>
                              <time><?php echo mysql2date('j F, Y',$journal->post_date) ?></time>
                          </time>
                      </span>
                       / <?php echo $journal->comment_count ?> Comment<?php echo ($journal->comment_count == 1) ?  "" : "s" ?>
                  </span>
                  <h3 class = "journal-title">
                      <a href = "<?php echo $journallink ?>" ><?php echo $journal->post_title; ?></a>
                  </h3> 
              </div>
              <a class = "journal-entry-button" href = "<?php echo $journallink ?>">Read Entry</a>
          </li>
        <?php } ?>
        </ul>
    </div>
<!-- End of Journal Loop -->
<!-- Beginning of my attempt at the adventure loop -->
       
<div class="adventures-container">
  <h2>Latest Adventures</h2>
  <ul>
    <?php 
      $args = array (
        'numberposts' => 4,
        'post_type' => 'adventure'
      );
      $adventures = get_posts($args);
      foreach ($adventures as $adventure) {
        $adventurelink = get_permalink($adventure->ID);
            $post_thumbnail_id = get_post_thumbnail_id($adventure->ID);
            $post_image_url = wp_get_attachment_image_src($post_thumbnail_id, 'large');
            ?>
              <li>
              <div class = "story-wrapper">
                  <img class = "entry-adventure-pic" src = <?php echo $post_image_url[0];  ?> >
              </div>
                  <h3 class = "adventure-title">
                      <a href = "<?php echo $adventurelink ?>" ><?php echo $adventure->post_title; ?></a>
                  </h3> 
              </div>
              <a class = "adventure-read-button" href = "<?php echo $adventurelink ?>">Read More</a>
          </li>
        <?php } ?>
  </ul>
  <br>
  <a class = "more-adventures-button" href = "<?php echo home_url('/') . 'adventure' . '/'; ?>">MORE ADVENTURES</a>
</div>

        <?php // Loop 1
            $first_query = new WP_Query('cat=-1'); // exclude category
             while($first_query->have_posts()) : $first_query->the_post();
        
             endwhile;
                wp_reset_postdata();

        // Loop 2
            $second_query = new WP_Query('cat=-2'); // exclude category
                while($second_query->have_posts()) : $second_query->the_post();
        
                endwhile;
                    wp_reset_postdata();

        // Loop 3
            $third_query = new WP_Query('cat=-3'); // exclude category
                 while($third_query->have_posts()) : $third_query->the_post();
        
                 endwhile;
                    wp_reset_postdata();
        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>