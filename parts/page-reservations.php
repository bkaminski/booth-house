<section>
	<div class="reservations d-none d-lg-block">
		<?php if (is_page('booth-house-tavern')) { ?>
			<div class="text-center">
				<h2 class="text-center text-uppercase py-5">Reservations via OpenTable</h2>
				<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=1125616&type=standard&theme=wide&iframe=true&domain=com&lang=en-US&newtab=true&ot_source=Restaurant%20website'></script>
			</div>
		<?php } else { ?>
		<h2 class="text-center text-uppercase py-5">Reservations Here</h2>
	<?php }; ?>
	</div>
	<div class="reservations d-block d-lg-none pb-5">
		<?php if (is_page('booth-house-tavern')) { ?>
			<div class="text-center">
				<h2 class="text-center text-uppercase py-5">Reservations via OpenTable</h2>
				<script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=1125616&type=standard&theme=tall&iframe=true&domain=com&lang=en-US&newtab=false&ot_source=Restaurant%20website'></script>
			</div>
		<?php } else { ?>
		<h2 class="text-center text-uppercase py-5">Reservations Here</h2>
	<?php }; ?>
	</div>
</section>