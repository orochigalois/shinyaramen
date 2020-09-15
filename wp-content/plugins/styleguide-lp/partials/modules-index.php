<?php
$flexible_layouts = lp_get_flexible_module_names();
$usages = lp_get_flexible_module_usages($flexible_layouts, 'title');
?>

<div class="container">
	<div class="row">
		<div class="col-12 typography">
			<table class="table">
				<thead>
					<tr>
						<th scope="col" style="width:25%">Module name</th>
						<th scope="col" style="width:75%;">Shown on:</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach($flexible_layouts as $flexible_layout) {
						$label = $flexible_layout['label'];
						$name = $flexible_layout['name'];
						$array_of_ids = $usages[$name];
						?>
						<tr>
							<th scope="row">
								<?php echo $label; ?>
								<span class="filename">(<?php echo  $name; ?>.php)</span>
							</th>
							<td>
								<?php if(!empty($array_of_ids)) {
									echo '<ul>';
									foreach($array_of_ids as $id) {
										$title = get_the_title($id);;
										$url = get_the_permalink($id);
										$type = get_post_type($id);
										?>
										<li>
											<a href="<?php echo $url; ?>"><?php echo $title; ?></a>
											<span class="post-type"><?php echo $type; ?></span></li>
									<?php }
									echo '</ul>';
								} else {
									echo '<div class="alert alert-primary">Module not in use</div>';
								} ?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		</div>
	</div>
</div>