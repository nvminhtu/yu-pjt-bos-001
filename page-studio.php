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
    $number_blogs = $the_query->found_posts;
  	$blog_posts = get_posts($args);
		if($blog_posts) {
  	$i = 1; $k = 0; $m = 1; ?>
    <div class="anchorlink">
      <ul class="inner">
        <?php foreach($blog_posts as $post) : setup_postdata($post);  ?>
                <li><a href="#section_stu<?php echo $m; ?>"><?php echo $post->post_title; ?></a></li>
        <?php $m++; endforeach; ?>
      </ul>
    </div>
    <div id="studio-list" data-number="<?php echo $number_blogs; ?>">
      <?php foreach($blog_posts as $post) : setup_postdata($post);
        $map_direction = get_field('map_direction',$post->ID);
        $address = get_field('address',$post->ID);
        $pictures = get_field('picture',$post->ID);
        $opening_hour = get_field('opening_hour',$post->ID);

        $coordinate = get_post_meta( $post->ID, '_bosty_google_map', true );
        $address_map = $coordinate['address'];
        $latitude = $coordinate['latitude'];
        $longitude = $coordinate['longitude'];
        $place_name = $coordinate['place_name'];
        $place_address = $coordinate['place_address'];
        $mapURL = 'https://www.google.com/maps/place/'.$latitude.','.$longitude;
        $alignPics = 'left';
        $alignContent = 'right';
        if($i%2==0) { $alignPics = 'right'; } else { $alignPics = 'left'; }
        if($i%2==0) { $alignContent = 'left'; } else { $alignContent = 'right'; }
      ?>

      <section id="section_stu<?php echo $i; ?>" class="section_01">
        <div class="inner">
        <h3 class="title_01"><?php the_title(); ?></h3>
        <div class="clearfix">
          <div class="section_01_<?php echo $alignContent; ?>">
            <div class="map">
              <div class="maparea">
                  <div class="gmap_<?php echo $k; ?>" data-lat="<?php echo $latitude; ?>" data-long="<?php echo $longitude; ?>" style="with:100%; height:320px;border:0;"></div>
                  <span class="place_name_<?php echo $i; ?>" data-content="<?php echo $place_name; ?>"></span>
                  <span class="place_address_<?php echo $i; ?>" data-content="<?php echo $place_address; ?>"></span>
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
              <dl>
                <dt><img src="<?php bloginfo('template_url'); ?>/images/studio/studio_img_hour.png" /></dt>
                <dd>
                  <?php echo $opening_hour; ?>
                </dd>
              </dl>
            </div>
          </div>
          <div class="section_01_<?php echo $alignPics; ?>">
            <ul>
              <?php // loop studio thumb
                    $j = 0;
                    if( $pictures ):
                    foreach( $pictures as $image ):
                      if($j<=4) {
                    ?>
                      <li>
                        <a data-fancybox="gallery_<?php echo $post->ID; ?>" href="<?php echo $image['sizes']['img_studio_large']; ?>">
                          <img src="<?php echo $image['sizes']['img_studio_small']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                      </li>
                    <?php }
                    $j++;
                    endforeach;
                  endif;
                  // end loop studio thumb
                ?>
            </ul>

          </div>
        </div>
      </div>
      </section>

		<?php	$i++; $k++;
			endforeach;
    ?>
  </div> <!-- end #studio-list -->
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
