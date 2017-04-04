
<footer id="footer" class="footer">
  <div class="inner clearfix">
    <div class="f_column_01">
      <ul>
        <li><a href="./">HOME</a></li>
        <li>&nbsp;</li>
        <li><a href="studio.html">スタジオ一覧</a></li>
        <li><a href="price.html">プログラム・料金</a></li>
        <li><a href="feature.html">BOSTYの特徴</a></li>
        <li><a href="qa.html">よくあるご質問</a></li>
      </ul>
    </div>
    <div class="f_column_02">
      <ul>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
        <li><a href="company.html">会社概要</a></li>
        <li><a href="#">お知らせ</a></li>
        <li><a href="contact.html">問い合わせ</a></li>
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
      <p class="btn_02 index_img_13"><a href="contact.html"><img src="<?php bloginfo('template_url'); ?>/images/index_img_13.png">問い合わせはこちら</a></p><br>
    </div>
    <div class="f_column_04">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.6407232018696!2d139.74793133241303!3d35.668350020053715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b924f7c38d5:0xa54fe3fcd884da49!2z5pel5pysLCDjgJIxMDUtMDAwMSDmnbHkuqzpg73muK_ljLromY7jg47ploDvvJHkuIHnm67vvJHvvJbiiJLvvJHvvJEg5qGc5bed44Ki44ON44OD44Kv44K5!5e0!3m2!1sja!2s!4v1487078167072" width="100%" height="204" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="copyright">© BOSTY</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/page-scroller.js" type="text/javascript"></script>
<?php if(is_front_page()||is_home()) { ?>
    <script src="<?php bloginfo('template_url'); ?>/js/jqinstapics.js" type="text/javascript"></script>
<?php } ?>
<?php if(is_page('studio') || is_page('feature')) { ?>
  <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyCIpA4fYWolrgbB6esEOWLDfAYrjg9GoCA&language=ja&region=JP"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/gmaps.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/studio-map.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js" type="text/javascript"></script>
<?php } ?>
<?php if(is_singular( 'post' )) {  // blog only ?>
<script src="<?php bloginfo('template_url'); ?>/js/social-button.js" type="text/javascript"></script>
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/slick.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/heightLine.js" type="text/javascript"></script>
<?php if (is_page( 'contact' )): ?>
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<?php endif ?>

<script src="<?php bloginfo('template_url'); ?>/js/custom.js" type="text/javascript"></script>

<?php if (is_page('contact')) { ?>
  <script type="text/javascript">
  $(function() {
      $('input[name="date_01"]').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
              // format: 'MM/DD/YYYY h:mm A'
              format: 'MM/DD(水) h:mm A'
          }
      });
      $('input[name="date_02"]').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
              // format: 'MM/DD/YYYY h:mm A'
              format: 'MM/DD(水) h:mm A'
          }
      });
      $('input[name="date_03"]').daterangepicker({
          timePicker: true,
          timePickerIncrement: 30,
          locale: {
              // format: 'MM/DD/YYYY h:mm A'
              format: 'MM/DD(水) h:mm A'
          }
      });

  });
  </script>
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
