<?php get_header(); ?>
<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
      <?php if ( have_posts() ) { ?>
        <p class="topicpath"><a href="./">HOME</a> &gt; タイトルが入ります。</p>
         <?php while ( have_posts() ) {
          		the_post();
              $author_id = get_the_author_meta('ID');
  						$firstname = get_the_author_meta( 'user_firstname' );
              $lastname = get_the_author_meta( 'user_lastname' );
  						$fullname = $lastname.' '.$firstname;

              //editor information
              //$editor_gallery = get_field('profile_picture', 'user_'. $author_id);
  						//$editor_avatar_url = $editor_gallery[0]['sizes']['img_avatar'];
              //post thumbnail
              $thumb = get_post_thumbnail_id();
              $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_thumbnail');
              $img_blog_src = $img_blog[0];
              $img_blog_w = $img_blog[1];
              $img_blog_h = $img_blog[2];
              $time = get_the_date('Y.m.d', $post->ID);
              $img_caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
              $img_refer_url = get_post(get_post_thumbnail_id($post->ID))->post_content;
          ?>
          <div class="blogdetail_date clearfix">
            <p class="date"><span class="cal"><?php echo $time; ?></span></p>
            <div id="social-button1"></div>
          </div>

          <h2 class="style_h2"><?php the_title(); ?></h2>
          <div class="c_section">
            <p class="border_img img100"><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img01.jpg" /></p>
          </div>

          <h3 class="style_h3">h3 が入ります。 h3 が入ります。h3 が入ります。h3 が入ります。</h3>
          <div class="c_section">
            <h4 class="style_h4">h4が入ります。 </h4>
            <h5 class="style_h5">h5が入ります。 </h5>
            <h6 class="style_h6">h6が入ります。 </h6>
            <ul class="style_list">
              <li>テキストが入ります。テキストが入ります。</li>
              <li>テキストが入ります。テキストが入ります。</li>
              <li>テキストが入ります。テキストが入ります。</li>
              <li>テキストが入ります。</li>
              <li>テキストが入ります。</li>
            </ul>
          </div>

          <!-- <div class="social02"><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_social02.jpg" /></div> -->
          <div id="social-button2"></div>
          <p class="blogdetail_tit">関連記事</p>
          <div class="bloglist_box clearfix">
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
          </div>
          <div class="news_article blogdetail_list clearfix">
            <dl class="clearfix">
              <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
              <dd>
                <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
                <div class="clearfix">
                  <p class="dateinfo alg_L"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
                </div>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg02.png" alt="" /></dt>
              <dd>
                <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
                <p class="dateinfo alg_L"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
              <dd>
                <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
                <div class="clearfix">
                  <p class="dateinfo alg_L"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
                </div>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg02.png" alt="" /></dt>
              <dd>
                <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
                <p class="dateinfo alg_L"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
              </dd>
            </dl>
          </div>
        <?php } // end while
        } // end if
      ?>
    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php
      // common area for all sub pages and posts
      get_template_part('parts/list-pages');
      get_template_part('parts/contact-information');
?>

<?php get_footer();?>
