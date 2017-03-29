<?php
/**
** List of blogs
** loop n news to index
*/
?>
<div class="section_02_right">
  <div class="title_03">
    <img src="<?php bloginfo('template_url'); ?>/images/index_img_07.png" alt="NEWS お知らせ" />
    <span class="title_03_01">NEWS</span>
    <span class="title_03_02">お知らせ</span>
    <a href="<?php bloginfo('url'); ?>/news/"><img src="<?php bloginfo('template_url'); ?>/images/index_img_08.png" alt="お知らせ一覧へ" width="169" height="28" /></a>
  </div>
  <div class="list_02">
    <?php
        global $post;
        global $wp_query;
        global $numposts;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'news',
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
          $time = get_the_date('Y.m.d D.', $post->ID);
          $nd = get_the_content();
        ?>
        <dl class="clearfix">
          <dt><?php echo $time; ?></dt>
          <dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
        </dl>
        <?php $i++;
             endforeach;
            wp_reset_query();
          wp_reset_postdata();
        }
        ?>
  </div>
  <p class="index_img_09"><a href="https://www.instagram.com/bosty_official/?hl=ja" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/index_img_09.png" alt="Instagram BOSTY公式アカウントをフォロー" /></a></p>
</div>
