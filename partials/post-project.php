<?php
/**
 * Partial: Press archive list item
 */
?>

<li>
  <div class="image-wrap">
  	<a href="<?php the_permalink(); ?>">
    	<?php the_post_thumbnail('article-thumb'); ?>
    </a>
  </div>
  <div class="project-meta">
    <h3 class="project-title"><?php the_title(); ?></h3>
    <span><?php echo get_excerpt(130); ?></span>
  </div>
</li>