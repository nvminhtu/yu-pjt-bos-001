<?php
  /* Custom List page */
?>
<section id="section_05" class="footer_section_01">
  <div id="list_footer" class="list_05">
    <?php
      // #setup from theme settings
      $post_objects = get_field('other_pages_setting','option');
      if( $post_objects ): ?>
        <?php foreach( $post_objects as $post): ?>
              <?php
                setup_postdata($post);
                $page_description = get_field( "page_description", $post->ID );
                $img_other_pages = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_other_pages');
							  $img_other_pages_src = $img_other_pages[0];
              ?>
              <a href="<?php the_permalink(); ?>">
                <div class="slide"> <img src="<?php echo $img_other_pages_src; ?>" alt="<?php the_title(); ?>" />
                  <h3><?php the_title(); ?></h3>
                  <p><?php echo $page_description; ?></p>
                </div>
              </a>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
  </div>
</section>
