<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Max_Harris_Portfolio
 * @since Max Harris Portfolio 1.0
 */
?>

<?php include_once(get_template_directory() . '/header.php') ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <main id="main-content">
        <?php include(get_template_directory() . '/sections/section-home-header.php'); ?>
        <?php include(get_template_directory() . '/sections/section-bio.php'); ?>
        <?php include(get_template_directory() . '/sections/section-resume.php'); ?>
        <?php include(get_template_directory() . '/sections/section-services.php'); ?>
        <?php include(get_template_directory() . '/sections/section-portfolio.php'); ?>
        <?php include(get_template_directory() . '/sections/section-contact.php'); ?>
      </main>
    <?php endwhile; // end of the loop. ?>

<?php include_once( get_template_directory() . '/footer.php') ?>
