<?php
/**
 * @package WordPress
 * @subpackage Bosty.JP
 * @since Bosty.JP
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
	<div class="mainvisual">
			<ul class="bxslider">
				<li>
					<span class="pc02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual_pc.jpg" /></span>
					<span class="tb02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual_tb.jpg" /></span>
					<span class="sp02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual_sp.jpg" /></span>
				</li>
				<li>
					<span class="pc02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual02_pc.jpg" /></span>
					<span class="tb02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual02_tb.jpg" /></span>
					<span class="sp02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual02_sp.jpg" /></span>
				</li>
				<li>
					<span class="pc02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual03_pc.jpg" /></span>
					<span class="tb02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual03_tb.jpg" /></span>
					<span class="sp02"><img src="<?php bloginfo('template_url'); ?>/images/top/mainvisual03_sp.jpg" /></span>
				</li>
			</ul>
		 <h2> <span class="main_text_01"><span>はじめようBOSTY</span></span> <span class="main_text_02">BOSTYだから、<br>
		    短期間で手に入れることができる、</span> <span class="main_text_03">夢のボディライン</span> </h2>
		  <p class="btn"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/top/mainimg_btn.png" alt="詳しくはこちら" /></a></p>
		</div>

	<!-- main start -->
	<div class="div_01">
	  <div class="inner clearfix">
			<a href="<?php bloginfo('siteurl'); ?>/studio/" class="index_img_01">
	    	<p><span>Studio</span>スタジオ一覧</p>
	    </a>
			<a href="<?php bloginfo('siteurl'); ?>/price/" class="index_img_02">
	    	<p><span>Program</span>プログラム・料金</p>
	    </a>
		</div>
	</div>

	<?php get_template_part('parts/index-blog-loop'); ?>

	<section id="section_02" class="section_02 clearfix">
		<div class="inner clearfix">
			<?php //section_02_left ?>
			<div class="section_02_left">
				<div id="fb-root"></div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.8&appId=227801717272826";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-page" data-href="https://www.facebook.com/bosty.jp/" data-tabs="timeline" data-width="497" data-height="634" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bosty.jp/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bosty.jp/">BOSTY -  ボスティ</a></blockquote></div>
			</div>

			<?php //section_02_right
					get_template_part('parts/index-news-loop');
			?>
		</div>
	</section>
	<section id="section_03" class="section_03 clearfix">
		<div class="inner">
			<h2 class="title_01">Gallery<span>ギャラリー</span></h2>
		</div>
		<?php get_template_part('parts/instagram'); ?>
	</section>
	<!--<section id="section_04" class="section_04">
		<div class="inner clearfix">
			<div class="section_04_left">
				<h2>タイトルが入ります。タイトルが入ります。</h2>
			</div>
			<div class="section_04_right">
				<img src="<?php //bloginfo('template_url'); ?>/images/index_img_11.png" alt="タイトルが入ります。タイトルが入ります。" />
			</div>
			<div class="section_04_left">
				<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
			</div>
		</div>
	</section>-->
	<section id="section_05" class="section_05">
		<div class="inner">
			<img src="<?php bloginfo('template_url'); ?>/images/index_img_12.png" alt="まずはお気軽に体験レッスンから" class="pc" />
			<img src="<?php bloginfo('template_url'); ?>/images/index_img_12_tablet.png" alt="まずはお気軽に体験レッスンから" class="tablet" />
			<img src="<?php bloginfo('template_url'); ?>/images/index_img_12_sp.png" alt="まずはお気軽に体験レッスンから" class="sp" />
			<div class="section_05_01">まずはお気軽に<span>体験レッスン</span>から</div>
			<p class="btn_04">
				<a href="http://www.bosty.co.jp/" target="_blank">
					<span class="btn_04_01">24時間<br>受付可能</span>
					<span class="btn_04_02">Webでご予約</span>
				</a>
			</p>
			<div class="section_05_02">
				<span><a href="tel:0362058288">03-6205-8288</a></span>
				年中無休
			</div>
		</div>
	</section>


<?php get_footer();?>
