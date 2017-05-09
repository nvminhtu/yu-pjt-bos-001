
<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @subpackage Bosty
 * @since Bosty 1.0
 */
get_header();?>
<div class="main">
  <div class="inner clearfix">
      <h2 class="style_h2">申し訳ありませんが、探しているページが見つかりません。</h2>
  </div>
</div>

<?php
      // common area for all sub pages and posts
      get_template_part('parts/list-pages');
      get_template_part('parts/contact-information');
?>

<?php get_footer();?>
