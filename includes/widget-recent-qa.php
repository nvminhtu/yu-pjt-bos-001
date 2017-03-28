<?php 
/***************Widget Recent QA List**************/
class TNT_Recent_QA_List_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
	        // base ID of the widget
	        'tnt_recent_qa_list_widget',
	         
	        // name of the widget
	        __('Recent QA List', 'tnt' ),
	         
	        // widget options
	        array (
	            'description' => __( 'Show Recent QA List.', 'tnt' )
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
		<ul>
		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>

		<li>
		<p class="nav_Q"><a href="">テキストが入ります。
		    テキストが入ります。テキス
		    トが入ります。
		    テキストが入ります。</a></p>
		    <p class="nav_cate"><a href="">Category name</a></p>
		</li>
		</ul>

		</div>
	     <?php
	}
}

//Register Widget
function tnt_register_recent_qa_widget() {
    register_widget( 'TNT_Recent_QA_List_Widget' );
}
add_action( 'widgets_init', 'tnt_register_recent_qa_widget' );