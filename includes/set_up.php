<?php
add_action( 'after_setup_theme', 'theme_setup' );
add_action('after_setup_theme', 'remove_admin_bar');
	function remove_admin_bar() {
		if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		}
	}
function theme_setup()
{
	add_filter('show_admin_bar', '__return_false');
	
	/* Images */
	add_theme_support( 'post-thumbnails', array ('page','post', ));
	set_post_thumbnail_size(300,300, true);
	

	/* Remove things from the Dashboard and Menus */

	function remove_editor_menu()
	{
		//remove_action('admin_menu', '_add_themes_utility_last', 101);
	}
	function remove_menus()
	{  
		//  remove_menu_page( 'index.php' );                  //Dashboard
		//remove_menu_page( 'edit.php' );                   //Posts
		//  remove_menu_page( 'upload.php' );                 //Media		
		//  remove_menu_page( 'edit.php?post_type=page' );    //Pages
		remove_menu_page( 'edit-comments.php' );          //Comments
		// remove_menu_page( 'themes.php' );                 //Appearance
		//remove_menu_page( 'plugins.php' );                //Plugins
		//  remove_menu_page( 'users.php' );                  //Users
		//  remove_menu_page( 'tools.php' );                  //Tools
		//  remove_menu_page( 'options-general.php' );        //Settings  
	}
	function remove_admin_bar_links()
	{
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
		$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
		$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
		$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
		$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
		$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
		//  $wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
		//  $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
		//  $wp_admin_bar->remove_menu('updates');          // Remove the updates link
	    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
	    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
	    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
		//    $wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
	}

	function remove_dashboard_meta()
	{
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
	}
	function my_acf_show_admin( $show )
	{
		// Remove access to custom fields unless it is user Admin 
		$current_user = wp_get_current_user();
		$showVal = false;
		if ($current_user->user_login == 'DeveloperSam')
		{
		    $showVal = true;
		}
	    return $showVal;    
	}
	
	function remove_menus_user()
	{  
		$current_user = wp_get_current_user();
			if ($current_user->user_login != 'DeveloperSam')
			{
		//  remove_menu_page( 'index.php' );                  //Dashboard
		remove_menu_page( 'edit.php' );                   //Posts
		 //remove_menu_page( 'upload.php' );                 //Media		
		 //remove_menu_page( 'edit.php?post_type=page' );    //Pages
		remove_menu_page( 'edit-comments.php' );          //Comments
		remove_menu_page( 'themes.php' );                 //Appearance
		remove_menu_page( 'plugins.php' );                //Plugins
		//  remove_menu_page( 'users.php' );                  //Users
		 remove_menu_page( 'tools.php' );                  //Tools
		 remove_menu_page( 'options-general.php' );        //Settings
		remove_menu_page( 'backwpup' );
		}
	}
	
	
	//add_action( 'admin_init', 'the_dramatist_debug_admin_menu' );

function the_dramatist_debug_admin_menu() {

    echo '<pre>' . print_r( $GLOBALS[ 'menu' ], TRUE) . '</pre>';
}
	
	
	add_action('_admin_menu', 'remove_editor_menu', 1);
	add_action( 'admin_menu', 'remove_menus' );
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );
	add_action( 'admin_init', 'remove_dashboard_meta' ); 
	remove_action( 'welcome_panel', 'wp_welcome_panel' );
	add_filter('acf/settings/show_admin', 'my_acf_show_admin');
	add_action( 'admin_menu', 'remove_menus_user' );
	
	
	
	
	if( function_exists('acf_add_options_page') )
	{
		acf_add_options_page(array(
			'page_title' 	=> 'maheyhey Footer',
			'menu_title'	=> 'maheyhey Footer',
			'menu_slug' 	=> 'maheyhey_options',
			'capability'	=> 'edit_posts',
			'redirect'	=> false
		));
		
	}
}
////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////


function theme_stylesheets()
{
		wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
		wp_enqueue_style( 'styles.css');
}
function theme_load_scripts() 
{
	wp_enqueue_script('js-js',get_template_directory_uri() . '/js/js.js',array('jquery'),1,true);
}

add_action('wp_enqueue_scripts', 'theme_stylesheets');
add_action('wp_enqueue_scripts', 'theme_load_scripts' );



//Editor Style
//add_editor_style('css/editor-style.css');
//remove_filter ('acf_the_content', 'wpautop');


////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

//require_once('lib/wp_bootstrap_navwalker.php');
//require_once('lib/bootstrap-custom-menu-widget.php');

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

add_theme_support( 'automatic-feed-links' );

add_theme_support('post-thumbnails', array('post', 'page', 'article'));
add_post_type_support( 'page', 'excerpt' );

////////////////////////////////////////////////////////////////////
// Set Content Width
///////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 1200;

/* ACF */


// 3. Hide ACF field group menu item
add_filter('acf/settings/show_admin', '__return_false');

//4. idea
function titles( $title, $id = null) { 
	//return '<b>' . $title . '</b>'; 
	return $title;}
add_filter('the_title', 'titles');

?>