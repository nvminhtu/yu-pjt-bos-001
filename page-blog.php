<?php
/**
 * Template Name: Blog
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */
get_header(); ?>
<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
      <div class="big_article clearfix">
        <p class="bigimg"><img src="images/bloglist/bloglist_bigimg.png" alt="" /></p>
        <div class="bigcontent">
          <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
          <h3><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h3>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
        </div>
      </div>
      <div class="news_article clearfix">
        <?php
          // set up or arguments for our custom query
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $query_args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => $paged
          );
          $the_query = new WP_Query( $query_args );
          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
              $author_id = get_the_author_meta('ID');
             
              //$editor_gallery = get_field('profile_picture', 'user_'. $author_id);
              //$editor_avatar_url = $editor_gallery[0]['sizes']['img_author_tiny'];
              $nicename = get_the_author_meta( 'user_nicename', $author_id );
              $thumb = get_post_thumbnail_id();
              $img_blog_list = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_single');
              $img_blog_list_src = $img_blog_list[0];
              $img_blog_list_item = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_list_item');
              $img_blog_list_item_src = $img_blog_list_item[0];
                // run the loop
      ?>
        <dl class="clearfix">
          <dt>
              <?php if(has_post_thumbnail()) { ?>
                <img src="<?php echo $img_blog_list_src; ?>" alt="<?php the_title(); ?>" />
              <?php } else { ?>
                <img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png"  alt="<?php the_title(); ?>" /></p>
              <?php } ?>
          </dt>
          <dd>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <div class="clearfix">
              <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
              <p class="dateinfo"><span class="cal"><?php echo get_the_date('Y.m.d',$post->ID); ?></span> <span class="like"><?php if( function_exists('zilla_likes') ) zilla_likes(); ?></span></p>
            </div>
          </dd>
        </dl>
      <?php endwhile; ?>
      <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

        

      </div>
      <!-- 
      <div class="pagination"> <a href="#">&laquo;</a> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">&raquo;</a> </div> -->
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