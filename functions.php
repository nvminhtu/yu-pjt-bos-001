<?php /** -------------- 01. Add support for theme -------------- **/
add_theme_support( 'title-tag' );

// add Featured Image
add_theme_support( 'post-thumbnails' );

// add image for uploading
add_image_size( 'img_other_pages', 391, 198, true );
add_image_size( 'img_blog_index', 360, 165, true );

/** -------------- 02.Add included files -------------- **/
require_once (dirname(__FILE__) . '/includes/add-image-size.php');
require_once (dirname(__FILE__) . '/includes/metabox.php');
require_once (dirname(__FILE__) . '/includes/custom-post-types.php');
require_once (dirname(__FILE__) . '/includes/widgets.php');
require_once (dirname(__FILE__) . '/includes/pagination.php');
require_once (dirname(__FILE__) . '/includes/shortcode.php');
require_once (dirname(__FILE__) . '/includes/format-editor.php');
require_once (dirname(__FILE__) . '/includes/admin-customize.php');
require_once (dirname(__FILE__) . '/includes/widget-list-qa-category.php');
require_once (dirname(__FILE__) . '/includes/widget-recent-qa.php');

/** -------------- 03. Setting for theme -------------- **/
// #menu
if (function_exists('register_nav_menu')) {
  register_nav_menu('top-menu', 'TOP MENU');
}

// #widget: allow shortcode run in widget
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

// #slug: get slug of a current post/page
function get_the_slug( $id=null ){
  if( empty($id) ):
    global $post;
    if( empty($post) )
      return ''; // No global $post var available.
    $id = $post->ID;
  endif;
  $slug = basename( get_permalink($id) );
  return $slug;
}

//limit character for contents
function limit_content() {
  $content = get_the_content();
  $content = preg_replace('/(<)([img])(\w+)([^>]*>)/', "", $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  echo $content;
}

// #trim_word
function trim_word($text, $length, $startPoint=0, $allowedTags=""){
    $text = html_entity_decode(htmlspecialchars_decode($text));
    $text = strip_tags($text, $allowedTags);
    return $text = substr($text, $startPoint, $length);
}

// #custom_page_slug
function get_custom_page_slug() {
  global $post;
  $id_page = "";
  $current_page_template = get_page_template_slug( $post->ID );
  $slug_patterns = array();
  $slug_patterns[0] = '/page-/';
  $slug_patterns[1] = '/.php/';
  $current_page_slug = preg_replace($slug_patterns, '', $current_page_template);

  //check what type of page?
  if(is_front_page()||is_home()) {
    $id_page = "index";
  } elseif(is_page()) {
    $id_page = $current_page_slug;
  } elseif (is_singular('post')||is_category()||is_post_type_archive('post')) {
    $id_page = "bloglist";
  } elseif (is_singular('qa') || is_tax( 'qacat' ) || is_post_type_archive('qa')) {
    $id_page = "qa";
  } else {
    
  }
  return $id_page;
}

// #favicon
function add_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/images/favicon.ico';
	  echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

/** -------------- 04. Fix other plugins -------------- **/
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'qa' )
  {
    return locate_template('search-qa.php');  //  redirect to archive-search.php
  }
  return $template;
}
add_filter('template_include', 'template_chooser');
?>
