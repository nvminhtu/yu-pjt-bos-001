<?php
/**
 * Template Name: Studio
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>

<?php get_template_part('parts/main-visual-sec'); ?>
<?php
    global $post;
    global $wp_query;
    global $numposts;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
  		'post_type' =>'studio',
  		'posts_per_page' => -1,
  		'orderby' => date,
  		'order' => desc,
  		'field' => 'slug',
  		'paged' => $paged
  	);
    $the_query = new WP_Query( $args );
    $number_blogs = $wp_query->found_posts;
  	$blog_posts = get_posts($args);
		if($blog_posts) {
  	$i=1;
    foreach($blog_posts as $post) : setup_postdata($post);
      $map_direction = get_field('map_direction',$post->ID);
      $address = get_field('address',$post->ID);
      $picture = get_field('picture',$post->ID);

      $coordinate = get_post_meta( $post->ID, '_bosty_google_map', true );
      $address_map = $coordinate['address'];
      $latitude = $coordinate['latitude'];
      $longitude = $coordinate['longitude'];
      $mapURL = 'https://www.google.com/maps/place/'.$latitude.','.$longitude;
    ?>
    <section id="section_01" class="section_01">
      <div class="inner">
        <h3 class="title_01">六本木スタジオ</h3>
        <div class="clearfix">
          <div class="section_01_left">
            <div class="map">
              <div class="maparea" data-lat="<?php echo $latitude; ?>" data-long="<?php echo $longitude; ?>">
                  <div id="gmap" style="with:100%; height:320px;border:0;"></div>
              </div>
              <p class="text-right"><a href="<?php echo $mapURL; ?>" target="_blank">Google Mapで見る</a></p>
              <h4>アクセスマップ</h4>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_01.png" /></dt>
                <dd>
                  <?php echo $address; ?>
                </dd>
              </dl>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_02.png" /></dt>
                <dd>
                  <?php echo $map_direction; ?>
                </dd>
              </dl>
            </div>
          </div>
          <div class="section_01_right">
            <ul>
              <li><a data-fancybox="gallery_01" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_01" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_01" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_01" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06.png" alt="スタジオ一覧" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="section_02" class="section_01">
      <div class="inner">
        <h3 class="title_01">恵比寿スタジオ</h3>
        <div class="clearfix">
          <div class="section_01_right">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1146.3212371613788!2d139.7138887166245!3d35.64532264513119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b14fab7655b%3A0x316306eead699300!2s4+Chome-11-8+Ebisu%2C+Shibuya-ku%2C+T%C5%8Dky%C5%8D-to+150-0013%2C+Japan!5e0!3m2!1svi!2s!4v1488558287851" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p class="text-right"><a href="https://www.google.com/maps/place/4+Chome-11-8+Ebisu,+Shibuya-ku,+T%C5%8Dky%C5%8D-to+150-0013,+Japan/@35.6453226,139.7138887,18.5z/data=!4m5!3m4!1s0x60188b14fab7655b:0x316306eead699300!8m2!3d35.6452463!4d139.7146862" target="_blank">Google Mapで見る</a></p>
              <h4>アクセスマップ</h4>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_01.png" /></dt>
                <dd>
                  <p class="text_01">渋谷区恵比寿4-11-8</p>
                  <p class="text_02">グランヌーノ202</p>
                </dd>
              </dl>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_02.png" /></dt>
                <dd>
                  <p class="text_03">
                    山手線「恵比寿」東口より徒歩5分<br>
                    東京メトロ日比谷線「恵比寿」3番出口より徒歩5分
                  </p>
                </dd>
              </dl>
            </div>
          </div>
          <div class="section_01_left">
            <ul>
              <li><a data-fancybox="gallery_02" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_02" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_02" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_02" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06.png" alt="スタジオ一覧" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="section_03" class="section_01">
      <div class="inner">
        <h3 class="title_01">銀座スタジオ</h3>
        <div class="clearfix">
          <div class="section_01_left">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.439785404542!2d139.76127331481882!3d35.66617173840599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bdd5b092aa7%3A0xc5c62a82576b3b37!2zOCBDaG9tZS0xNS02IEdpbnphLCBDaMWrxY0ta3UsIFTFjWt5xY0tdG8gMTA0LTAwNjEsIEphcGFu!5e0!3m2!1svi!2s!4v1488558428022" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p class="text-right"><a href="https://www.google.com/maps/place/8+Chome-15-6+Ginza,+Ch%C5%AB%C5%8D-ku,+T%C5%8Dky%C5%8D-to+104-0061,+Japan/@35.6661717,139.7612733,17z/data=!3m1!4b1!4m5!3m4!1s0x60188bdd5b092aa7:0xc5c62a82576b3b37!8m2!3d35.6661674!4d139.763462" target="_blank">Google Mapで見る</a></p>
              <h4>アクセスマップ</h4>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_01.png" /></dt>
                <dd>
                  <p class="text_01">中央区銀座8-15-6</p>
                  <p class="text_02">クリスタルスクエア銀座 4F</p>
                </dd>
              </dl>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_02.png" /></dt>
                <dd>
                  <p class="text_03">
                    山手線「新橋」汐留口より徒歩5分<br>
                    日比谷線「東銀座」4番出口より徒歩6分<br>
                    大江戸線「汐留」3番出口より徒歩3分
                  </p>
                </dd>
              </dl>
            </div>
          </div>
          <div class="section_01_right">
            <ul>
              <li><a data-fancybox="gallery_03" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_03" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_03" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_03" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06.png" alt="スタジオ一覧" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="section_04" class="section_01">
      <div class="inner">
        <h3 class="title_01">代々木スタジオ</h3>
        <div class="clearfix">
          <div class="section_01_right">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.741670779569!2d139.69885581481938!3d35.68336233746337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ccf574c362f%3A0x71d384219ff53ca7!2s1+Chome-37-7+Yoyogi%2C+Shibuya-ku%2C+T%C5%8Dky%C5%8D-to+151-0053%2C+Japan!5e0!3m2!1svi!2s!4v1488558642655" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
              <p class="text-right"><a href="https://www.google.com/maps/place/1+Chome-37-7+Yoyogi,+Shibuya-ku,+T%C5%8Dky%C5%8D-to+151-0053,+Japan/@35.6833623,139.6988558,17z/data=!3m1!4b1!4m5!3m4!1s0x60188ccf574c362f:0x71d384219ff53ca7!8m2!3d35.683358!4d139.7010445" target="_blank">Google Mapで見る</a></p>
              <h4>アクセスマップ</h4>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_01.png" /></dt>
                <dd>
                  <p class="text_01">渋谷区代々木1-37-7</p>
                  <p class="text_02">SHOW-A Bld304</p>
                </dd>
              </dl>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_02.png" /></dt>
                <dd>
                  <p class="text_03">
                    JR山手線「新宿」南口より徒歩7分<br>
                    JR山手線「代々木」西口より徒歩1分<br>
                    小田急線「南新宿」改札より徒歩4分
                  </p>
                </dd>
              </dl>
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_01.png" /></dt>
                <dd>
                  <p class="text_01">営業時間</p>
                  <p class="text_02">6:00 - 20:00</p>
                </dd>
              </dl>
            </div>
          </div>
          <div class="section_01_left">
            <ul>
              <li><a data-fancybox="gallery_04" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_03.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_04" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_04.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_04" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_05.png" alt="スタジオ一覧" /></a></li>
              <li><a data-fancybox="gallery_04" href="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06_l.png"><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_06.png" alt="スタジオ一覧" /></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
		<?php	$i++;
			endforeach;
    ?>


<?php
      wp_reset_query();
		wp_reset_postdata();
 	}
?>

<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
