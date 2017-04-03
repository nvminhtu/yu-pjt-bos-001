<?php
/***************Widget Facebook List**************/
class MT_Facebook_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
	        // base ID of the widget
	        'mt_facebook_widget',

	        // name of the widget
	        __('Facebook', 'tnt' ),

	        // widget options
	        array (
	            'description' => __( 'Show Recent Post List.', 'tnt' )
	        )

	    );
	}

	function form( $instance ) {
		$defaults = array(
	        'fb_url' => 'Facebook URL'
	    );
	    $fb_url = $instance[ 'fb_url' ];

	    // markup for form ?>
	    <p>
	        <label for="<?php echo $this->get_field_id( 'fb_url' ); ?>">FB URL:</label>
	        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'fb_url' ); ?>" name="<?php echo $this->get_field_name( 'fb_url' ); ?>" value="<?php echo esc_attr( $fb_url ); ?>">
	    </p>
	    <?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
	    $instance[ 'fb_url' ] = strip_tags( $new_instance[ 'fb_url' ] );
	    return $instance;
	}

	function widget( $args, $instance ) {
	    ?>
	 	<div class="nav_fb">
	      <div class="fb-page" data-href="<?php echo $instance['fb_url']; ?>" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
	        <blockquote cite="<?php echo $instance['fb_url']; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $instance['fb_url']; ?>">BOSTY -  ボスティ</a></blockquote>
	      </div>
	    </div>
	    <?php
	}
}

//Register Widget
function mt_register_facebook_widget() {
    register_widget( 'MT_Facebook_Widget' );
}
add_action( 'widgets_init', 'mt_register_facebook_widget' );
