<?php
/**
 * Template Name: Confirmation
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>

<?php get_template_part('parts/main-visual-qa'); // use global visual ?>

<?php  while ( have_posts() ) : the_post();?>
    <section class="section01">
        <div class="inner">
            <div class="confirmWrap">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
            
 <?php endwhile; // End of the loop.?>

<?php get_footer(); ?>
