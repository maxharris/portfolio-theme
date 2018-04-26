<?php
/**
 * Partial: Common pagination for loops
 */
?>

  <nav class="main-pagination">
    <div class="next"><?php previous_posts_link(esc_html__('Newer Posts', 'firstlady') . '<i class="cicon cicon-lefttriangle-fill"></i>'); ?></div>
    <div class="previous"><?php next_posts_link(esc_html__('Older Posts', 'firstlady') . '<i class="cicon cicon-righttriangle-fill"></i>'); ?></div>
  </nav>
  

  <nav class="main-pagination">
    
    <?php 
    
    $pagination = paginate(array(
      'always_prev_next' => 1,
      'prev_text' => '<i class="fa fa-righttriangle-fill"></i>'  . esc_html__('Previous', 'firstlady'),
      'next_text' =>  esc_html__('Next', 'firstlady') . '<i class="fa fa-lefttriangle-fill"></i>',
    ));
    
    ?>
    
    <?php if (!empty($pagination)): ?>
    
    <div class="inner">
      <?php echo $pagination; ?>
    </div>
    
    <?php endif; ?>
    
  </nav>
  
<?php endif; ?>