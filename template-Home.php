<?php
/* Template Name: Home */
get_header();
the_post();
	echo'
		<section class="hero">
			<div>
				<div>
					<h1>\''.get_field('title_one').'\'</h1>
					<h2>'.get_field('title_two').'</h2>
				</div>
			</div>
			<div>
				<div>
					'.get_field('words').'
				</div>
			</div>
		</section>
		<section class="work">
			<div class="width-binder">';
					flexibleContainer();
			echo'</div>
		</section>';

get_footer();
?>
