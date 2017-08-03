<?php 
    function tnt_init_post_views(){
        $count_key = 'tnt_post_views_count';
        $qa_args = array(
          'post_type' => 'qa',
          'posts_per_page' => -1
        );
        $qa_query = new WP_Query( $qa_args );
        if ( $qa_query->have_posts() ) {
          while ( $qa_query->have_posts() ) {
            $qa_query->the_post();
            $postID = get_the_ID();
            $count = pvc_get_post_views($postID);
            // echo $count;
            if($count == ''){
                $count = 0;
                delete_post_meta($postID, $count_key);
                add_post_meta($postID, $count_key, '0');
            }
          }
          /* Restore original Post Data */
          wp_reset_postdata();
        }
    }

    function tnt_set_post_views($postID) {
        $count_key = 'tnt_post_views_count';
        $count = pvc_get_post_views($postID);
        
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            update_post_meta($postID, $count_key, $count);
        }
    }
    //To keep the count accurate, lets get rid of prefetching
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    function wpb_track_post_views ($post_id) {
        if ( !is_singular('qa') ) return;
        if ( empty ( $post_id) ) {
            global $post;
            $post_id = $post->ID;   
        }
        tnt_set_post_views($post_id);
    }
 ?>