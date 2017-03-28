<?php
/* 01. Template directory */
add_shortcode('tmpurl', 'shortcode_tmpurl');
function shortcode_tmpurl() {
	return get_bloginfo('template_url');
}

/* 02. Top page URL */
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
	return get_bloginfo('url');
}

/* 09- Tag show shortcode */
add_shortcode('tag_show', 'tag_show_func');
function tag_show_func($atts) {
	extract(shortcode_atts(array(
	   'title'=> '話題のキーワード',
	   'sub_title' => '注目されている言葉',
       'order' => 'DESC',
       'text_link' => '他のキーワード'
  	), $atts));

	$return .= '<div class="list_navi clearfix">
      <dl>
        <dt>'.$title.'<span>'.$sub_title.'</span></dt>
        <dd>'.bwp_wp_tag_cloud().'</dd>
      </dl>
      <p class="link01"><a href="'.get_bloginfo('siteurl').'/tags/">他のキーワード</a></p>
    </div>';
    return $return;
}
function bwp_wp_tag_cloud($echo = false) {
	$args = array(
		'unit' => 'px',
		'smallest' => '12',
		'largest' => '12',
		'format' => 'list',
		'orderby' => 'count',
		'order' => 'DESC',
		'echo' => $echo
	);

	return wp_tag_cloud($args);
}
