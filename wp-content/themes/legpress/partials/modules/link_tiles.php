<?php
$tiles = get_sub_field('tiles');
?>
<section class="module module__link-tiles">
	<div class="container">
		<div class="row">
			<?php
			foreach($tiles as $tile) {
				$image_id = $tile['image'];
				$heading = $tile['heading'];
				$description = $tile['description'];
				$link = $tile['link'];
				?>
				<a class="card col-12 col-md-4" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
					<?php echo wp_get_attachment_image($image_id, 'thumbnail', false, array('class' => 'card-img-top')); ?>
					<div class="card-body typography">
						<h2><?php echo $heading; ?></h2>
						<?php echo wpautop($description); ?>
					</div>
				</a>
			<?php } ?>
		</div>
	</div>
</section>