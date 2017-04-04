<?php
/**
 * Template Name: Price
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<?php // Start the loop.
  while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('parts/main-visual-sec');

      $tags = array("<p>", "</p>", "<font>", "</font>");
      // Content break
      $experienced_learning = get_field('experienced_learning');
      $eating_learning = get_field('eating_learning');
      $special_learning = get_field('special_learning');

      // Visitor
      $visitor_course_pic = get_field('visitor_course_pic');
      $visitor_course_description = get_field('visitor_course_description');
      $visitor_course_description = str_replace($tags, "", $visitor_course_description);
      $visitor_course_content = get_field('visitor_course_content');

      // Pair
      $pair_course_pic = get_field('pair_course_pic');
      $pair_course_description = get_field('pair_course_description');
      $pair_course_description = str_replace($tags, "", $pair_course_description);
      $pair_course_content = get_field('pair_course_content');
      // -----------------------------------------------------------------------------

      // 2 Weeks
      $w_course_pic = get_field('w_course_pic');
      $w_course_description = get_field('w_course_description');
      $w_course_description  = str_replace($tags, "", $w_course_description );
      $w_course_content = get_field('w_course_content');

      // 1 month
      $one_month_course_pic = get_field('1month_course_pic');
      $one_month_course_description = get_field('1month_course_description');
      $one_month_course_description  = str_replace($tags, "", $one_month_course_description );
      $one_month_course_content = get_field('1month_course_content');

      // 2 months
      $two_months_course_pic = get_field('2months_course_pic');
      $two_months_course_description = get_field('2months_course_description');
      $two_months_course_description  = str_replace($tags, "", $two_months_course_description );
      $two_months_course_content = get_field('2months_course_content');
      // -----------------------------------------------------------------------------

      // mustle
      $mustle_up_course_pic = get_field('mustle_up_course_pic');
      $mustle_up_course_description = get_field('mustle_up_course_description');
      $mustle_up_course_description  = str_replace($tags, "",  $mustle_up_course_description );
      $mustle_up_course_content = get_field('mustle_up_course_content');

      // Beauty Course
      $beauty_3months_course_pic = get_field('beauty_3months_course_pic');
      $beauty_3months_course_description = get_field('beauty_3months_course_description');
      $beauty_3months_course_description  = str_replace($tags, "",  $beauty_3months_course_description );
      $beauty_3months_course_content = get_field('beauty_3months_course_content');

    ?>
    <section id="section_01" class="section_01">
      <div class="inner">
        <?php echo $experienced_learning; ?>
        <div class="list_01">
          <ul class="clearfix">
            <li>
              <h3 class="clearfix heightLine-a1 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース1" /><span>コース</span><span class="number">1</span>ビジターコース</h3>
              <img src="<?php echo $visitor_course_pic; ?>" alt="ビジターコース" />
              <p class="lineh_01 heightLine-a2 h_resauto"><?php echo $visitor_course_description; ?></p>
              <?php echo $visitor_course_content; ?>
            </li>
            <li>
              <h3 class="clearfix heightLine-a1 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース2" /><span>コース</span><span class="number">2</span>ペアコース</h3>
              <img src="<?php echo $pair_course_pic; ?>" alt="ペアコース" />
              <p class="lineh_01  heightLine-a2 h_resauto"><?php echo $pair_course_description; ?></p>
              <?php echo $pair_course_content; ?>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section id="section_02" class="section_02">
      <div class="inner">
        <?php echo $eating_learning; ?>
        <div class="list_02">
          <ul class="clearfix">
            <li>
              <div class="list_02_inner">
                <h3><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_05.png" alt="コース1" /><span>コース</span><span class="number">1</span>2週間コース</h3>
                <img src="<?php echo $w_course_pic; ?>" alt="コース1 2週間コース" />
                <p class="lineh_02 heightLine-a4 h_resauto02"><?php echo $w_course_description; ?></p>
                <?php echo $w_course_content; ?>
              </div>
            </li>
            <li>
              <div class="list_02_inner">
                <h3><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_05.png" alt="コース2" /><span>コース</span><span class="number">2</span>1ヶ月コース</h3>
                <img src="<?php echo $one_month_course_pic; ?>" alt="コース2 1ヶ月コース" />
                <p class="lineh_02 heightLine-a4 h_resauto02"><?php echo $one_month_course_description; ?></p><?php echo $one_month_course_content; ?>
              </div>
            </li>
            <li>
              <div class="list_02_inner">
                <h3><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_05.png" alt="コース3" /><span>コース</span><span class="number">3</span>2ヶ月コース</h3>
                <img src="<?php echo $two_months_course_pic; ?>" alt="コース3 2ヶ月コース" />
                <p class="lineh_02 heightLine-a4 h_resauto02"><?php echo $two_months_course_description; ?></p>
                <?php echo $two_months_course_content; ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section id="section_03" class="section_03">
      <div class="inner">
        <?php echo $special_learning; ?>
      </div>
      <div class="inner list_01">
        <ul class="clearfix">
          <li>
            <h3 class="clearfix heightLine-a6 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース1" /><span>コース</span><span class="number">1</span>筋力アップ 3ヶ月コース</h3>
            <img src="<?php echo $mustle_up_course_pic; ?>" alt="ビジターコース" />
            <p class="lineh_03  heightLine-a7 h_resauto"><?php echo $mustle_up_course_description; ?></p>
            <?php echo $mustle_up_course_content; ?>
          </li>
          <li>
            <h3 class="clearfix heightLine-a6 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース2" /><span>コース</span><span class="number">2</span>美BOSY 3ヶ月コース</h3>
            <img src="<?php echo $beauty_3months_course_pic; ?>" alt="ペアコース" />
            <p class="lineh_03  heightLine-a7 h_resauto"><?php echo $beauty_3months_course_description; ?></p>
            <?php echo $beauty_3months_course_content; ?>
          </li>
        </ul>
      </div>
    </section>
    <section id="section_04" class="section_04">
      <div class="inner">
        <?php the_content(); ?>
      </div>
    </section>
<?php endwhile; // End of the loop. ?>
<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
