<?php
function work_register() {
register_post_type( 'work',
    array(
        'labels'                => array(
	    'name'                  => 'Work',
	    'singular_name'         => 'Add Work',
	    'add_new'               => 'Add Work',
	    'add_new_item'          => 'New Work',
	    'edit_item'             => 'Edit Work',
	    'new_item'              => 'Add Work',
	    'view_item'             => 'View Work',
	    'search_items'          => 'Search Work',
	    'not_found'             => 'No Work found',
	    'not_found_in_trash'    => 'No Work in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
		'capability_type'		=> 'page',
		'menu_icon'				=> 'dashicons-format-image',
		'show_in_rest'          => true,
        'query_var'             => true,
    	'permalink_epmask'      => true,
        'menu_position'         => 10,
        'show_in_menu'          => true,
        'supports' 				=> array( 'title', 'thumbnail', 'page-attributes'),
        'rewrite'               => array( 'slug' => 'Work', 'with_front' => false ),
        'has_archive'           => true
    )
);
add_post_type_support( 'Work', array( 'editor' ) );
};
add_action('init', 'work_register');

function news_register() {
register_post_type( 'news',
    array(
        'labels'                => array(
        'name'                  => 'News',
        'singular_name'         => 'Add News',
        'add_new'               => 'Add News',
        'add_new_item'          => 'New News',
        'edit_item'             => 'Edit News',
        'new_item'              => 'Add News',
        'view_item'             => 'View News',
        'search_items'          => 'Search News',
        'not_found'             => 'No News found',
        'not_found_in_trash'    => 'No News in trash',
            ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-media-document',
        'show_in_rest'          => true,
        'query_var'             => true,
        'permalink_epmask'      => true,
        'menu_position'         => 10,
        'show_in_menu'          => true,
        'supports'              => array( 'title', 'thumbnail', 'page-attributes'),
        'rewrite'               => array( 'slug' => 'News', 'with_front' => false ),
        'has_archive'           => true
    )
);
add_post_type_support( 'News', array( 'editor' ) );
};
add_action('init', 'news_register');

?>