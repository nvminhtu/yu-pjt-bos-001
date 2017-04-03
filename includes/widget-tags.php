<?php 
/***************Widget Tag Cloud**************/
class MT_Tag_Cloud_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
	        // base ID of the widget
	        'mt_tag_cloud_widget',
	         
	        // name of the widget
	        __('Wordpress Tag Cloud', 'mt' ),
	         
	        // widget options
	        array (
	            'description' => __( 'Show Tag Cloud.', 'mt' )
	        )
	         
	    );
	}
	 
	function form( $instance ) {
		$defaults = array(
	        'title' => 'Sample Title',
	        'sub_title' => 'Sample Sub Title'
	    );
	    $title = $instance[ 'title' ];
	    $sub_title = $instance[ 'sub_title' ];
	    // markup for form 
	 ?>
	    <p>
	        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
	        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
	    </p>

	    <p>
	        <label for="<?php echo $this->get_field_id( 'sub_title' ); ?>">Sub Title:</label>
	        <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'sub_title' ); ?>" name="<?php echo $this->get_field_name( 'sub_title' ); ?>" value="<?php echo esc_attr( $sub_title ); ?>">
	    </p>
	    <?php
	}
	 
	function update( $new_instance, $old_instance ) { 
		$instance = $old_instance;
	    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
	    $instance[ 'sub_title' ] = strip_tags( $new_instance[ 'sub_title' ] );
	    return $instance;
	}
	
	function bwp_wp_tag_cloud($echo = false) {
		$args = array(
			'unit' => 'px',
			'smallest' => '12',
			'largest' => '12',
			'format' => 'list',
			'orderby' => 'count',
			'order' => 'DESC',
			'echo' => $echo
		);

		return wp_tag_cloud($args);
	}

	function widget( $args, $instance ) {
	     ?>
	    <div class="nav02">
	      <p class="nav02_tit"><?php echo $instance['title']; ?><br />
	        <span><?php echo $instance['sub_title']; ?></span></p>
	        <?php echo $this->bwp_wp_tag_cloud(); ?>
	    </div>
	   <?php
	}
}

//Register Widget
function tnt_register_tag_cloud_widget() {
    register_widget( 'MT_Tag_Cloud_Widget' );
}
add_action( 'widgets_init', 'tnt_register_tag_cloud_widget' );