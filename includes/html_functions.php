<?php

function blockOne(){
	if( get_row_layout() == 'work_block_one' ){
		$imgOne = get_sub_field('image_land');
		$imgOneUrl = $imgOne['url'];
		echo'
			<div class="landscape">
					<div class="full-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgOneUrl.');">
							<a href="'.get_sub_field('related_link_one').'" class="css-transition">
								<div class="css-transition">'.get_sub_field('title_one').'</div>
							</a>
						</div>
					</div>
				</div>
		';
	}
}
function blockTwo(){
	if( get_row_layout() == 'work_block_two' ){
		$imgOne = get_sub_field('image_one');
		$imgOneUrl = $imgOne['url'];
		$imgTwo = get_sub_field('image_two');
		$imgTwoUrl = $imgTwo['url'];
		echo'
			<div class="fiftyfifty">
					<div class="half-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgOneUrl.');">
							<a href="'.get_sub_field('related_link_one').'" class="css-transition">
								<div class="css-transition">'.get_sub_field('title_one').'</div>
							</a>
						</div>
					</div>
					<div class="half-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgTwoUrl.');">
							<a href="'.get_sub_field('related_link_two').'" class="css-transition">
								<div class="css-transition">'.get_sub_field('title_two').'</div>
							</a>
						</div>
					</div>
				</div>
		';
	}
}

function flexibleContainer(){
	if( have_rows('work') ):
		while ( have_rows('work') ) : the_row();
			blockOne();
			blockTwo();
		endwhile;
	endif;
}

function ones(){
	if( get_row_layout() == 'ones' ){
		$imgOne = get_sub_field('image_land');
		$imgOneUrl = $imgOne['url'];
		echo'
			<div class="landscape">
					<div class="full-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgOneUrl.');">
						</div>
					</div>
				</div>
		';
	}
}
function twos(){
	if( get_row_layout() == 'twos' ){
		$imgOne = get_sub_field('image_one');
		$imgOneUrl = $imgOne['url'];
		$imgTwo = get_sub_field('image_two');
		$imgTwoUrl = $imgTwo['url'];
		echo'
			<div class="fiftyfifty">
					<div class="half-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgOneUrl.');">
						</div>
					</div>
					<div class="half-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgTwoUrl.');">
						</div>
					</div>
				</div>
		';
	}
}
function threes(){
	if( get_row_layout() == 'threes' ){
		$imgOne = get_sub_field('image_one');
		$imgOneUrl = $imgOne['url'];
		$imgTwo = get_sub_field('image_two');
		$imgTwoUrl = $imgTwo['url'];
		$imgThree = get_sub_field('image_three');
		$imgThreeUrl = $imgThree['url'];
		echo'
			<div class="thirtythree">
					<div class="third-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgOneUrl.');">
						</div>
					</div>
					<div class="third-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgTwoUrl.');">
						</div>
					</div>
					<div class="third-box lazy-fade">
						<div class="item cover" style="background-image:url('.$imgThreeUrl.');">
						</div>
					</div>
				</div>';
	}
}
function copytext(){
	if( get_row_layout() == 'copys' ){
		echo'<div class="single-copy lazy-fade">'.get_sub_field('the_copy').'</div>';
	}
}
function caption(){
	if( get_row_layout() == 'caption' ){
		echo'<div class="caption lazy-fade">'.get_sub_field('caption').'</div>';
	}
}
function imgtag(){
	if( get_row_layout() == 'imgtag' ){
		echo'<img src="'.get_sub_field('pure_image')['url'].'"/>';
	}
}

function worksingles(){
	if( have_rows('worksingles') ):
		while ( have_rows('worksingles') ) : the_row();
			ones();
			twos();
			threes();
			copytext();
			caption();
			imgtag();
		endwhile;
	endif;
}
?>