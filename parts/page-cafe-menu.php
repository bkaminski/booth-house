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
									<button class="nav-link active text-uppercase" id="pills-hot-beverages-tab" data-bs-toggle="pill" data-bs-target="#pills-hot-beverages" type="button" role="tab" aria-controls="pills-hot-beverages" aria-selected="true">Hot Beverages</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-cold-beverages-tab" data-bs-toggle="pill" data-bs-target="#pills-cold-beverages" type="button" role="tab" aria-controls="pills-cold-beverages" aria-selected="false">Cold Beverages</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-wraps-tab" data-bs-toggle="pill" data-bs-target="#pills-wraps" type="button" role="tab" aria-controls="pills-wraps" aria-selected="false">Wraps</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link text-uppercase" id="pills-pastries-tab" data-bs-toggle="pill" data-bs-target="#pills-pastries" type="button" role="tab" aria-controls="pills-pastries" aria-selected="false">Pastries</button>
								</li>
								
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-hot-beverages" role="tabpanel" aria-labelledby="pills-hot-beverages-tab">
									<?php echo the_field('hot_beverages'); ?>

								</div>
								<div class="tab-pane fade" id="pills-cold-beverages" role="tabpanel" aria-labelledby="pills-cold-beverages-tab">
									<?php echo the_field('cold_beverages'); ?>

								</div>
								<div class="tab-pane fade" id="pills-wraps" role="tabpanel" aria-labelledby="pills-wraps-tab">
									<?php echo the_field('wraps'); ?>

								</div>
								<div class="tab-pane fade" id="pills-pastries" role="tabpanel" aria-labelledby="pills-pastries-tab">
									<?php echo the_field('pastries'); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>