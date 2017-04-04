<?php
  /**
   * Load list of Studio
  */
?>
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
    $i=0; ?>
    <div id="studio-list" class="list_03 clearfix" data-number="<?php echo $number_blogs; ?>">
      <?php foreach($blog_posts as $post) : setup_postdata($post);
        $map_direction = get_field('map_direction',$post->ID);
        $address = get_field('address',$post->ID);
        $pictures = get_field('picture',$post->ID);
        $opening_hour = get_field('opening_hour',$post->ID);
        $station = get_field('station',$post->ID);

        $coordinate = get_post_meta( $post->ID, '_bosty_google_map', true );
        $address_map = $coordinate['address'];
        $latitude = $coordinate['latitude'];
        $longitude = $coordinate['longitude'];
        $place_name = $coordinate['place_name'];
        $place_address = $coordinate['place_address'];
        $mapURL = 'https://www.google.com/maps/place/'.$latitude.','.$longitude;

      ?>
      <div class="slide">
        <h3><?php the_title(); ?></h3>
        <div class="map">
          <div class="maparea">
            <div id="gmap_<?php echo $i; ?>" data-lat="<?php echo $latitude; ?>" data-long="<?php echo $longitude; ?>" style="with:100%; height:204px;border:0;"></div>
            <span id="place_name_<?php echo $i; ?>" data-content="<?php echo $place_name; ?>"></span>
            <span id="place_address_<?php echo $i; ?>" data-content="<?php echo $place_address; ?>"></span>
          </div>
          <dl class="clearfix">
            <dt>住所</dt>
            <dd><?php echo $address; ?></dd>
          </dl>
          <dl class="clearfix">
            <dt>営業時間</dt>
            <dd><?php echo $opening_hour; ?></dd>
          </dl>
          <dl class="clearfix">
            <dt>アクセス</dt>
            <dd><?php echo $map_direction; ?></dd>
          </dl>
          <dl class="clearfix">
            <dt>最寄り駅</dt>
            <dd><?php echo $station; ?></dd>
          </dl>
        </div><!-- .map -->
      </div><!-- .slide -->
    <?php $i++;
      endforeach;
    ?>
  </div> <!-- end #studio-list -->
<?php
      wp_reset_query();
    wp_reset_postdata();
  }
?>