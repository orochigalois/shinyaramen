<?php
$heading = get_sub_field('heading');
$intro_copy = get_sub_field('intro_copy');
$panels = get_sub_field('panels');
if($panels) { ?>
<section class="module module__accordion">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="module__accordion__intro typography">
					<?php
					if($heading) {
						echo '<h2>' . $heading . '</h2>';
					}
					echo wpautop($intro_copy);
					?>
				</div>
				<div class="accordion">
					<?php
					foreach($panels as $panel) {
						$heading = $panel['heading'];
						$content = $panel['content'];
						$id = 'panel-' . lp_slugify($heading);
						?>
						<h3 class="accordion__panel-heading">
							<a class="accordion__panel-heading__link" data-toggle="collapse" href="#<?php echo $id; ?>" role="button" aria-expanded="false" aria-controls="<?php echo $id; ?>"><?php echo $heading; ?></a>
						</h3>
						<div class="accordion__panel collapse" id="<?php echo $id; ?>">
							<div class="accordion__panel__inner typography">
								<?php echo $content; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

	</div>
</section>
<?php } ?>