
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
  	  <div class="notify-box">
  	  	<h2 class="style_h2">お探しのページは見つかりません。</h2>
	  	<p>お探しのページは一時的にアクセスができない状況にあるか、移動もしくは削除された可能性があります。</p>	
  	  </div>
  </div>
</div>
<?php
      // common area for all sub pages and posts
      get_template_part('parts/list-pages');
      get_template_part('parts/contact-information');
?>

<?php get_footer();?>
