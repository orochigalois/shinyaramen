<section class="bg-light">
	<div class="module-example-heading">
		<h1>Custom text formats <small>available in WYSIWYG</small></h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 typography typography-wrap">
				<?php
				$formats = lp_add_mce_styles(array());
				$formats = json_decode($formats['style_formats'], true);

				foreach($formats as $format) {
					$name = $format['title'];
					$classes = $format['classes'];

					// If this is a selector, use the first one and display it
					// (i.e. allows for selector => 'h2, h3' and will display a h2 in that instance
					if(isset($format['selector'])) {
						$selector = $format['selector'];
						$selectors = explode(',', $selector);
						echo '<'.$selectors[0].' class="'.$classes.'">';
							echo $name;
						echo '</'.$selectors[0].'/>';
					}

					// If this is an inline style, display it in a paragraph
					if(isset($format['inline'])) {
						$inline = $format['inline'];
						echo '<p>';
							echo 'Lorem ipsum dolor sit amet ';
							echo '<'.$inline.' class="'.$classes.'">';
								echo $name;
							echo '</'.$inline.'/>';
							echo ' donec dignissim dictum ante, bibendum vulputate nisl';
						echo '</p>';
					}
				} ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="module-example-heading">
		<h1>Default typography</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 typography typography-wrap">

				<h1>Heading 1</h1>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>

				<h1 class="display-1">Display 1</h1>
				<h1 class="display-2">Display 2</h1>
				<h1 class="display-3">Display 3</h1>
				<h1 class="display-4">Display 4</h1>

				<p class="lead">
					This is a lead paragraph.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
				</p>

				<p>These are some standard paragraphs. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis eu ipsum nec venenatis. Phasellus porttitor mi id eros maximus, quis accumsan justo sodales. Mauris a lorem magna. Suspendisse at leo tincidunt, porttitor nibh eget, tempor nulla. Maecenas condimentum malesuada eros a consequat.</p>
				<p>Aliquam erat volutpat. Proin faucibus efficitur aliquam. Praesent sed quam sagittis, consequat ante vitae, pulvinar justo. Praesent porta pretium viverra. Donec porttitor, velit non laoreet condimentum, mauris tellus imperdiet ligula, et posuere mauris odio ac nisi. Fusce in risus sit amet ligula tempor facilisis. Nullam ante erat, molestie commodo eleifend non, aliquam id turpis. Maecenas sed lacinia. </p>

				<p>You can use the mark tag to <mark>highlight</mark> text.</p>
				<p><del>This line of text is meant to be treated as deleted text.</del></p>
				<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
				<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
				<p><u>This line of text will render as underlined</u></p>
				<p><small>This line of text is meant to be treated as fine print.</small></p>
				<p><strong>This line rendered as bold text.</strong></p>
				<p><em>This line rendered as italicized text.</em></p>

				<blockquote class="blockquote">
					<p>This is a blockquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				</blockquote>

				<ul>
					<li><strong>This is an unordered list</strong></li>
					<li>Praesent auctor in nisl et porta</li>
					<li>Mauris ligula dui, luctus vel pellentesque a, facilisis eget est</li>
					<li>Morbi porttitor odio at feugiat molestie</li>
					<li>lass aptent taciti sociosqu ad litora torquent per conubia nostra</li>
					<li>per inceptos himenaeos.</li>
				</ul>

				<ol>
					<li><strong>This is an ordered list</strong></li>
					<li>Aenean tincidunt efficitur odio eu finibus</li>
					<li>Donec vitae augue purus</li>
					<li>Proin mattis viverra libero, vel faucibus massa feugiat in</li>
					<li>Donec consectetur fringilla nisi vulputate hendrerit.</li>
				</ol>

			</div>
		</div>
	</div>
</section>

