<?php
/***************Widget QA Category List**************/
class TNT_List_QA_Cat_Widget extends WP_Widget {
     
    function __construct() {
    	parent::__construct(
	        // base ID of the widget
	        'tnt_list_qa_cat_widget',
	         
	        // name of the widget
	        __('List QA Categories', 'tnt' ),
	         
	        // widget options
	        array (
	            'description' => __( 'Show List QA Categories.', 'tnt' )
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
    	//Get Terms List
	    $terms = get_terms(array(
	    	'taxonomy'=>'qacat',
    		'hide_empty' => false
	    ));

	    if ( is_page() ) {
	 		?>
			<div class="nav01">
			<dl>
			<dt><span><?php echo $instance['title']; ?></span></dt>
			<?php 
			if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
				foreach ( $terms as $term ) {
					$termLink = get_term_link($term->term_id);
					?>
						<dd><a href="<?php echo $termLink ?>" title="<?php echo $term->name; ?>"><?php echo $term->name; ?></a></dd>
					<?php
				}
			}
			 ?>
			</dl>
			</div>
	 		<?php
	    }
    }
}

//Register Widget
function tnt_register_list_qa_cat_widget() {
    register_widget( 'TNT_List_QA_Cat_Widget' ); 
}
add_action( 'widgets_init', 'tnt_register_list_qa_cat_widget' );