<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-3 main-loop">
		<h1 class="mt-4 display-4 text-center"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-lg-12 pb-5">
				<?php the_content(); ?>

			</div>
			<div class="col-lg-12">
				<?php if ( is_page(18) ) {
				
				echo get_template_part('parts/page', 'tavern-menu');
			
				} elseif ( is_page(22) ) {

				echo get_template_part('parts/page', 'cafe-menu');
					
				} else {
					//do nothing
				} ?>

				<?php the_field('secondary_content'); ?>

				<br />
			</div>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>