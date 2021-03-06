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
    <div class="mainvisual_feature">
      <h2>
        <span class="h2_01">はじめよう</span>
        <span class="h2_02">BOSTY</span>
      </h2>
      <p>
        トレーニング経験ゼロから<br>上級者・アスリートまで<br>あなたの目的に合わせて<br>「短期間で叶える」理想のカラダ
      </p>
    </div>
	<?php the_content(); ?>

  <!-- Feature Content -->
  <section id="section_02" class="section_02 editor-feature">
    <div class="inner">
      <div class="list_02">
        <ul class="clearfix">
          <?php $i = 1;
              if( have_rows('feature_items') ): ?>
            <?php while( have_rows('feature_items') ): the_row();
              $feature_title = get_sub_field('feature_title');
              $feature_content = get_sub_field('feature_content');
              $feature_link = get_sub_field('feature_link');
              $feature_link_title = get_sub_field('feature_link_title');

              if($i % 3 == 0 && $i!= 1) {
                $class = "last";
              } else {
                $class = "";
              }
            ?>
            <li class="<?php echo $class; ?>">
              <h3><?php echo $feature_title; ?></h3>
              <p><?php echo $feature_content; ?></p>
                <?php if(isset($feature_link)&&$feature_link!='') { ?>
                  <p><a href="#">
                <?php }
                  if(isset($feature_link_title)&&$feature_link_title!='') {
                    echo $feature_link_title;
                  }
                 if(isset($feature_link)&&$feature_link!='') { ?>
                  </a></p>
                <?php }?>
            </li>
            <?php if($i % 2 == 0) { ?>
              <div class="clearfix tablet"></div>
              <div class="clearfix sp"></div>
            <?php } ?>
            <?php $i++; endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </section>
  <!-- End feature Content -->
  
  <!-- Gallery Section -->
	<section id="section_03" class="section_03">
    <?php 
      // get picture gallery from custom fields
      $title_gallery = get_field('title_gallery');
      $trainer_gallery = get_field('trainer_gallery');

    ?>
		<div class="inner">
      <?php echo $title_gallery; ?>
		</div>
		<div class="out_instagram">
			<div id="instagram" class="clearfix">
        <?php // loop author slider main
            $i = 0;
            if( $trainer_gallery ): 
              foreach( $trainer_gallery as $image ): 
        ?>              
                <div class="slide"><img src="<?php echo $image['sizes']['img_feature_gallery']; ?>" alt="<?php echo $image['alt']; ?>" /></div> 
        <?php  $i++; 
            endforeach; 
          endif; 
          // end loop author thumb
        ?>
			</div><!-- end #instagram -->
		</div>
	</section>
  <!-- End Gallery Section -->
  
  <!-- Trainer Section -->
	<section id="section_04" class="section_04">
		<div class="inner">
    <?php echo $studio_list_title = get_field('studio_list_title'); ?>
			<?php get_template_part('parts/studio-list'); ?>
			<p class="btn_02"><a href="<?php bloginfo('siteurl'); ?>/studio/">スタジオをもっと見る</a></p>
		</div>
	</section>
  <!-- End Studio List -->

	<section id="section_05" class="section_05">
    <?php $trainer_title = get_field('trainer_title'); ?>
		<div class="inner">
			<h2 class="title_01"><?php echo $trainer_title; ?></h2>
			<div class="list_04">
				<ul class="clearfix">
          <?php $i = 1;
              if( have_rows('trainers') ): ?>
            <?php while( have_rows('trainers') ): the_row();
              $trainer_name = get_sub_field('trainer_name');
              $trainer_country = get_sub_field('trainer_country');
              $trainer_university = get_sub_field('trainer_university');
              $trainer_content = get_sub_field('trainer_content');
              $trainer_picture = get_sub_field('trainer_picture');

              if($i % 3 == 0 && $i!= 1) {
                $class = "last";
              } else {
                $class = "";
              }
            ?>
            <li class="<?php echo $class; ?>">
              <img src="<?php echo $trainer_picture; ?>" alt="<?php echo $trainer_name; ?>" />
              <h3><?php echo $trainer_name; ?></h3>
              <dl class="clearfix">
                <dt><img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_12.png" alt="<?php echo $trainer_content; ?>" /></dt>
                <dd><?php echo $trainer_content; ?></dd>
              </dl>
            </li>
            <?php $i++; endwhile; ?>
          <?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
  <!-- End Trainer Section -->
<?php endwhile; // End of the loop. ?>

<?php
  // common area for all sub pages and posts
  get_template_part('parts/list-pages');
  get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>


