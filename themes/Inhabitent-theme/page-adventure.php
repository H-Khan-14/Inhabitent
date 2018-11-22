<?php echo "I am goddamn sick of all these motherfucking pages on this motherfucking site."; ?>
<?php get_header(); ?>
<div class="container-adventures">
  <h1>Latest Adventures</h1>
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
              <div class = "adventure-item">
                  <img class = "adventure-image" src = <?php echo $post_image_url[0];  ?> >
              </div>
                  <h3 class = "adventure-title">
                      <a href = "<?php echo $adventurelink ?>" ><?php echo $adventure->post_title; ?></a>
                  </h3> 
              </div>
              <a class = "adventure-read-button" href = "<?php echo $adventurelink ?>">Read More</a>
          </li>
        <?php } ?>
  </ul>
</div>
<?php get_footer(); ?>