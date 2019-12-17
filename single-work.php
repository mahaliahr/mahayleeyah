<?php 
get_header();
the_post();
echo'
	<section class="single-work-title">
		<div class="width-binder">
			<h3 class="text-center">'; echo get_the_title(); echo'</h3>
		</div>
	</section>
	<section class="single-work">
		<div class="width-binder">';
			
			worksingles();
		echo'</div>
	</section>
	<section class="nextPrev">
		<div class="width-binder">
			<div class="alignment">';
					/*$next_post = get_next_post();

					if ( is_a( $next_post , 'WP_Post' ) ) :
					    echo'
					    <a class="float-left" href="'.get_permalink( $next_post->ID ).'">Previous</a>';
					endif;*/
					echo '<a class="middle" href="'; echo get_home_url(); echo'">Back</a>';
					/*$prev_post = get_previous_post();
					if ( is_a( $prev_post , 'WP_Post' ) ) :
					    echo'
					    <a class="float-right" href="'.get_permalink( $prev_post->ID ).'">Next</a>';
					endif;*/
		echo'
			</div>
		</div>
	</section>';

get_footer();
?>