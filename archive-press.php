<?php include_once("header.php") ?>

<main id="content">
 <section>
    <div class="container">
      <h1 class="page-title">Press</h1>
          <div class="entry-content-page">
            <?php 
              $args = array( 'post_type' => 'press', 'posts_per_page' => 100 );
              $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
              <ul class="list">
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php get_template_part('/partials/post', 'press'); ?>
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
