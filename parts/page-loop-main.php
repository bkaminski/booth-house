<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-3 main-loop">
		<h1 class="mt-4 display-4 text-center"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-lg-12">
				<?php the_content(); ?>

				<br />
			</div>
			<?php if ( is_page(18) ) {
				
				echo get_template_part('parts/page', 'tavern-menu');
			
			} else {
				//do nothing
			} ?>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>