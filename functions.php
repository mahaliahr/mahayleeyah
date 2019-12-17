<?php
////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

require_once ('includes/set_up.php');
require_once ('includes/menus_sidebars.php');
require_once ('includes/custom_posts_taxonomies.php');
require_once ('includes/shortcodes.php');
require_once ('includes/html_functions.php');


//Sets up the use of shortcodes throughout website
function do_that_shortcode( $tag, array $atts = array(), $content = null ) {

	global $shortcode_tags;

	if ( ! isset( $shortcode_tags[ $tag ] ) ) {
		return false;
	}

	return call_user_func( $shortcode_tags[ $tag ], $atts, $content, $tag );
}



function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('stylesheet_directory').'/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');
?>