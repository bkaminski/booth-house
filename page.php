<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-5 mt-5">
		<h1 class="page-title mt-4"><?php the_title(); ?></h1>
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
<?php get_footer(); ?>
