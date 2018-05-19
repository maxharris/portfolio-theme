<section id="section-press">
	<div class="container">
		<div class="press-kit-wrapper">
			<a target="_blank" class="btn btn-alt" href="https://www.jbthefirstlady.ca/wp-content/uploads/2018/01/JB-The-First-Lady-Digital-Media-Kit-2018.zip">Download DMK</a>
			<h4>Get the digital media kit for press images and information</h4>
		</div>
		<div class="featured-press">
			<h2>Featured Press</h2>
			<?php 
				$args = array( 
					'post_type' => 'projects',
					'cat' => 'featured',
					'posts_per_page' => 8 );
				$the_query = new WP_Query( $args ); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<ul class="list">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part( '/partials/post', 'press'); ?>
					<?php wp_reset_postdata(); ?>
				<?php endwhile; ?>
				</ul>
				<?php else: ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>