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
				'name'               => __('スタジ', 'custom_text_posttype'),
				'singular_name'      => __('スタジ', 'custom_text_posttype'),
				'menu_name'          => __('スタジ', 'custom_text_posttype'),
				'name_admin_bar'     => __('スタジ', 'custom_text_posttype'),
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
			'taxonomies'    => array(
				'post_tag'
			),
			'has_archive'   => true,
			'menu_icon'   => 'dashicons-welcome-write-blog',
			'rewrite'       => array(
				'slug' => 'studio',
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
