<?php
/**
 * Template Name: Company
 * @package WordPress
 * @subpackage Bosty
 * @since Bosty
 * Content will be gotten from admin editor
 */ ?>
<?php get_header(); ?>
<?php // Start the loop.
  while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('parts/main-visual-sec'); ?>
  <section class="section_01">
    <h3 class="title_01">メディア掲載</h3>
    <div class="magazin_sl">
      <?php if( have_rows('media_group') ): ?>
        <?php while( have_rows('media_group') ): the_row();
          $media_link = get_sub_field('media_link');
          $media_pic = get_sub_field('media_pic');
          $media_channel = get_sub_field('media_channel');
          $media_date = get_sub_field('media_date');
        ?>
          <div class="slide">
            <a href="<?php echo $media_link; ?>">
            <?php print_r($media_pic); ?>
            <?php if($media_pic['width'] >= 423) { ?>
               <img src="<?php echo $media_pic['sizes']['img_company_media_large']; ?>" alt="" />
            <?php } elseif($media_pic['width'] >= 250) { ?>
               <img src="<?php echo $media_pic['sizes']['img_company_media_medium']; ?>" alt="" />
            <?php } else { ?>
              <img src="<?php echo $media_pic['sizes']['img_company_media_small']; ?>" alt="" />
            <?php }?>

            <p class="sl_tit"><?php echo $media_channel; ?></p>
            <p class="sl_date"><?php echo $media_date; ?></p></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <?php
      the_content();
      endwhile; // End of the loop. ?>
  <?php
    // common area for all sub pages and posts
    get_template_part('parts/list-pages');
    get_template_part('parts/contact-information');
  ?>
<?php get_footer(); ?>