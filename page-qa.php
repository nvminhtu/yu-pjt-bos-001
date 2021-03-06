<?php
/**
 * Template Name: QA listing
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
      <p class="search_tit">質問に関するキーワードを入力ください</p>
      <form action="/" method="get">
        <input type="text" name="s" class="text" placeholder="キーワードで検索">
        <input type="hidden" name="post_type" value="qa" />
        <input type="submit" name="submit" alt="Search" value="Search" class="submit">
      </form>
    </div>
  </div>

<div class="inner clearfix">
<!-- left_content -->
<div class="left_content">
<h3 class="h3_ttl">BOSTYに寄せられる質問</h3>

<?php tnt_init_post_views(); ?>

<div class="qa_sec">
<?php
// The Query
$qa_paged = get_query_var('paged') ? get_query_var('paged') : 1;
$qa_args = array(
  'post_type' => 'qa',
  'posts_per_page' => 5,
  'paged'=>$qa_paged,
  'meta_key' => 'tnt_post_views_count',
  'orderby' => 'meta_value_num', 
  'order' => 'DESC'
);
$qa_query = new WP_Query( $qa_args );
// $qa_query = pvc_get_most_viewed_posts( $qa_args );

// The Loop
if ( $qa_query->have_posts() ) {
  while ( $qa_query->have_posts() ) {
    $qa_query->the_post();
    ?>
    <p><?php echo $viewCount; ?></p>
    <dl>
    <dt><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></dt>
    <dd><?php the_content(); ?></dd>
    </dl>
    <?php
  }
  /* Restore original Post Data */
  wp_reset_postdata();
} else {
  ?>
  <p>No FAQS to show</p>
  <?php
}
?>
</div>
<style>
.pagination span.current {
  background-color: #f2eabf;
  color: #473308;
  display: inline;
  padding: 6px 12px;
  text-decoration: none;
  transition: background-color .3s;
  margin: 0 1px;
}

</style>
<div class="pagination">
<?php wp_pagenavi( array( 'query' => $qa_query ) ); ?>
</div>
</div><!-- end left_content -->

<!-- Get Sidebar -->
<?php get_sidebar('qa'); ?>

</div>
</div>



<?php
    // common area for all sub pages and posts
    get_template_part('parts/list-pages');
    get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
