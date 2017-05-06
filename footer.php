
<footer id="footer" class="footer">
  <div class="inner clearfix">
    <div class="f_column_01">
      <ul>
        <li><a href="<?php bloginfo('siteurl'); ?>">HOME</a></li>
        <li>&nbsp;</li>
        <li><a href="<?php bloginfo('siteurl'); ?>/studio/">スタジオ一覧</a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/price/">プログラム・料金</a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/feature/">BOSTYの特徴</a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/qa/">よくあるご質問</a></li>
      </ul>
    </div>
    <div class="f_column_02">
      <ul>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li><a href="<?php bloginfo('siteurl'); ?>/company/">会社概要</a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/news/">お知らせ</a></li>
        <li><a href="<?php bloginfo('siteurl'); ?>/contact/">問い合わせ</a></li>
      </ul>
    </div>
    <div class="f_column_03">
      <p class="f_logo"><img src="<?php bloginfo('template_url'); ?>/images/f_logo.png" alt="BOSTY"></p>
      <dl class="clearfix">
        <dt><img src="<?php bloginfo('template_url'); ?>/images/f_ico_01.png"></dt>
        <dd>〒105-0001<br>東京都港区虎ノ門1-16-11 桜川アネックス4F</dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php bloginfo('template_url'); ?>/images/f_ico_02.png"></dt>
        <dd><a href="tel:0362058288">03-6205-8288</a></dd>
      </dl>
      <p class="btn_02 index_img_13"><a href="<?php bloginfo('siteurl'); ?>/contact/"><img src="<?php bloginfo('template_url'); ?>/images/index_img_13.png">問い合わせはこちら</a></p><br>
    </div>
    <div class="f_column_04">
      <div class="map_footer_area">
          <div id="map_footer" data-lat="35.668235" data-long="139.749057" style="with:100%; height:204px;border:0;"></div>
          <span class="map_place_name" data-content="桜川アネックス"></span>
          <span class="map_place_address" data-content=""></span>
      </div>
    </div>
  </div>
  <div class="copyright">© BOSTY</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true&key=AIzaSyCIpA4fYWolrgbB6esEOWLDfAYrjg9GoCA&language=ja&region=JP"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/gmaps.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/page-scroller.js" type="text/javascript"></script>
<?php if(is_front_page()||is_home()) { ?>
    <script src="<?php bloginfo('template_url'); ?>/js/jqinstapics.js" type="text/javascript"></script>
<?php } ?>
<?php if(is_page('studio') || is_page('feature')) { ?>
  <script src="<?php bloginfo('template_url'); ?>/js/studio-map.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js" type="text/javascript"></script>
<?php } ?>
<?php if(is_singular( 'post' )) {  // blog only ?>
<script src="<?php bloginfo('template_url'); ?>/js/social-button.js" type="text/javascript"></script>
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/heightLine.js" type="text/javascript"></script>
<?php if (is_page( 'contact' )): ?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.ui.datepicker-ja.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/datetimepicker.js"></script>
<?php endif ?>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/map-footer.js" type="text/javascript"></script>
<?php if (is_home() || is_front_page()) { ?>
<script src="<?php bloginfo('template_url'); ?>/js/instagram.js" type="text/javascript"></script>
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.equalColumn.js" type="text/javascript"></script>
<?php if (is_page('price')) { ?>
<script type="text/javascript">
  $( document ).ready(function() {
     var items_per_rows = $('#dataprice_3').data('rows');
     $('#dataprice_3').equalColumn({
         rows: items_per_rows
     });
   });
</script>
<?php } ?>
<?php if (is_page('confirmation')) { ?>

<?php
    $checkConfirm = $_COOKIE["cf7msm_posted_data"];
    if($checkConfirm == "")
    {
        $contactURL = home_url()."/contact";
        ?>
        <script>
          window.location.href = "<?php echo $contactURL; ?>";
        </script>
        <?php
    }
 ?>


  <?php } ?>

<?php if(is_page('confirmation')) { ?>
  <script type="text/javascript">
    // event for close button of FORM
    jQuery(document).ready(function($) {
      $('#btn_close_popup_area').click(function(e) {
          window.location = "<?php echo home_url(); ?>/contact";
        });
    });
  </script>
<?php } ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php wp_footer(); ?>
</body>
</html>
