<?php
	function wedo_posts() {
		// register_post_type( 
		// 	'article', [
		// 		'labels' => [
		// 			'name' 								=> 'Articles',
		// 			'singular_name' 			=> 'Article',
		// 			'all_items' 					=> 'All Articles',
		// 			'add_new' 						=> 'Add New',
		// 			'add_new_item' 				=> 'Add New Article',
		// 			'edit' 								=> 'Edit',
		// 			'edit_item' 					=> 'Edit Article',
		// 			'new_item' 						=> 'New Article',
		// 			'view_item' 					=> 'View Article',
		// 			'search_items' 				=> 'Search Articles',
		// 			'parent_item_colon' 	=> ''
		// 		],
		// 		'capability_type'       => 'post',
		// 		'description'           => 'Custom Post for Articles',
		// 		'rewrite'               => ['slug' => 'article'],
		// 		'public'                => true,
		// 		'has_archive'           => true,
		// 		'hierarchical'          => false,
		// 		'menu_position'         => 5,
		// 		'menu_icon'             => 'dashicons-welcome-write-blog',
		// 		'show_in_rest'          => true,
		// 		'rest_base'             => 'articles',
		// 		'rest_controller_class' => 'WP_REST_Posts_Controller',
		// 		'supports'              => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes', 'amp', 'post-formats'],
		// 		'taxonomies'            => ['category'],
		// 		'show_in_graphql'       => true,
		// 		'graphql_single_name' 	=> 'article',
		// 		'graphql_plural_name' 	=> 'articles',
		// 	] 
		// );
	}

	function wedo_taxonomies() {
		// register_taxonomy( 
		// 	'partner-type', 
		// 	'clubhouse-partners', [
		// 		'labels'								=> [
		// 			'name'              	=> _x( 'Partner Type', 'taxonomy general name' ),
		// 			'singular_name'     	=> _x( 'Partner Type', 'taxonomy singular name' ),
		// 			'search_items'      	=> __( 'Search Partner Types' ),
		// 			'all_items'         	=> __( 'All Partner Types' ),
		// 			'parent_item'       	=> __( 'Parent Partner Type' ),
		// 			'parent_item_colon' 	=> __( 'Parent Partner Type:' ),
		// 			'edit_item'         	=> __( 'Edit Partner Type' ), 
		// 			'update_item'       	=> __( 'Update Partner Type' ),
		// 			'add_new_item'      	=> __( 'Add New Partner Type' ),
		// 			'new_item_name'     	=> __( 'New Partner Type' ),
		// 			'menu_name'         	=> __( 'Partner Types' ),
		// 		],
		// 		'hierarchical' 					=> true,
		// 		'show_in_graphql'     	=> true,
		// 		'graphql_single_name' 	=> 'partnerType',
		// 		'graphql_plural_name' 	=> 'partnerTypes',
		// 	]
		// );
	}
?>
