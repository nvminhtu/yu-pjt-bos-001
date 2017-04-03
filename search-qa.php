<?php
/**
 * Template Name: QA Search page
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>

<?php get_template_part('parts/main-visual-qa'); ?>

<div class="main">
  <div class="search_area">
    <div class="inner search_inner">
      <p class="search_tit">テキストが入ります。テキストが入ります。</p>
      <form action="<?php echo site_url('/'); ?>" method="get">
        <input type="text" name="s" class="text" placeholder="キーワードで検索">
        <input type="hidden" name="post_type" value="qa" />
        <input type="submit" name="submit" alt="Search" value="Search" class="submit">
      </form>
    </div>
  </div>

<div class="inner clearfix">
<!-- left_content -->
<div class="left_content">
<h3 class="h3_ttl">Search Result for : <?php echo "$s"; ?></h3>
<div class="qa_sec">
<?php
// The Loop
if ( have_posts() )  {
  while ( have_posts() ) {
    the_post();
    ?>
    <dl>
      <dt>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </dt>
      <dd><?php the_content(); ?></dd>
    </dl>
    <?php
  }
  /* Restore original Post Data */
  wp_reset_postdata();
} else {
  ?>
  <p>No FAQS found.</p>
  <?php
}

?>
</div>
<div class="pagination">
<?php wp_pagenavi(); ?>
</div>
</div><!-- end left_content -->

<!-- Get Sidebar -->
<?php get_sidebar('qa'); ?>

</div>
</div>
<?php get_footer(); ?>
