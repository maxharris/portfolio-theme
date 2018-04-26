<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage First_Lady
 * @since First Lady 3.0
 */
?>

<?php include_once(get_template_directory() . '/header.php') ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <main id="main-content">
        <?php include(get_template_directory() . '/sections/bio.php'); ?>
        <?php include(get_template_directory() . '/sections/portfolio.php'); ?>
        <?php include(get_template_directory() . '/sections/services.php'); ?>
      </main>
    <?php endwhile; // end of the loop. ?>

<?php include_once( get_template_directory() . '/footer.php') ?>
