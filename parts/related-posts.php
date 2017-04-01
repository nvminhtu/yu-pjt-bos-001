<?php
  /**
   * Load Related posts of current post
  */
?>
<!-- start : related_box_out -->
<p class="blogdetail_tit">関連記事</p>
<?php /* <div class="bloglist_box clearfix">
  <div class="box">
    <p><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img02.jpg" /></p>
    <div class="box_inner">
      <p class="tit"><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></p>
      <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
    </div>
  </div>
  <div class="box">
    <p><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img02.jpg" /></p>
    <div class="box_inner">
      <p class="tit"><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></p>
      <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
    </div>
  </div>
</div> ?*/ ?>

<?php
  $id = get_the_ID();
  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
  $query_args = array(
      'post_type' => 'post',
      'post__not_in' => array($id),
      'posts_per_page' => 6,
      'orderby' => date,
      'order' => desc,
      'field' => 'slug'
    );
  $i = 1;
  $the_query = new WP_Query( $query_args );
  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      $time = get_the_date('Y.m.d', $post->ID);
      $title = get_the_title($post->ID);
      $nd = get_the_content();
      $id = get_the_ID();
      $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_index');
      $img_blog_src = $img_blog[0];

      $author_id = $post->post_author;
      $nicename = get_the_author_meta( 'user_nicename' );
      $editor_gallery = get_field('profile_picture', 'user_'. $author_id);
      $editor_avatar_url = $editor_gallery[0]['sizes']['img_author_tiny'];
  ?>

  <?php if($i==1) { // list box display ?>
      <div class="bloglist_box clearfix">
  <?php } ?>
      <div class="box">
        <p><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img02.jpg" /></p>
        <div class="box_inner">
          <p class="tit"><a href="bloglist_detail.html"><?php the_title(); ?></a></p>
          <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
        </div>
      </div>
  <?php if($i==2) { // loop 2 times - then end of box wrap code block ?>
      </div>
  <?php } ?>

  <?php if($i==3) { // list box of column blog list ?>
      <div class="news_article blogdetail_list clearfix">
  <?php } ?>
      <dl class="clearfix">
        <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
        <dd>
          <h4><a href="bloglist_detail.html"><?php the_title(); ?></a></h4>
          <div class="clearfix">
            <p class="dateinfo alg_L"><span class="cal"><?php echo $time; ?></span><span class="like">10</span></p>
          </div>
        </dd>
      </dl>
    <?php if($i==1) { // list box of column blog list ?>
        </div>
    <?php } ?>
  <?php $i++; endwhile; ?>

  <!-- end of the loop -->
<?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
