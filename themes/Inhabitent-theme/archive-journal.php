<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="archive-journal container">
        <ul>
          <?php 
            while ( have_posts() ) : the_post(); 
            ?>
              <li>
              <div class = "journal-archive-wrapper">
                <?php the_post_thumbnail('large'); ?>
              </div>
              <div class = "journal-archive-info">
                  <span>
                      <span class = "posted-date">
                          <time>
                              <time><?php echo mysql2date('j F, Y',get_the_date()) ?></time>
                          </time>
                      </span>
                       / <?php wp_count_comments(); ?> Comment<?php echo (wp_count_comments() == 1) ?  "" : "s" ?>
                       / <?php the_author(); ?> 
                  </span>
                  <h3 class = "journal-title">
                      <a href = "<?php the_permalink(); ?>" ><?php echo the_title(); ?></a>
                  </h3> 
                  <p><?php the_excerpt(); ?></p> 
                </div>
              <a class = "journal-readmore-button" href = "<?php the_permalink(); ?>">Read More</a>
          </li>
            <?php endwhile;//} ?>
        </ul>
    </div>
<!-- End of Journal Loop -->
</article><!-- #post-## -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>