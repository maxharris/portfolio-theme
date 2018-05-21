<?php include_once("header.php") ?>
  
<main id="main-content">
 <section class="page-section">
  <div class="container">
    <?php
     while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
          <div class="page-header">
            <h2 class="page-title"><?php the_title(); ?></h2>
          </div>
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
