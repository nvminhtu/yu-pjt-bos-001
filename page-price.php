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
      $special_learning = get_field('special_learning');
      // -----------------------------------------------------------------------------
    ?>
    <section id="section_01" class="section_01">
      <div class="inner">
        <?php
          $experienced_learning = get_field('experienced_learning');
          $experienced_learning_description = get_field('experienced_learning_description');
          $experienced_learning_content = get_field('experienced_learning_content');
        ?>
        <h2 class="title_01"><?php echo $experienced_learning; ?><span><?php echo $experienced_learning_description; ?></span></h2>
        <p class="text_01"><?php echo strip_tags($experienced_learning_content,'<br>,<br />'); ?></p>
        <?php
            $i= 1;
            $class_row = "";
            $count_rows = count( get_field('course_information') );
            if( have_rows('course_information') ):
              if($count_rows % 2 == 0 ) {
                $class_row = "list_01";
              } else {
                $class_row = "list_02";
              }
        ?>
        <div class="<?php echo $class_row; ?>">
          <ul class="clearfix">
          <?php while( have_rows('course_information') ): the_row();
            $course_title = get_sub_field('course_title');
            $course_description = get_sub_field('course_description');
            $course_content = get_sub_field('course_content');
            $course_content_table = get_sub_field('course_content_table');
            $course_picture_id = get_sub_field('course_picture');
            $course_picture_src = wp_get_attachment_image_src( $course_picture_id, 'img_price_col3');
          ?>
          <li>
            <h3 class="clearfix heightLine-a1 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース1" /><span>コース</span><span class="number"><?php echo $i; ?></span><?php echo $course_title; ?></h3>
            <img src="<?php echo $course_picture_src[0]; ?>" alt="<?php echo $course_title; ?>" />
            <p class="lineh_01 heightLine-a9 h_resauto"><?php echo strip_tags($course_description,'<br>,<br />'); ?></p>
            <?php
              $j = 0;
              while( have_rows('course_content_table') ): the_row();
                $course_table_membership = get_sub_field('course_table_membership');
                $course_table_membership_description = get_sub_field('course_table_membership_description');
                $course_table_price = get_sub_field('course_table_price');
                $course_table_price_description = get_sub_field('course_table_price_description');
                $course_table_bottom = get_sub_field('course_table_bottom');
            ?>
            <table class="table_01 heightLine-a3 h_resauto">
              <tbody>
                <tr>
                  <th>入会金</th>
                  <td><?php echo $course_table_membership; ?><?php if($course_table_membership_description!='') { ?><span><?php echo $course_table_membership_description; ?></span><?php } ?></td>
                </tr>
                <tr>
                  <th>コース料金</th>
                  <td><?php echo $course_table_price; ?><span><?php echo $course_table_price_description; ?></span></td>
                </tr>
              </tbody>
            </table>
            <p class="note"><?php echo strip_tags($course_table_bottom); ?></p>
            <?php $j++; endwhile; ?>
          </li>
          <?php $i++; endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>

      </div>
    </section>

    <section id="section_02" class="section_02">
      <div class="inner">
        <?php
          $eating_learning = get_field('eating_learning');
          $eating_learning_description = get_field('eating_learning_description');
          $eating_learning_content = get_field('eating_learning_content');
        ?>
        <h2 class="title_01"><?php echo $eating_learning; ?><span><?php echo $eating_learning_description; ?></span></h2>
        <p class="text_01"><?php echo strip_tags($eating_learning_content,'<br>,<br />'); ?></p>
        <?php
          $i = 1;
          if( have_rows('course_information_section2') ):
        ?>
        <div class="list_02">
          <ul class="clearfix">
          <?php while( have_rows('course_information_section2') ): the_row();
            $course_title = get_sub_field('course_title');
            $course_description = get_sub_field('course_description');
            $course_picture_id = get_sub_field('course_picture');
            $course_picture_src = wp_get_attachment_image_src( $course_picture_id, 'img_price_col2_sec2');
          ?>
            <li>
              <div class="list_02_inner">
                <h3><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_05.png" alt="コース<?php echo $i; ?>" /><span>コース</span><span class="number"><?php echo $i; ?></span><?php echo $course_title; ?></h3>
                <img src="<?php echo $course_picture_src[0]; ?>" alt="<?php echo $course_title; ?>" />
                <p class="lineh_02 heightLine-a4 h_resauto02"><?php echo strip_tags($course_description,'<br>,<br />'); ?></p>
                <?php
                  $j = 0;
                  while( have_rows('course_content_table') ): the_row();
                    $course_table_membership = get_sub_field('course_table_membership');
                    $course_table_membership_description = get_sub_field('course_table_membership_description');
                    $course_table_price = get_sub_field('course_table_price');
                    $course_table_price_description = get_sub_field('course_table_price_description');
                ?>
                <table class="table_02 heightLine-a5 h_resauto02">
                  <tbody>
                    <tr>
                      <th>入会金</th>
                      <td><?php echo $course_table_membership; ?><?php if($course_table_membership_description!='') { ?><span><?php echo $course_table_membership_description; ?></span><?php } ?></td>
                    </tr>
                    <tr>
                      <th>コース料金</th>
                      <td><?php echo $course_table_price; ?><span><?php echo $course_table_price_description; ?></span></td>
                    </tr>
                  </tbody>
                </table>
                <?php $j++; endwhile; ?>
              </div>
            </li>
          <?php $i++; endwhile; ?>

          </ul>
        </div>
        <?php endif; ?>
      </div>

    </section>
    <section id="section_03" class="section_03">
      <div class="inner">
        <?php
          $special_learning = get_field('special_learning');
          $special_learning_description = get_field('special_learning_description');
          $special_learning_content = get_field('special_learning_content');
        ?>
        <h2 class="title_01"><?php echo $special_learning; ?><span><?php echo $special_learning_description; ?></span></h2>
        <p class="text_01"><?php echo strip_tags($special_learning_content,'<br>,<br />'); ?></p>
      </div>
      <?php
          $i = 1;
          if( have_rows('course_information_sec3') ):
        ?>
      <div class="inner list_01">
        <ul class="clearfix">
          <?php while( have_rows('course_information_sec3') ): the_row();
            $course_title = get_sub_field('course_title');
            $course_description = get_sub_field('course_description');
            $course_picture_id = get_sub_field('course_picture');
            $course_picture_src = wp_get_attachment_image_src( $course_picture_id, 'img_price_col2');
          ?>
          <li>
            <h3 class="clearfix heightLine-a6 h_resauto"><img src="<?php bloginfo('template_url'); ?>/images/price/price_img_01.png" alt="コース<?php echo $i; ?>" /><span>コース</span><span class="number"><?php echo $i; ?></span></span><?php echo $course_title; ?></h3>
            <img src="<?php echo $course_picture_src[0]; ?>" alt="<?php echo $course_title; ?>" />
            <p class="lineh_03 heightLine-a7 h_resauto"><?php echo strip_tags($course_description,'<br>,<br />'); ?></p>
            <?php
              $j = 0;
              while( have_rows('course_content_table') ): the_row();
                $course_table_membership = get_sub_field('course_table_membership');
                $course_table_membership_description = get_sub_field('course_table_membership_description');
                $course_table_price = get_sub_field('course_table_price');
                $course_table_price_description = get_sub_field('course_table_price_description');
                $course_table_bottom = get_sub_field('course_table_bottom');
            ?>
            <table class="table_01 heightLine-a8 h_resauto">
              <tbody>
                <tr>
                  <th>入会金</th>
                  <td><?php echo $course_table_membership; ?><?php if($course_table_membership_description!='') { ?><span><?php echo $course_table_membership_description; ?></span><?php } ?></td>
                </tr>
                <tr>
                  <th>コース料金</th>
                  <td><?php echo $course_table_price; ?><span><?php echo $course_table_price_description; ?></span></td>
                </tr>
              </tbody>
            </table>
            <p class="bottom"><?php echo strip_tags($course_table_bottom); ?></p>
            <?php $j++; endwhile; ?>
          </li>

           <?php $i++; endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>
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
