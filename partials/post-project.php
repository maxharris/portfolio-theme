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
      <h4>
        <?php
          $thetitle = $post->post_title;
          $getlength = strlen($thetitle);
          $thelength = 44;
          echo substr($thetitle, 0, $thelength);
          if ($getlength > $thelength) echo "... ";
        ?>
      </h4>
    </div>
  </a>
</li>