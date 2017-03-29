<?php
/**
 * Single QA
 */ ?>
<?php get_header(); ?>
<div class="com_mainvisual">
  <div class="inner">
    <h2><span>よくあるご質問</span></h2>
  </div>
</div>

<div class="main">
<div class="inner clearfix">
<!-- left_content -->
<div class="left_content">
<h3 class="h3_ttl">タイトルが入ります。タイトルが入ります。</h3>

<div class="qa_sec">
<?php /* Start the Loop */
while ( have_posts() ) : the_post(); ?>
<dl>
<dt><?php the_title(); ?></dt>
<dd><?php the_content(); ?></dd>
</dl>

<?php endwhile; // End of the loop. ?>
</div>
</div><!-- end left_content -->

<!-- Get Sidebar -->
<?php get_sidebar('qa'); ?>

</div>
</div>

<?php
    // common area for all sub pages and posts
    //get_template_part('parts/list-pages');
    //get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
