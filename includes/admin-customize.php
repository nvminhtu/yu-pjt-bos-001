<?php /** -------------- Admin Customize -------------- **/
// #theme-options
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'manage_options',
    'redirect'    => false
  ));
}

// #user-fields: remove unused field for users
function remove_website_row_wpse_94963_css() {
  echo '<style>tr.user-url-wrap{ display: none; }</style>';
  echo '<style>tr.user-profile-picture{ display: none; }</style>';
  echo '<style>tr.user-rich-editing-wrap{ display: none; }</style>';
  echo '<style>tr.user-admin-color-wrap{ display: none; }</style>';
  echo '<style>tr.user-comment-shortcuts-wrap{ display: none; }</style>';
  echo '<style>tr.user-admin-bar-front-wrap{ display: none; }</style>';
  echo '<style>tr.user-description-wrap{ display: none; }</style>';
}
add_action( 'admin_head-user-edit.php', 'remove_website_row_wpse_94963_css' );
add_action( 'admin_head-profile.php',   'remove_website_row_wpse_94963_css' );

// #user-admin-bar: remove avatar user
function custom_admin_wp() {
  echo '<style>
    #wpadminbar #wp-admin-bar-my-account.with-avatar #wp-admin-bar-user-actions>li {
      margin-left: 0px;
    }
  </style>';
}
add_action('admin_head', 'custom_admin_wp');

// #user-admin-bar: remove logo and user info
function myplugin_customize_toolbar( $wp_admin_bar ){
  $user = wp_get_current_user();
  if ( ! ( $user instanceof WP_User ) ){
    return;
  }
  $my_account = $wp_admin_bar->get_node( 'my-account' );
  $wp_admin_bar->remove_node( 'wp-logo' );
  $wp_admin_bar->remove_node( 'user-info' );
}
add_action( 'admin_bar_menu', 'myplugin_customize_toolbar', 999 );

// #user-admin-bar: change first name and last name order
function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
  $user_id = get_current_user_id();
  $current_user = wp_get_current_user();
  $profile_url = get_edit_profile_url( $user_id );

  if ( 0 != $user_id ) {
    /* Add the "My Account" menu */
    $avatar = get_avatar( $user_id, 28 );

    $u_firstname = $current_user->user_firstname;
    $u_lastname = $current_user->user_lastname;
    $u_displayname = $u_lastname.' '.$u_firstname;

    $howdy = sprintf( __('Welcome, %1$s'), $u_displayname );
    $class = empty( $avatar ) ? '' : 'with-avatar';

    $my_account = $wp_admin_bar->get_node( 'my-account' );

    $wp_admin_bar->add_menu( array(
          'id' => 'my-account',
          'parent' => 'top-secondary',
          'title' => $howdy . $avatar,
          'href' => $profile_url,
          'meta' => array(
          'class' => $class,
        ),
      ) );

    }
}
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

// #menu: remove pages: wpcf7 and tools in editor
function wpse26980_remove_tools() {
  $user = wp_get_current_user();
  if(!(current_user_can('administrator'))) {
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'wpcf7' );
    remove_menu_page( 'edit-comments.php' );
  }
}
add_action( 'admin_menu', 'wpse26980_remove_tools', 99 );

// #dashboard: customize wordpress admin widgets
function customize_dashboard_widgets () {
 remove_meta_box('dashboard_recent_drafts','dashboard','side'); //Recent Drafts
 remove_meta_box('dashboard_incoming_links','dashboard','normal'); //Incoming Links
 remove_meta_box('dashboard_primary','dashboard','side'); // remove Wordpress News
 remove_meta_box('dashboard_plugins','dashboard','normal'); //Plugins
 remove_meta_box('dashboard_right_now','dashboard', 'normal'); //Right Now
 remove_meta_box('pvc_dashboard','dashboard','normal');
 remove_meta_box('dashboard_recent_comments','dashboard','normal'); //Recent Comments
}
add_action('wp_dashboard_setup', 'customize_dashboard_widgets');

// #postviews: Hide other posts in wordpress
add_filter('wp_count_posts', 'wpse149143_wp_count_posts', 10, 3);
function wpse149143_wp_count_posts( $counts, $type, $perm ) {
    global $wpdb;

    // We only want to modify the counts shown in admin and depending on $perm being 'readable'
    if ( ! is_admin() || 'readable' !== $perm ) {
        return $counts;
    }

    // Only modify the counts if the user is not allowed to edit the posts of others
    $post_type_object = get_post_type_object($type);
    if (current_user_can( $post_type_object->cap->edit_others_posts ) ) {
        return $counts;
    }

    $query = "SELECT post_status, COUNT( * ) AS num_posts FROM {$wpdb->posts} WHERE post_type = %s AND (post_author = %d) GROUP BY post_status";
    $results = (array) $wpdb->get_results( $wpdb->prepare( $query, $type, get_current_user_id() ), ARRAY_A );
    $counts = array_fill_keys( get_post_stati(), 0 );

    foreach ( $results as $row ) {
        $counts[ $row['post_status'] ] = $row['num_posts'];
    }

    return (object) $counts;
}

// #postviews: return view visible for users
function mine_published_only($views) {
  unset($views['sticky']);
  return $views;
}

// #postviews: show only posts of a specific user
function only_own_posts_parse_query( $wp_query ) {
    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false ) {
      global $current_user;
      $wp_query->set( 'author', $current_user->id );
     }
}

// #postviews: filter posts
if (current_user_can('editor')) {
  add_filter('views_edit-post', 'mine_published_only');
  add_filter('parse_query', 'only_own_posts_parse_query' );
}

// #postviews: filter title of user page.
function wpdocs_filter_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    if ( is_author() ) {
        $author = get_queried_object();
        $author_id = $author->ID;
        $firstname = get_the_author_meta( 'user_firstname', $author_id );
        $lastname = get_the_author_meta( 'user_lastname', $author_id );
        $fullname = $lastname.' '.$firstname;
        $title = $fullname . " $sep";
    }

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );
