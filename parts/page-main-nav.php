<!-- Main Bootstrap Navbar Here -->
<nav class="navbar navbar-expand-lg fixed-top" style="background: #7A2A11;">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_home_url(); ?>/wp-content/uploads/favicon.png" class="img-circle img-fluid" width="100" height="100" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMain">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav ms-auto mb-2 mb-lg-0',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
			
		</div>
	</div>
</nav>