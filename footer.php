<!-- sticky btn -->
<div id="sticky_menu_footer">
  <ul>
    <li><a href="<?php bloginfo('siteurl'); ?>/contact/"><img src="<?php bloginfo('template_url'); ?>/images/sticky_bn02.png" alt="Contact"></a></li>
    <li><a href="tel:0362058288"><img src="<?php bloginfo('template_url'); ?>/images/sticky_bn01.png" alt="Tel: 0362058288"></a></li>
  </ul>
</div>
<!-- //sticky btn -->

<footer id="footer" class="footer">
  <div class="inner clearfix">
    <p class="f_logo"><img src="<?php bloginfo('template_url'); ?>/images/f_logo.png" alt="BOSTY"></p>
    <div class="f_column_menu clearfix">
      <ul>
        <li><a href="./">HOME</a></li>
        <li><a href="studio.html">スタジオ一覧</a></li>
      </ul>
      <ul>
        <li><a href="price.html">プログラム・料金</a></li>
        <li><a href="feature.html">BOSTYの特徴</a></li>
      </ul>
      <ul>
        <li><a href="company.html">会社概要</a></li>
        <li><a href="qa.html">よくあるご質問</a></li>
      </ul>
      <ul>
        <li><a href="#">お知らせ</a></li>
        <li><a href="contact.html">問い合わせ</a></li>
      </ul>
    </div>
  </div>
  <div class="copyright">© BOSTY</div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.bxslider.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.bxslider').bxSlider({
    			auto: true,
    			controls: false,
    			pager:false,
    			mode:'fade',
    			responsive: true,
    		  pause: 6500,
     	    speed:1500
    		});
  });
</script>
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
<?php } else { ?>
<script src="<?php bloginfo('template_url'); ?>/js/wpscript-customize.js" type="text/javascript"></script>
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.equalColumn.js" type="text/javascript"></script>
<?php if (is_page('price')) { ?>
<script src="<?php bloginfo('template_url'); ?>/js/price.js" type="text/javascript"></script>
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
