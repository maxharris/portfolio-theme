<?php include_once("header.php") ?>
  
<main id="main-content">
 <section id="section-project-content">
  <div class="container-fluid">
      <?php
       while ( have_posts() ) : the_post(); ?>
          <header class="page-header">
            <h1 class="page-title"><?php the_title(); ?></h1>
          </header>
          <div class="sidebar">
            <aside class="project-details">
              <!-- <h3>Project Details</h3> -->
              <p>
                <?php the_excerpt(); ?>
              </p>
              <ul class="tags">
                <?php the_terms( $post->ID, 'project-types', '<li>', ' &middot; ', '</li> ' ); ?>
              </ul>
            </aside>
          </div>
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
