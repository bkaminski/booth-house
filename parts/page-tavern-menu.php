			<div class="accordion accordion-flush pb-5" id="accordionFlush">
				<div class="accordion-item bh-menu-accordion">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<span class="collapse-heading">View Our Menu</span>
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
						<div class="bh-accordion-body accordion-body">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active text-uppercase" id="pills-small-plates-tab" data-bs-toggle="pill" data-bs-target="#pills-small-plates" type="button" role="tab" aria-controls="pills-small-plates" aria-selected="true">Small Plates</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-soups-tab" data-bs-toggle="pill" data-bs-target="#pills-soups" type="button" role="tab" aria-controls="pills-soups" aria-selected="false">Soups</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-salads-tab" data-bs-toggle="pill" data-bs-target="#pills-salads" type="button" role="tab" aria-controls="pills-salads" aria-selected="false">Salads</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-sandwiches-tab" data-bs-toggle="pill" data-bs-target="#pills-sandwiches" type="button" role="tab" aria-controls="pills-sandwiches" aria-selected="false">Sandwiches</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-dinner-tab" data-bs-toggle="pill" data-bs-target="#pills-dinner" type="button" role="tab" aria-controls="pills-dinner" aria-selected="false">Dinner</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-sides-tab" data-bs-toggle="pill" data-bs-target="#pills-sides" type="button" role="tab" aria-controls="pills-sides" aria-selected="false">Sides</button>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-small-plates" role="tabpanel" aria-labelledby="pills-small-plates-tab">
									<?php echo the_field('small_plates'); ?>

								</div>
								<div class="tab-pane fade" id="pills-soups" role="tabpanel" aria-labelledby="pills-soups-tab">
									<?php echo the_field('soups'); ?>

								</div>
								<div class="tab-pane fade" id="pills-salads" role="tabpanel" aria-labelledby="pills-salads-tab">
									<?php echo the_field('salads'); ?>

								</div>
								<div class="tab-pane fade" id="pills-sandwiches" role="tabpanel" aria-labelledby="pills-sandwiches-tab">
									<?php echo the_field('sandwiches'); ?>

								</div>
								<div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
									<?php echo the_field('dinner'); ?>
								</div>
								<div class="tab-pane fade" id="pills-sides" role="tabpanel" aria-labelledby="pills-sides-tab">
									<?php echo the_field('sides'); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>