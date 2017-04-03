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
			 <dl>
		     <dt><span><?php echo $instance['title']; ?></span></dt>
		     <dd>
		       <ul>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		         <li><a href="bloglist_detail.html"><span class="small_des">テキストが入ります。テキストが入ります。</span><br />
		           テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</a></li>
		       </ul>
		     </dd>
		   </dl>
	     <?php
	}
}

//Register Widget
function mt_register_recent_posts_widget() {
    register_widget( 'MT_Recent_Post_List_Widget' );
}
add_action( 'widgets_init', 'mt_register_recent_posts_widget' );
