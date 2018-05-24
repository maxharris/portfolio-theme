<?php
/**
 * Partial: Project archive list item
 */
?>

<li>
  <div class="card">
    <div class="image-wrap">
    	<a href="<?php the_permalink(); ?>">
      	<?php the_post_thumbnail('article-thumb'); ?>
      </a>
    </div>
    <div class="project-meta">
      <h3 class="project-title"><?php the_title(); ?></h3>
      <p><?php echo get_excerpt(120); ?></p>
      <ul class="tags">
        <?php the_terms( $post->ID, 'project-types', '<li>', ' &middot; ', '</li> ' ); ?>
      </ul>
    </div>
  </div>
</li>