<?php
$copy = get_sub_field('copy');
if($copy) { ?>
	<section class="module module__copy">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10 typography">
					<?php echo $copy; ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>