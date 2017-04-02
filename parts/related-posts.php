<?php
  /**
   * Load Related posts of current post
  */
?>
<!-- start : related_box_out -->
<p class="blogdetail_tit">関連記事</p>
<?php
  $id = get_the_ID();
  $no_query = 6;
  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
  $query_args = array(
      'post_type' => 'post',
      'post__not_in' => array($id),
      'posts_per_page' => $no_query,
      'orderby' => date,
      'order' => desc,
      'field' => 'slug'
    );

  $i = 1;
  $the_query = new WP_Query( $query_args );
  $number_of_posts = $the_query->post_count;

  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
      $time = get_the_date('Y.m.d', $post->ID);
      $title = get_the_title($post->ID);
      $nd = get_the_content();
      $id = get_the_ID();
      
      $img_blog_small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_related_blog_small');
      $img_blog_small_src = $img_blog_small[0];

      $img_blog_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_related_blog_large');
      $img_blog_large_src = $img_blog_large[0];
      
      $author_id = $post->post_author;
      $nicename = get_the_author_meta( 'user_nicename' );
      $editor_gallery = get_field('profile_picture', 'user_'. $author_id);
      $editor_avatar_url = $editor_gallery[0]['sizes']['img_author_tiny'];
  ?>

  <?php if($i==1) { // list box display ?>
      <div class="bloglist_box clearfix">
  <?php } ?>
  <?php if($i==3) { // list box of column blog list ?>
      <div class="news_article blogdetail_list clearfix">
  <?php } ?>

  <?php if($i<3) { ?>
    <div class="box">
      <p>
        <?php if ( has_post_thumbnail($post->ID) ) { ?>
          <img src="<?php echo $img_blog_large_src; ?>" alt="<?php echo get_the_title($post->ID); ?>" alt="<?php echo $title; ?>" />
        <?php } else { ?>
          <img src="<?php echo get_bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img02.jpg" alt="<?php echo $title; ?>">
        <?php } ?>
      <div class="box_inner">
        <p class="tit"><a href="bloglist_detail.html"><?php the_title(); ?></a></p>
        <p class="dateinfo"><span class="cal"><?php echo $time; ?></span> <span class="like">10</span></p>
      </div>
    </div>
  <?php } else { ?>
    <dl class="clearfix">
      <dt>
        <?php if ( has_post_thumbnail($post->ID) ) { ?>
          <img src="<?php echo $img_blog_large_src; ?>" alt="<?php echo get_the_title($post->ID); ?>" alt="<?php echo $title; ?>" />
        <?php } else { ?>
          <img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="<?php echo $title; ?>" />
        <?php } ?>
      </dt>
      <dd>
        <h4><a href="bloglist_detail.html"><?php the_title(); ?></a></h4>
        <div class="clearfix">
          <p class="dateinfo alg_L"><span class="cal"><?php echo $time; ?></span><span class="like">10</span></p>
        </div>
      </dd>
    </dl>
  <?php }?>

  <?php if($i==2 || ($i > 2 && $i == $number_of_posts) ) { // loop 2 times - then end of box wrap code block ?>
      </div>
  <?php } ?>

  <?php $i++; endwhile; ?>

  <!-- end of the loop -->
<?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
