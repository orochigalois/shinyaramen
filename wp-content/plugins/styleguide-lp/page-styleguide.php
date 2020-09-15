<?php
get_header(); 
?>

	<div class="styleguide">

		<div class="styleguide__nav">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="true">Settings</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="typography-tab" data-toggle="tab" href="#typography" role="tab" aria-controls="typography" aria-selected="false">Typography</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="components-tab" data-toggle="tab" href="#components" role="tab" aria-controls="components" aria-selected="false">Components</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="modules-index-tab" data-toggle="tab" href="#modules-index" role="tab" aria-controls="modules-index" aria-selected="false">Module usage</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="modules-examples-tab" data-toggle="tab" href="#modules-examples" role="tab" aria-controls="modules-examples" aria-selected="false">Module examples</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="styleguide__content tab-content">
			<div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
				<?php include('partials/settings.php'); ?>
			</div>
			<div class="tab-pane fade" id="typography" role="tabpanel" aria-labelledby="typography-tab">
				<?php include('partials/typography.php'); ?>
			</div>
			<div class="tab-pane fade" id="components" role="tabpanel" aria-labelledby="components-tab">
				<?php include('partials/components.php'); ?>
			</div>
			<div class="tab-pane fade" id="modules-index" role="tabpanel" aria-labelledby="modules-index-tab">
				<?php include('partials/modules-index.php'); ?>
			</div>
			<div class="tab-pane fade" id="modules-examples" role="tabpanel" aria-labelledby="modules-examples-tab">
				<?php include('partials/modules-examples.php'); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>