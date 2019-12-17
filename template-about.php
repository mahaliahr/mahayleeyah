<?php
/* Template Name: About */
get_header();
the_post();
	echo'
		<section class="single-work-title">
			<div class="custom-binder">
				<div>'.get_field('title').'</div>
			</div>
		</section>
		<section class="about-title">
			<div class="about-width-binder">
				<div>'.get_field('subtext').'</div>
			</div>
		</section>
		<section>
				<img class="about lazy-fade" src="'.get_field('image')['url'].'"/>
		</section>
		<section class="about-words">
			<div class="about-width-binder lazy-fade">
				'.get_field('about').'
			</div>
		</section>';
		
get_footer();
?>
