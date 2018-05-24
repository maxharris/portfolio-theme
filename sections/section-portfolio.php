<section id="section-portfolio">
	<div class="container">
		<h2 class="section-title">My Work</h2>
		<?php 
			$args = array( 
				'post_type' => 'projects',
				'posts_per_page' => 6 );
			$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<ul>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part( '/partials/post', 'project'); ?>
				<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
			</ul>
			<?php else: ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
</section>