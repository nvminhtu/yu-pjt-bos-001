<?php
/**
 * Template Name: Feature
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<?php // Start the loop.
  while ( have_posts() ) : the_post(); ?>
    <div class="mainvisual">
		<p>
			<span>面倒な食事管理もせず、<br>独自の最新トレーニング法で、<br>しっかりあなたの体作りをサポート。</span>
		</p>
		<h2 class="inner">
			<span class="h2_01">あなたの</span>
			<span class="h2_02"><span>体づくり</span>に</span>
			<span class="h2_03"><span>戦略</span>を。</span>
		</h2>
	</div>
	<?php the_content(); ?>
  <!-- Feature Content -->
  <section id="section_02" class="section_02 editor-feature">
    <div class="inner">
      <div class="list_02">
        <ul class="clearfix">
          <?php if( have_rows('feature_items') ): ?>
            <?php while( have_rows('feature_items') ): the_row();
              $feature_title = get_sub_field('feature_title');
              $feature_content = get_sub_field('feature_content');
              $feature_link = get_sub_field('feature_link');
              $feature_link_title = get_sub_field('feature_link_title');
            ?>
            <li>
              <h3><?php echo $feature_title; ?></h3>
              <p><?php echo $feature_content; ?></p>
            </li>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- <li>
            <h3>完全予約制</h3>
            <p>お客様のご都合に合わせてご予約いただきます。</p>
          </li>
          <li>
            <h3>各種レンタル可能</h3>
            <p>レンタルウェア・タオル・アメニティ・水素水などの無料貸与、シャワールーム完備シューズの預かりも可能</p>
          </li>
          <div class="clearfix tablet"></div>
          <div class="clearfix sp"></div>
          <li class="last">
            <h3>プロテイン、サプリメント</h3>
            <p>お客様のトレーニング内容に応じ、プロテイン・サプリメントをご提案しています。自社販売は行っていませんので、安心できる最適な情報をお伝えします。</p>
          </li>
          <li>
            <h3>深夜、早朝対応</h3>
            <p>通勤前や通勤後もご利用いただけるよう、営業時間も柔軟に対応しております。</p>
            <p><a href="#">各スタジオの詳細を確認する</a></p>
          </li>
          <div class="clearfix tablet"></div>
          <div class="clearfix sp"></div>
          <li>
            <h3>便利な支払い方法</h3>
            <p>現金分割払い、各種クレジットカードのご利用が可能です。</p>
          </li>
          <li class="last">
            <h3>アフターフォロー</h3>
            <p>会員様は特別価格でのコース延長が可能です。月1〜2回のビジタートレーニングのご利用も可能です。</p>
          </li> -->
        </ul>
      </div>
    </div>
  </section>
  <!-- End feature Content -->
	<section id="section_03" class="section_03">
		<div class="inner">
			<h2 class="title_01">完全個室</h2>
			<p class="text_02">マンツーマンで集中鍛錬</p>
			<p class="text_01">最新のトレーニングマシンと、業界屈指のプロトレーナーが<br>付きっきりでトレーニングを指導します。</p>
		</div>
		<div class="out_instagram">
			<div id="instagram" class="clearfix">
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_04.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_05.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_06.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_04.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_05.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_06.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_04.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_05.jpg" alt="完全個室" /></div>
				<div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_06.jpg" alt="完全個室" /></div>
			</div>
		</div>
	</section>
  <!-- Studio List -->
	<section id="section_04" class="section_04">
		<div class="inner">
			<h2 class="title_01">好アクセス</h2>
			<p class="text_01">通勤の帰りや、自宅の近くなど、ご自身の生活リズムに合わせて利用しやすい場所に位置しています。<br class="pc">スタジオは現在も各地に拡張中です！</p>
			<?php get_template_part('parts/studio-list'); ?>
			<p class="btn_02"><a href="#">スタジオをもっと見る</a></p>
		</div>
	</section>
  <!-- End Studio List -->

	<section id="section_05" class="section_05">
		<div class="inner">
			<h2 class="title_01">プロトレーナー陣</h2>
			<div class="list_04">
				<ul class="clearfix">
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_07.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_08.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
					<li class="last">
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_09.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_07.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
					<li>
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_08.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
					<li class="last">
						<img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_09.jpg" alt="リンジー　ロジャーソン" />
						<h3>リンジー　ロジャーソン</h3>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_10.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>加国（カナダ）</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_11.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>ブリティッシュコロンビア大学。カナダ第二位。</dd>
						</dl>
						<dl class="clearfix">
							<dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="リンジー　ロジャーソン" /></dt>
							<dd>小、中学生の興味を惹くクリエイティブなコンテンツ作成や、ネイティブならではの自然な英語表現や発音の強化を得意とする。</dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
	</section>
<?php endwhile; // End of the loop. ?>
<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
