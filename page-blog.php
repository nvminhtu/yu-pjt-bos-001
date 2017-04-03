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
        <dl class="clearfix">
          <dt><img src="images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <div class="clearfix">
              <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
              <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
            </div>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="images/bloglist/bloglist_simg02.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="images/bloglist/bloglist_simg02.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="images/bloglist/bloglist_simg01.png" alt="" /></dt>
          <dd>
            <h4><a href="bloglist_detail.html">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</a></h4>
            <p class="userinfo"><span><img src="images/bloglist/avatar.jpg" /></span> <span>Marilyn J. Hancock</span></p>
            <p class="dateinfo"><span class="cal">2016.12.03</span> <span class="like">10</span></p>
          </dd>
        </dl>
      </div>
      <div class="pagination"> <a href="#">&laquo;</a> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">&raquo;</a> </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>