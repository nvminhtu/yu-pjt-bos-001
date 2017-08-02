<?php
/**
 * Search Template of Bosty
 * Bosty theme
 */

get_header(); ?>


<div class="main">
  <div class="inner clearfix">
    <div class="left_content">
        <div class="news_article clearfix">
 		<?php
			if ( have_posts() ) :
				 $i = 1;
				while ( have_posts() ) : the_post(); 
				  $author_id = get_the_author_meta('ID');
	              $firstname = get_the_author_meta( 'user_firstname' );
	              $lastname = get_the_author_meta( 'user_lastname' );
	  						$fullname = $lastname.' '.$firstname;
	              //editor information
	              $editor_avatar_url = get_field('user_profile_picture', 'user_'. $author_id);
	              $nicename = get_the_author_meta( 'user_nicename', $author_id );
	              $thumb = get_post_thumbnail_id();
	              $img_blog_list = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_list');
	              $img_blog_list_src = $img_blog_list[0];
	              $img_blog_list_item = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_blog_list_item');
	              $img_blog_list_item_src = $img_blog_list_item[0];
	              //run the loop
		?>
			<a href="<?php the_permalink(); ?>">
	          <dl class="clearfix">
	            <dt>
	                <?php if(has_post_thumbnail()) { ?>
	                  <img src="<?php echo $img_blog_list_item_src; ?>" alt="<?php the_title(); ?>" />
	                <?php } else { ?>
	                  <img src="<?php bloginfo('template_url'); ?>/images/bloglist/bloglist_simg01.png"  alt="<?php the_title(); ?>" /></p>
	                <?php } ?>
	            </dt>
	            <dd>
	              <h4><?php the_title(); ?></h4>
	              <div class="clearfix">
	                <p class="userinfo">
	                  <?php /* <span><img src="<?php echo $editor_avatar_url; ?>" /></span>
	                  <span><?php echo $fullname; ?></span>
	                  */ ?>
	                </p>
	                <p class="dateinfo">
	                  <span class="cal"><?php echo get_the_date('Y.m.d',$post->ID); ?></span>
	                  <span class="like"><?php if( function_exists('zilla_likes') ) zilla_likes(); ?></span>
	                </p>
	              </div>
	            </dd>
	          </dl>
	         </a>
		    
		    <?php endwhile; 
			else :
			endif; 
		?>
      </div>
      <div class="pagination">
        <?php wp_pagenavi(); ?>
      </div>
	
    </div><!-- end .left_content -->
    <?php get_sidebar(); ?>
  </div><!-- end .inner -->
</div><!-- end .main -->

<?php
    // common area for all sub pages and posts
    get_template_part('parts/list-pages');
    get_template_part('parts/contact-information');
?>

<?php get_footer(); ?>