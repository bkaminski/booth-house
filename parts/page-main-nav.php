<!-- Main Bootstrap Navbar Here -->
<div class="c19 pt-1">
	<p class="text-center">
		<small>
			<a href="<?php echo get_home_url(); ?>/covid-19-statement" style="color:#fff;">Read our statement on COVID-19 here</a>
		</small>
	</p>
</div>
<nav class="navbar navbar-expand-lg sticky-top" style="background: #020202;">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_home_url(); ?>/wp-content/uploads/booth-house-icon-small.png" class="img-fluid" width="75" height="100" alt="Booth House Tavern Icon">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars fa-2x text-white"></i>
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