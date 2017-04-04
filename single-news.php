<?php get_header(); ?>
<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
      <?php get_template_part('parts/breadcrumbs'); ?>
      <?php if ( have_posts() ) { ?>
          <?php while ( have_posts() ) {
          		the_post();
              $author_id = get_the_author_meta('ID');
  						$firstname = get_the_author_meta( 'user_firstname' );
              $lastname = get_the_author_meta( 'user_lastname' );
  						$fullname = $lastname.' '.$firstname;

              //editor information
              $editor_avatar_url = get_field('user_profile_picture', 'user_'. $author_id);

              //post thumbnail
              $thumb = get_post_thumbnail_id();
              $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_single');
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
            <?php if(has_post_thumbnail()) { ?>
              <p class="border_img img100"><img src="<?php echo $img_blog_src; ?>" alt="<?php the_title(); ?>" /></p>
            <?php } else { ?>
              <p class="border_img img100"><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_detail_img01.jpg" alt="<?php the_title(); ?>" /></p>
            <?php } ?>
          </div>
          <?php the_content(); ?>
          <div id="social-button2"></div>

          <?php get_template_part('parts/related-news'); ?>
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
