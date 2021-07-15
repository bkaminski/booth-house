<section>
	<div class="home-options">
		<div class="container pt-5 pb-5">
			<h1 class="text-center text-white pb-5">The Booth House Family</h1>
			<div class="accordion accordion-flush" id="accordionFlush">
				<div class="accordion-item bh-accordion">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/booth-house-icon-home.png" width="75" class="img-fluid" alt="Booth House Inn Icon" /><span class="collapse-heading" style="color: #fcc66c;">Booth House Tavern
							</span>
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
						<div class="bh-accordion-body accordion-body">
							<?php echo the_field('booth_house_tavern_text'); ?>
							<div class="text-center pt-3">
								<a href="<?php echo get_home_url(); ?>/booth-house-tavern/" class="btn btn-success rounded-pill px-5">Reserve a Table</a>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item dfi-accordion">
					<h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/dfi-icon-home.png" width="75" class="img-fluid" alt="David Finney Inn Icon" /><span class="collapse-heading" style="color: #7A2A11;">David Finney Inn</span>
						</button>
					</h2>
					<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlush">
						<div class="accordion-body dfi-accordion-body">
							<?php echo the_field('david_finney_inn_text'); ?>
							<div class="text-center pt-3">
								<a href="<?php echo get_home_url(); ?>/david-finney-inn/" class="btn btn-success rounded-pill px-5">Check Availability</a>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item cafe-accordion">
					<h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/cafe-icon-home.png" width="75" class="img-fluid" alt="The Cafe at David Finney Inn Icon" /><span class="collapse-heading" style="color: #DBB37B;">The DFI Cafe</span>
						</button>
					</h2>
					<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlush">
						<div class="accordion-body cafe-accordion-body">
							<?php echo the_field('dfi_cafe_text'); ?>
							<div class="text-center pt-3">
								<a href="<?php echo get_home_url(); ?>/dfi-cafe/" class="btn btn-success rounded-pill px-5">See What's New</a>
							</div>
						</div>
					</div>
				</div>
				<div class="accordion-item hammer-accordion">
					<h2 class="accordion-header" id="flush-headingFour">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							<i class="fas fa-beer fa-3x text-white"></i><span class="collapse-heading" style="color: #DBB37B; padding-left: 1.5rem;">Hammergod Brewing</span>
						</button>
					</h2>
					<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlush">
						<div class="accordion-body hammer-accordion-body">
							<?php echo the_field('hammergod_text'); ?>
							<div class="text-center pt-3">
								<a href="<?php echo get_home_url(); ?>/hammergod-brewery/" class="btn btn-success rounded-pill px-5">More Information</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
