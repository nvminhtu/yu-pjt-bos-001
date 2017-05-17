<?php
/***
*** @CPT - Custom post type
***/

function prefix_register_all() {

	/* 01 -- Studio ------- */
	register_post_type(
		'studio',
		array(
			'labels'        => array(
				'name'               => __('スタジオ', 'custom_text_posttype'),
				'singular_name'      => __('スタジオ', 'custom_text_posttype'),
				'menu_name'          => __('スタジオ', 'custom_text_posttype'),
				'name_admin_bar'     => __('スタジオ', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'studio', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'publicly_queryable'  => false,
			'menu_position' => 3,
			'supports'      => array(
				'title',
				'thumbnail',
				'excerpt',
				'author',
				'revisions',
				'custom-fields'
			),
			'taxonomies'    => array(
				'post_tag'
			),
			'has_archive'   => false,
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'rewrite'       => array(
				'slug' => 'studio',
			),
		)
	);

	/* 02 -- FAQ ------- */
	register_post_type(
		'qa',
		array(
			'labels'        => array(
				'name'               => __('よくあるご質問', 'custom_text_posttype'),
				'singular_name'      => __('よくあるご質問', 'custom_text_posttype'),
				'menu_name'          => __('よくあるご質問', 'custom_text_posttype'),
				'name_admin_bar'     => __('よくあるご質問', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'studio', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 3,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'author',
				'revisions',
				'custom-fields'
			),
			'taxonomies'    => array(),
			'has_archive'   => false,
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'rewrite'       => array(
				'slug' => 'qa',
			),
		)
	);

	/* 02.1 -- FAQ CATEGORY------- */
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'QA Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'QA Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit Category', 'textdomain' ),
		'update_item'       => __( 'Update Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New Category', 'textdomain' ),
		'new_item_name'     => __( 'New Category Name', 'textdomain' ),
		'menu_name'         => __( 'Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'qacat' ),
	);

	register_taxonomy( 'qacat', array( 'qa' ), $args );

	/* 03 -- news ------- */
	register_post_type(
		'news',
		array(
			'labels'        => array(
				'name'               => __('お知らせ', 'custom_text_posttype'),
				'singular_name'      => __('お知らせ', 'custom_text_posttype'),
				'menu_name'          => __('お知らせ', 'custom_text_posttype'),
				'name_admin_bar'     => __('お知らせ', 'custom_text_posttype'),
				'all_items'          => __('All Items', 'custom_text_posttype'),
				'add_new'            => _x('Add New', 'news', 'custom_text_posttype'),
				'add_new_item'       => __('Add New Item', 'custom_text_posttype'),
				'edit_item'          => __('Edit Item', 'custom_text_posttype'),
				'new_item'           => __('New Item', 'custom_text_posttype'),
				'view_item'          => __('View Item', 'custom_text_posttype'),
				'search_items'       => __('Search Items', 'custom_text_posttype'),
				'not_found'          => __('No items found.', 'custom_text_posttype'),
				'not_found_in_trash' => __('No items found in Trash.', 'custom_text_posttype'),
				'parent_item_colon'  => __('Parent Items:', 'custom_text_posttype'),
			),
			'public'        => true,
			'menu_position' => 3,
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'author',
				'revisions',
				'custom-fields'
			),
			'taxonomies'    => array(
				'post_tag'
			),
			'has_archive'   => false,
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'rewrite'       => array(
				'slug' => 'news',
			),
		)
	);

}

add_action('init', 'prefix_register_all', 0);

/* @xai chung*/
function prefix_flush_rewrite_rules()
{
	flush_rewrite_rules();
}
add_action('after_switch_theme', 'prefix_flush_rewrite_rules');
/*======================/Create post type - end /=============================*/

?>
