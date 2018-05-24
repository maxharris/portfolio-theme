<?php include_once("header.php") ?>
  
<main id="main-content">
 <section class="section-archive card-grid">
  <div class="container">
    <header class="page-header">
      <h1 class="page-title">
        <?php single_term_title( ' ', $title . ' Projects ' ); ?> Projects
      </h1>
        <?php echo term_description(); ?>
    </header>
    <ul>
    <?php
      while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( '/partials/post', 'project'); ?>
      <?php endwhile; wp_reset_query(); ?>
    </ul>
  </div>
 </section>
</main>

<?php include_once("footer.php") ?>
