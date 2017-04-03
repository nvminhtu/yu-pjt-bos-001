<?php
  /*****
  ***** Sidebar for all sub and under pages
  *****/
?>
<div class="right_navi">
  <div class="nav01">
    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
</div>
  <div id="side">
    <div class="nav_fb">
      <div class="fb-page" data-href="https://www.facebook.com/bosty.jp/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/bosty.jp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bosty.jp/">BOSTY -  ボスティ</a></blockquote>
      </div>
    </div>
    <div class="nav02">
      <p class="nav02_tit">話題のキーワード<br />
        <span>注目されている言葉</span></p>
      <ul>
        <li><a href="">手帳</a></li>
        <li><a href="">クリスマスコフレ</a></li>
        <li><a href="">バケツ型バック</a></li>
        <li><a href="">コート</a></li>
        <li><a href="">手帳</a></li>
        <li><a href="">クリスマスコフレ</a></li>
        <li><a href="">バケツ型バック</a></li>
        <li><a href="">コート</a></li>
      </ul>
    </div>
  </div>
  <div id="navi" class="navi clearfix">
    <?php dynamic_sidebar( 'Sidebar Widget Top' ); ?>
    <div id="s_navi">
    	<?php dynamic_sidebar( 'Sidebar Widget Bottom' ); ?>
    </div>
  <!-- end : #navi --> </div>
</div>
