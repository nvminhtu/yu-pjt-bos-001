<?php
add_action( 'cmb2_admin_init', 'cmb2_other_posts_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_other_posts_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_bosty_';

    /**
     * Initiate the metabox
     */
     $cmb = new_cmb2_box( array(
         'id'            => 'bosty_metabox',
         'title'         => __( 'Studio Map', 'cmb2' ),
         'object_types'  => array( 'studio', ), // Post type
         'context'       => 'normal',
         'priority'      => 'high',
         'show_names'    => true, // Show field names on the left
     ) );

     $cmb->add_field( array(
         'name'       => __( 'Select Map Position', 'cmb2' ),
         'desc'       => __( 'Input your address / use maker to check your location', 'cmb2' ),
         'id'         => $prefix . 'google_map',
         'type'       => 'pw_map'
     ) );    // Add other metaboxes as needed

}

function cmb2_get_your_post_type_post_options() {
    return cmb2_get_post_options( );
}
