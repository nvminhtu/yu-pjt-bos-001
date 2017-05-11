<?php
/**
 * Template Name: Contact
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>

<?php get_template_part('parts/main-visual-sec');?>

<?php  while ( have_posts() ) : the_post();?>
    <?php the_content(); ?>
  <?php endwhile; // End of the loop.?>
  <section class="policy">
		<div class="inner">
			  <h2 class="title_01"><?php echo $policy_title = get_field('policy_title'); ?></h2>
        <div class="policy_inner">
          <?php echo $policy_content = get_field('policy_content'); ?>
        </div>
      </div>
    </section>
<?php
      // common area for all sub pages and posts
      get_template_part('parts/list-pages');
      get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
