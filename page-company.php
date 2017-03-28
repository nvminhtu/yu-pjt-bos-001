<?php
/**
 * Template Name: Company
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
  <div class="com_mainvisual">
    <div class="inner">
      <h2><span>運営会社について</span></h2>
    </div>
  </div>
  <section class="section_01">
      <h3 class="title_01">メディア掲載</h3>


    <div class="magazin_sl">
      <div class="slide">
        <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/company/company_sl_img01.jpg" alt="" />
        <p class="sl_tit">TBS「王様のブランチ」 </p>
        <p class="sl_date">2016年11月23日放映</p></a>
      </div>

      <div class="slide">
        <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/company/company_sl_img01.jpg" alt="" />
        <p class="sl_tit">TBS「王様のブランチ」 </p>
        <p class="sl_date">2016年11月23日放映</p></a>
      </div>

      <div class="slide">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/company/company_sl_img01.jpg" alt="" />
        <p class="sl_tit">TBS「王様のブランチ」 </p>
        <p class="sl_date">2016年11月23日放映</p></a>
      </div>

      <div class="slide">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/company/company_sl_img01.jpg" alt="" />
        <p class="sl_tit">TBS「王様のブランチ」 </p>
        <p class="sl_date">2016年11月23日放映</p></a>
      </div>

      <div class="slide">
        <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/company/company_sl_img01.jpg" alt="" />
        <p class="sl_tit">TBS「王様のブランチ」 </p>
        <p class="sl_date">2016年11月23日放映</p></a>
      </div>

    </div>


  </section>
  <section class="section_02">
      <div class="inner">
          <h3 class="title_01">メッセージ</h3>
        <p class="info_txt">エベレストは子供たちの将来、ひいては日本の将来のことをを真剣に考えています。<br />
      英語が必須とされてきている中で、学校教育は20年以上変わっていません。<br />
      だからこそ、未来を変えるためには、子供たちとその両親、英語を教える人、
      すべての人たちが真剣に向き合わなければ変えることはできないと考えます。<br />
      つらいときも、投げ出したくなる時もあるでしょう。でも、英語を身につけた先には、
      身につけた人にしか見えない景色が世界が広がっている。<br />
      エベレストはあきらめない。子どもたちの将来が大きく広がることを信じて。<br />
      <span class="company_bigtxt">世界が舞台のキミたちを、 応援しよう、全力で。 </span></p>


      <h4 class="com_logo"><img src="<?php bloginfo('template_url'); ?>/images/company/com_logo.jpg" alt="BOSTY" /></h4>
      <table class="common_tbl">
        <tbody>
          <tr>
            <th>法人名</th>
            <td>BOSTY 株式会社</td>
          </tr>
          <tr>
            <th>会社所在地</th>
            <td>港区虎ノ門１－１６－１１桜川アネックス４F<br />
            <span class="tbl_bn"><a href="#">アクセスマップ</a></span></td>
          </tr>
          <tr>
            <th>代表取締役 社長</th>
            <td>林　鉄太郎</td>
          </tr>
          <tr>
            <th>代表取締役<br />代表トレーナー</th>
            <td>阿部　一仁 </td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>2,000万円</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>パーソナルトレーニングジム運営<br />
            パーソナルトレーナーの育成及びFC運営<br />
            ＷＥＢを使ったダイエットプログラムの企画・開発<br />食事による健康推進事業</td>
          </tr>
          <tr>
            <th>連絡先</th>
            <td><span class="tbl_tel">03-6820-9701</span></td>
          </tr>
        </tbody>
      </table>
      </div>
  </section>

  <?php
        // common area for all sub pages and posts
        get_template_part('parts/list-pages');
        get_template_part('parts/contact-information');
  ?>
<?php get_footer(); ?>
