<?php
/***
*** @widgets for wordpress
***/

// 01. Add widget 01
function footer_widget_one()
 {
	register_sidebar(array(
	  'id' => 'footer-widget-1',
	  'name' => 'Footer Widget 1',
	  'class' => 'f_column_01',
	  'description' => 'This is Footer Widget one',
	  'before_title' => '<dt>',
	  'after_title' => '</dt><dd>',
	  'before_widget' => '<dl>',
	  'after_widget' => '</dd></dl>',
	 ));
 }
add_action('widgets_init', 'footer_widget_one');

// 02. Add widget 02
function footer_widget_two()
 {
	 register_sidebar(array(
	  'id' => 'footer-widget-2',
	  'name' => 'Footer Widget 2',
	  'class' => 'f_column_02',
	  'description' => 'This is Footer Widget two',
	  'before_title' => '',
	  'after_title' => '',
	  'before_widget' => '',
	  'after_widget' => '',
	 ));
 }
add_action('widgets_init', 'footer_widget_two');

// 03. Add widget 03
function footer_widget_three()
 {
	 register_sidebar(array(
	  'id' => 'footer-widget-3',
	  'name' => 'Footer Widget 3',
	  'class' => 'f_column_03',
	  'description' => 'This is Footer Widget three',
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => ''
	 ));
 }
add_action('widgets_init', 'footer_widget_three');

// 03. Add widget 04
function footer_widget_fourth() {
	 register_sidebar(array(
	  'id' => 'footer-widget-4',
	  'name' => 'Footer Widget 4',
	  'class' => 'f_column_04',
	  'description' => 'This is Footer Widget fourth',
    'before_title' => '',
    'after_title' => '',
    'before_widget' => '',
    'after_widget' => ''
	 ));
 }
add_action('widgets_init', 'footer_widget_fourth');

// ----------------- 04. Add widget Bottom -----------------------
function footer_widget_bottom() {
	 register_sidebar(array(
	  'id' => 'footer-menu-bottom',
	  'name' => 'Footer Menu Bottom',
	  'class' => 'flink01 clearfix',
	  'description' => 'This is Footer Widget at Bottom',
	  'before_title' => '',
	  'after_title' => '',
	  'before_widget' => '<div class="flink01 clearfix">',
	  'after_widget' => '</div>',
	 ));
 }
 add_action('widgets_init', 'footer_widget_bottom');

// ----------------- 05. Add widget Bottom -----------------------
function footer_copyright_bottom() {
	 register_sidebar(array(
	  'id' => 'footer-copyright-bottom',
	  'name' => 'Footer Copyright Bottom',
	  'class' => '',
	  'description' => 'This is Copyright Widget at Bottom',
	  'before_title' => '',
	  'after_title' => '',
	  'before_widget' => '',
	  'after_widget' => '',
	 ));
 }
 add_action('widgets_init', 'footer_copyright_bottom');

function sidebar_widget() {
	register_sidebar(array(
	  'id' => 'sidebar-widget',
	  'name' => 'Sidebar Widget',
	  'class' => '',
	  'description' => 'This is sidebar Widget',
	  'before_title' => '',
	  'after_title' => '',
	  'before_widget' => '<div class="cwidget-sidebar">',
	  'after_widget' => '</div>',
	 ));
 }
add_action('widgets_init', 'sidebar_widget');

function sidebar_qa_widget() {
	register_sidebar(array(
	  'id' => 'sidebar-qa-widget',
	  'name' => 'Sidebar QA',
	  'class' => '',
	  'description' => 'This is sidebar QA Widget',
	  'before_title' => '',
	  'after_title' => '',
	  'before_widget' => '<div class="cwidget-sidebar">',
	  'after_widget' => '</div>',
	 ));
 }
add_action('widgets_init', 'sidebar_qa_widget');


// ----------------- 07. Custom code for removing wrap symbol -----------------------
// >> add [widget title] to prevent it display on
function flexible_widget_titles( $widget_title ) {
  // get rid of any leading and trailing spaces
  $title = trim( $widget_title );
  // check the first and last character, if [ and ] set the title to empty
  if ( $title[0] == '[' && $title[strlen($title) - 1] == ']' ) $title = '';
    return $title;
}
add_filter( 'widget_title', 'flexible_widget_titles' );