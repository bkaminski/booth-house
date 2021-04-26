<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-3">
		<h1 class="mt-4 display-4 text-center text-white text-shadow"><?php the_title(); ?></h1>
		<div class="row">
			<div class="col-lg-12">
				<?php the_content(); ?>

				<br />
			</div>
		</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>