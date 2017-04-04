<?php /** -------------- 01. Add support for theme -------------- **/
add_theme_support( 'title-tag' );

// add Featured Image
add_theme_support( 'post-thumbnails' );

// add image for uploading
add_image_size( 'img_other_pages', 391, 198, true );
add_image_size( 'img_blog_index', 360, 165, true );
add_image_size( 'img_studio_large', 423, 282, true );
add_image_size( 'img_studio_small', 342, 278, true );
add_image_size( 'img_feature_avatar', 374, 278, true );
add_image_size( 'img_blog_single', 808, 457, true );
add_image_size( 'img_blog_main', 332, 223, true );
add_image_size( 'img_blog_sub', 255, 150, true );
add_image_size( 'img_blog_list', 421, 296, true );
add_image_size( 'img_blog_list_item', 230, 135, true );
add_image_size( 'img_related_blog_large', 376, 197, true );
add_image_size( 'img_related_blog_small', 230, 135, true );
add_image_size( 'img_user_avatar_small', 40, 40, true );
add_image_size( 'img_feature_gallery', 668, 449, true );

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
require_once (dirname(__FILE__) . '/includes/widget-tags.php');
require_once (dirname(__FILE__) . '/includes/widget-facebook.php');
require_once (dirname(__FILE__) . '/includes/widget-recent-qa.php');
require_once (dirname(__FILE__) . '/includes/widget-recent-posts.php');

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

// add style for admin visual
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

// #custom_page_slug
function get_custom_page_slug() {
  global $post;
  $id_page = "";
  $current_page_template = get_page_template_slug( $post->ID );
  $slug_patterns = array();
  $slug_patterns[0] = '/page-/';
  $slug_patterns[1] = '/.php/';
  $current_page_slug = preg_replace($slug_patterns, '', $current_page_template);
  $post_type = get_query_var('post_type');

  //check what type of page?
  if(is_front_page()||is_home()) {
    $id_page = "index";
  } elseif(is_page() && !is_page('blog')) {
    $id_page = $current_page_slug;
  } elseif(is_page() && is_page('blog')) {
    $id_page = 'bloglist';
  } elseif (is_singular('post')||is_category()||is_post_type_archive('post')||is_post_type_archive('news')||is_singular('news')||is_search()) {
    $id_page = "bloglist";
  } elseif (is_singular('qa') || is_tax( 'qacat' ) || is_post_type_archive('qa')) {
    $id_page = "qa";
  } elseif (is_search()&&$post_type=='qa') {
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

/* #advanced custom fields */
add_action('admin_head', 'admin_styles');
function admin_styles() { ?>
  <style>
    .acf-editor-wrap .wp-editor-container textarea.wp-editor-area {
      height: 200px !important;
      min-height: 200px;
    }
  </style>
<?php } ?>
