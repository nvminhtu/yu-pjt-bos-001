<?php
/**
 * Template Name: Thanks
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<style>
  #thanks .section01 .txtz,
  #thanks .section01 .contentThank p{
    text-align: center;
    margin: 40px auto 0;
}
</style>
<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('parts/main-visual-sec');?>

    <div class="com_mainvisual">
      <div class="inner">
        <h2><span>フォーム送信完了</span></h2>
      </div>
    </div>
    <section class="section01">
      <div class="inner">

      <h3 class="title_01"><?php the_title(); ?></h3>
        <div class="contentThank">
          <?php the_content(); ?>  
        </div>
      </div>
    </section>
<?php endwhile; ?>






<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>

