<div class="clear-fix">
<footer>
  <div class="container">
    <?php get_sidebar('footer'); ?>
    <aside>
      <?php wp_nav_menu(  array(
        'menu' => 'social_media_menu',
        'theme_location' => 'social_media_menu',
        'link_before' => '<span class="sr-only">',
        'link_after'  => '</span>' 
      )); ?>
    </aside>
  </div>
  
  <div class="flex-container">
    <span class="copyright">
      &copy; Copyright <?php echo date("Y"); ?> Max Harris
    </span>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>