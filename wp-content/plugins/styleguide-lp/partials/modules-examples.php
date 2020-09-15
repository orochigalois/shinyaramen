<?php
$flexible_layouts = lp_get_flexible_module_names();
$usages = lp_get_flexible_module_usages($flexible_layouts);
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="alert alert-info">
				<p>This page shows the first instance of each module (by post ID). To find all instances of each module, refer to the module usage tab.</p>
			</div>
		</div>
	</div>
</div>

<?php
foreach($usages as $module_name => $post_ids) { ?>
	<?php
	$first_instance = get_post($post_ids[0]);
	$source = $first_instance->ID;
	?>
	<div class="module-example-heading">
		<h2><?php echo $module_name; ?></h2>
	</div>
	<?php
	// Get this page's modules as an array, to get the index of the first instance of the one we're looking for
	// (if we don't check the row index, all instances are shown)
	$modules_on_this_page = get_field(MODULES_FIELD_NAME, $source);
	$index_of_first_instance = array_search($module_name, array_column($modules_on_this_page, 'acf_fc_layout'));

	if(have_rows(MODULES_FIELD_NAME, $source)) {
		while(have_rows(MODULES_FIELD_NAME, $source)) {
			the_row();
			if((get_row_layout() == $module_name) && get_row_index() == $index_of_first_instance + 1) {
				get_template_part( MODULES_PARTIAL_PATH . $module_name);
			}
		}
	} else {
		echo '<div class="alert alert-primary">Module not in use</div>';
	}
	wp_reset_postdata();
}