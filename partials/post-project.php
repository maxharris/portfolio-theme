<?php
/**
 * Partial: Press archive list item
 */
?>

<li>
  <a href="<?php the_permalink(); ?>">
    <div class="image-wrapper">
      <?php the_post_thumbnail('article-thumb'); ?>
    </div>
    <div class="project-meta">
      <h3 class="project-title"><?php the_title(); ?></h3>
    </div>
  </a>
</li>