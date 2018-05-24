<?php include_once("header.php") ?>
  
<main id="main-content">
 <section>
  <div class="container">
      <?php
       while ( have_posts() ) : the_post(); ?>
          <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <ul class="tags">
              <?php the_terms( $post->ID, 'project-types', '<li>', ' &middot; ', '</li> ' ); ?>
            </ul>
          </header>
          <div class="page-content">
            <?php the_content(); ?>
          </div>
        <?php
        endwhile;
        wp_reset_query();
      ?>
  </div>
 </section>
</main>

<?php include_once("footer.php") ?>