<?php
/***************Widget Recent QA List**************/
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
	    <div class="nav02">
		<p class="nav02_tit"><span><?php echo $instance['title']; ?></span></p>
		<?php
			$post_objects = get_field('qa_ranking','option');
			if($post_objects != "")
			{
				echo '<ul>';
				foreach ($post_objects as $postQA) {
					$terms = get_the_terms( $postQA->ID , 'qacat' );
					?>
					<li>

					<p class="nav_Q"><a href="<?php echo get_permalink($postQA->ID); ?>"><?php echo get_the_title( $postQA->ID ); ?></a></p>
						<?php foreach ($terms as $term): ?>
							<?php $termLink = get_term_link($term->term_id); ?>
							<p class="nav_cate"><a href="<?php echo $termLink ?>"><?php echo $term->name; ?></a></p>
						<?php endforeach ?>
					</li>
					<?php
				}
			}
			else{
				// The Query
				$recent_qa_args = array(
				  'post_type' => 'qa',
				  'posts_per_page' => 5
				);
				$qa_query = new WP_Query( $recent_qa_args );

				// The Loop
				if ( $qa_query->have_posts() ) {
					echo '<ul>';
					while ( $qa_query->have_posts() ) {
						$qa_query->the_post();

						$terms = get_the_terms( get_the_ID() , 'qacat' );
						?>
						<li>

						<p class="nav_Q"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							<?php foreach ($terms as $term): ?>
								<?php $termLink = get_term_link($term->term_id); ?>
								<p class="nav_cate"><a href="<?php echo $termLink ?>"><?php echo $term->name; ?></a></p>
							<?php endforeach ?>
						</li>
						<?php
					}
					echo '</ul>';
					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					echo "<p>No QA to show</p>";
				}
			}
		 ?>

		</div>
	     <?php
	}
}

//Register Widget
function mt_register_recent_posts_widget() {
    register_widget( 'MT_Recent_Post_List_Widget' );
}
add_action( 'widgets_init', 'mt_register_recent_posts_widget' );
