<?php /** -------------- Update Editor -------------- **/
// #image_width
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height|class)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'get_image_tag_class', '__return_empty_string' );

// #insertp: add <p> tag around image when insert to media
if( is_admin() ) {
  add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );
  function wp_image_wrap_init( $html, $id, $caption, $title, $align, $url, $size, $alt ) {
      return ' <p class="center">'. $html .'</p>';
  }
}


// #preventEditor: don't remove span tag in WP Editor
function tinyMCEoptions($options) {
    $options['extended_valid_elements'] = 'span';
    $options['extended_valid_elements'] = 'u';
    return $options;
}
add_filter('tiny_mce_before_init', 'tinyMCEoptions'); 
?>
