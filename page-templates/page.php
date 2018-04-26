<?php
/**
 * Template Name: Page
 *
 * @package WordPress
 * @subpackage First_Lady
 * @since First Lady 3.0
 */
?>

<?php include_once(get_template_directory() . '/header.php') ?>

<main id="main-content">
  <?php include(get_template_directory() . '/sections/bio.php'); ?>
  <?php include(get_template_directory() . '/sections/gallery.php'); ?>
  <?php include(get_template_directory() . '/sections/cta-social-media.php'); ?>
  <?php include(get_template_directory() . '/sections/shows.php'); ?>
  <?php include(get_template_directory() . '/sections/press.php'); ?>
</main>

<?php include_once( get_template_directory() . '/footer.php') ?>
