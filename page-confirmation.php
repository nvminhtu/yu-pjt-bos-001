<?php
/**
 * Template Name: Confirmation
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>

<?php get_template_part('parts/main-visual-sec');?>

<style>
	body#confirmation .inner{width: 100%;}
	body#confirmation .menu-top-menu-container{}
	body#confirmation .menu-top-menu-container ul{margin-bottom:1px;}
	body#confirmation #submitconfirm{background: url(<?php bloginfo('template_url') ; ?>/images/contact/btn_01.png); width: 335px;
    height: 66px; text-indent: -9999px; cursor: pointer;}
	.btn_02 .arrow{display: block; position: absolute; width: 15px; height: 15px; background: url(<?php bloginfo('template_url') ; ?>/images/btn_02_right.png) center no-repeat; top: 24px; margin-top: 0; right: 10px;} 
	#contact .btn_02 #submit{height: 100%; background-size: 100% auto; text-align: center; font-size: 18px;font-weight: bold; color: #fff; display: block; position: relative;}
	</style>

<?php  while ( have_posts() ) : the_post();?>
    <?php the_content(); ?>
 <?php endwhile; // End of the loop.?>

<?php get_footer(); ?>
