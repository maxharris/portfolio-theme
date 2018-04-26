<?php include_once("header.php") ?>

<main id="content">
 <section>
    <div class="container">
    <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
   
          <div class="entry-content-page">
            <?php 
              $args = array( 'post_type' => 'press', 'posts_per_page' => 100 );
              $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <ul class="list">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <li>
                  <a href="<?php echo get_post_meta($post->ID, 'article_url', true); ?>" target="_blank">
                    <div class="image-wrapper">
                      <?php the_post_thumbnail( 'article-thumb'); ?>
                    </div>
                    <h3><?php echo get_post_meta($post->ID, 'publication', true); ?></h3>
                    <h4><?php the_title(); ?></h4>
                  </a>
                </li>
                <?php // wp_reset_postdata(); ?>
                <?php echo paginate_links( $args ); ?>

              <?php endwhile; ?>
              </ul>
              <?php else: ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
          </div><!-- .entry-content-page -->

  </div>
 </section>
</main>

<?php include_once("footer.php") ?>
