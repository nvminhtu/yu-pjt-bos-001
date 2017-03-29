<?php
/**
** List of blogs
** loop n blog posts to index
*/
?>
<section id="section_01" class="section_01 clearfix">
  <div class="inner clearfix">
    <h2 class="title_01">BLOG<span>ブログ</span></h2>
    <ul class="index-blog-slick list_01 clearfix">
      <?php
          global $post;
          global $wp_query;
          global $numposts;
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => date,
            'order' => desc,
            'paged' => $paged
          );
          $the_query = new WP_Query( $args );
          $number_blogs = $wp_query->found_posts;
          $blog_posts = get_posts($args);
          if($blog_posts) {
          $i=1;
          foreach($blog_posts as $post) : setup_postdata($post);
            $thumb = get_post_thumbnail_id();
            $img_blog = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_index');
            $img_blog_src = $img_blog[0];

            $time = get_the_date('Y.m.d', $post->ID);
            $nd = get_the_content();
            $id = get_the_ID();
            $author_id = $post->post_author;
            $nicename = get_the_author_meta( 'user_nicename' );

          ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) { ?>
                <img src="<?php echo $img_blog_src; ?>" alt="<?php the_title(); ?>" />
              <?php } else { ?>
                <img src="<?php bloginfo('template_url'); ?>/images/index_img_04.jpg" alt="<?php the_title(); ?>" />
              <?php } ?>
              <h3 class="title_02"><?php the_title(); ?></h3>
              <p class="meta"><?php echo $time; ?> ダイエット, 腹筋</p>
            </a>
          </li>
          <?php $i++;
               endforeach;
              wp_reset_query();
            wp_reset_postdata();
          }
          ?>
    </ul>
    <p class="btn_02 index_img_06"><a href="<?php bloginfo('url'); ?>/blog/">もっと見る</a></p>
  </div>
</section>
