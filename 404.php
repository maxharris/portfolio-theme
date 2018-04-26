<?php include_once("header.php") ?>
  
<main id="content">
 <section id="section-404">
  <div class="container">
    <div class="entry-content-page">
      <h2>Page Not Found</h2>
      <p>Sorry, the page you are looking for cannot be found. Use the links below to find your way.</p>
      <nav>
        <?php wp_nav_menu(  array(
          'menu' => 'social_media_menu',
          'theme_location' => 'social_media_menu',
          'link_before' => '<span class="sr-only">',
          'link_after'  => '</span>' 
        )); ?>
      </nav>
    </div><!-- .entry-content-page -->
  </div>
 </section>
</main>

<?php include_once("footer.php") ?>
