<?php
/**
 * Template Name: News
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
        <?php get_template_part('parts/breadcrumbs'); ?>
        <?php
          // set up or arguments for our custom query
          $i = 1;
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $query_args = array(
            'post_type' => 'news',
            'posts_per_page' => 6,
            'paged' => $paged
          );
          $blog_query = new WP_Query( $query_args );
          $number_of_posts = $blog_query->post_count;
          if ( $blog_query->have_posts() ) :
            while ( $blog_query->have_posts() ) : $blog_query->the_post();
              $author_id = get_the_author_meta('ID');
              $firstname = get_the_author_meta( 'user_firstname' );
              $lastname = get_the_author_meta( 'user_lastname' );
  						$fullname = $lastname.' '.$firstname;
              //editor information
              $editor_avatar_url = get_field('user_profile_picture', 'user_'. $author_id);
              $nicename = get_the_author_meta( 'user_nicename', $author_id );
              $thumb = get_post_thumbnail_id();
              $img_blog_list = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_list');
              $img_blog_list_src = $img_blog_list[0];
              $img_blog_list_item = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_list_item');
              $img_blog_list_item_src = $img_blog_list_item[0];
              //run the loop
      ?>
      <?php if($i==1) { ?>
      <div class="big_article clearfix">
        <a href="<?php the_permalink(); ?>">
          <p class="bigimg">
            <?php if(has_post_thumbnail()) { ?>
              <img src="<?php echo $img_blog_list_src; ?>" alt="<?php the_title(); ?>" />
            <?php } else { ?>
              <img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_bigimg.png" alt="<?php the_title(); ?>" />
            <?php } ?>
          </p>
          <div class="bigcontent">
             <h3><?php the_title(); ?></h3>
              <?php
                  //show content limited
                 $content_display = mb_substr(wp_strip_all_tags( get_the_content()), 0, 80 , 'UTF-8');
                 $content_display = apply_filters('the_content', $content_display);
                 $content_display = strip_tags( $content_display, '<p><br/>');
                 $content_length = mb_strlen($content_display);

                 if($content_length > 81) {
                   echo $content_display.' ...';
                 } else {
                   echo $content_display;
                 }
              ?>
            <p class="news_no dateinfo">
              <span class="cal"><?php echo get_the_date('Y.m.d',$post->ID); ?></span>
            </p>
          </div>
        </a>
      </div>
      <?php } else { ?>
      <?php if($i==2) { ?> <div class="news_article clearfix"><?php } ?>
          <a href="<?php the_permalink(); ?>">
            <dl class="clearfix">
              <dt>
                  <?php if(has_post_thumbnail()) { ?>
                    <img src="<?php echo $img_blog_list_item_src; ?>" alt="<?php the_title(); ?>" />
                  <?php } else { ?>
                    <img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png"  alt="<?php the_title(); ?>" /></p>
                  <?php } ?>
              </dt>
              <dd>
                  <h4><?php the_title(); ?></h4>
                  <div class="clearfix">
                    <p class="news_no dateinfo">
                      <span class="cal"><?php echo get_the_date('Y.m.d',$post->ID); ?></span>
                    </p>
                  </div>
              </dd>
            </dl>
          </a>
      <?php if($i==$number_of_posts) { ?></div><?php } ?>
      <?php } //end check not 1 post ?>
      <?php $i++; endwhile; ?>
      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

      <div class="pagination">
        <?php wp_pagenavi( array( 'query' => $blog_query ) ); ?>
      </div>

    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
