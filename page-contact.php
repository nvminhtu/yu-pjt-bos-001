<?php
/**
 * Template Name: Contact
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<div class="com_mainvisual">
  <div class="inner">
    <h2><span>体験レッスン予約フォーム</span></h2>
  </div>
</div>



<?php  while ( have_posts() ) : the_post();?>
    <?php the_content(); ?>
  <?php endwhile; // End of the loop.?>

<?php
      // common area for all sub pages and posts
      //get_template_part('parts/list-pages');
      get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
