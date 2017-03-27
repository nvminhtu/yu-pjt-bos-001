<?php
/**
 * Category of Bosty
 * Bosty theme
 */

get_header(); ?>
<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
      <div class="big_article clearfix">
        <p class="bigimg"><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_bigimg.png" alt="" /></p>
        <div class="bigcontent">
          <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
          <h3><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h3>
          <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
          <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
        </div>
      </div>
      <div class="news_article clearfix">
        <dl class="clearfix">
          <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <div class="clearfix">
              <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
              <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
            </div>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg02.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg02.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="<?php bloginfo('template_url'); ?>/images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
      </div>
      <div class="pagination"> <a href="#">&laquo;</a> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">&raquo;</a> </div>
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
