<?php
/***************Widget Recent Post List**************/
class MT_Recent_Post_List_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
	        // base ID of the widget
	        'mt_recent_posts_widget',

	        // name of the widget
	        __('Recent Posts List', 'tnt' ),

	        // widget options
	        array (
	            'description' => __( 'Show Recent Post List.', 'tnt' )
	        )

	    );
	}

	function form( $instance ) {
		$defaults = array(
	        'title' => 'Sample Title'
	    );
	    $title = $instance[ 'title' ];

	    // markup for form ?>
	    <p>
	        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
	        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
	    </p>
	    <?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
	    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
	    return $instance;
	}

	function widget( $args, $instance ) {
	     ?>
	 	<div class="nav01">
			<dl>
			    <dt><span><?php echo $instance['title']; ?></span></dt>
			     <dd>
			       <ul>
			       	<?php
				       	$query_args = array(
								      'post_type' => 'post',
								      'post__not_in' => array($id),
								      'posts_per_page' => $no_query,
								      'orderby' => date,
								      'order' => desc,
								      'field' => 'slug'
								    );
				       	$i = 1;
						$the_query = new WP_Query( $query_args );
						$number_of_posts = $the_query->post_count;

						if ( $the_query->have_posts() ) :
	    					while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							 <li>
							 <a href="<?php the_permalink(); ?>"><span class="small_des"><?php the_title(); ?></span><br />
							 	 <?php
								 				$my_postid = $post->ID;
										 	   //show content limited
			                	$content_display = mb_substr(wp_strip_all_tags( get_the_content()), 0, 80 , 'UTF-8');
			                  $content_display = apply_filters('the_content', $content_display);
			                  $content_display = strip_tags( $content_display, '<p><br/>');
			                  $content_length = mb_strlen($content_display);

			                  if($content_length > 81) {
			                    echo $content_display.' ...';
			                  } else {
			                    echo $content_display;
			                  }
		                  ?>
			           			<?php //the_excerpt(); ?></a>
			           		</li>
			       		<?php $i++; endwhile; ?>
			       		<!-- end of the loop -->
						<?php wp_reset_postdata(); ?>

						<?php else:  ?>
						  <li><?php _e( 'Sorry, no posts matched your criteria.' ); ?></li>
						<?php endif; ?>
			       </ul>
			     </dd>
			   </dl>
			</div>
	     <?php
	}
}

//Register Widget
function mt_register_recent_posts_widget() {
    register_widget( 'MT_Recent_Post_List_Widget' );
}
add_action( 'widgets_init', 'mt_register_recent_posts_widget' );
