<?php
/**
 * stillhouse theme init setup
 *
 * @package stillhouse
 */

if(WP_DEBUG){

  // Hide admin bar while developing
  add_filter('show_admin_bar', '__return_false');
  
}

if ( ! function_exists( 'stillhouse_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stillhouse_setup() {

  // Clean up the head
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );

  // Prevent File Modifications
  if ( ! defined( 'DISALLOW_FILE_EDIT' ) ) {
    define( 'DISALLOW_FILE_EDIT', true );
  }

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support( 'post-thumbnails' );

  // Add Image Sizes
  // add_image_size( $name, $width = 0, $height = 0, $crop = false );
  add_image_size( '400h', 9999, 400 );
  add_image_size( '800h', 9999, 800 );
  add_image_size( '300w', 300, 9999 );

  // Remove Dashboard Meta Boxes
  // Function location: /lib/theme-functions.php
  add_action( 'wp_dashboard_setup', 'sh_remove_dashboard_widgets' );

  // Change Admin Menu Order
  // Function location: /lib/theme-functions.php
  add_filter( 'custom_menu_order', '__return_true' );

  // Enable support for HTML5 markup.
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ) );

  // Enable support for Post Formats.
  // add_theme_support( 'post-formats', array(
  //   'aside', 'image', 'video', 'quote', 'link',
  // ) );

  // Enqueue scripts
  // Function location: /lib/theme-functions.php
  add_action( 'wp_enqueue_scripts', 'sh_scripts' );

  // Remove Query Strings From Static Resources
  // Function location: /lib/theme-functions.php
  add_filter( 'script_loader_src', 'sh_remove_script_version', 15, 1 );
  add_filter( 'style_loader_src', 'sh_remove_script_version', 15, 1 );

  // Dequeue store locator styles and scripts
  add_action('wp_footer', 'sh_remove_wpsl_files', 1);

}
endif; // stillhouse_setup

add_action( 'after_setup_theme', 'stillhouse_setup' );

function stillhouse_custom_post_types() {
   
    $press_labels = array(
      'name'                => _x( 'Press', 'Post Type General Name', 'text_domain' ),
      'singular_name'       => _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( 'Press', 'text_domain' ),
      'parent_item_colon'   => __( 'Parent Press:', 'text_domain' ),
      'all_items'           => __( 'All Press', 'text_domain' ),
      'view_item'           => __( 'View Press', 'text_domain' ),
      'add_new_item'        => __( 'Add New Press', 'text_domain' ),
      'add_new'             => __( 'Add New', 'text_domain' ),
      'edit_item'           => __( 'Edit Press', 'text_domain' ),
      'update_item'         => __( 'Update Press', 'text_domain' ),
      'search_items'        => __( 'Search Press', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $press_args = array(
      'label'               => __( 'press', 'text_domain' ),
      'description'         => __( 'Press information', 'text_domain' ),
      'labels'              => $press_labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-megaphone',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => false,
      'capability_type'     => 'page',
    );

    register_post_type( 'press', $press_args );

    $celebrity_labels = array(
      'name'                => _x( 'Celebrity', 'Post Type General Name', 'text_domain' ),
      'singular_name'       => _x( 'Celebrity', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( 'Celebrity', 'text_domain' ),
      'parent_item_colon'   => __( 'Parent Celebrity:', 'text_domain' ),
      'all_items'           => __( 'All Celebrities', 'text_domain' ),
      'view_item'           => __( 'View Celebrity', 'text_domain' ),
      'add_new_item'        => __( 'Add New Celebrity', 'text_domain' ),
      'add_new'             => __( 'Add New', 'text_domain' ),
      'edit_item'           => __( 'Edit Celebrity', 'text_domain' ),
      'update_item'         => __( 'Update Celebrity', 'text_domain' ),
      'search_items'        => __( 'Search Celebrity', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $celebrity_args = array(
      'label'               => __( 'celebrity', 'text_domain' ),
      'description'         => __( 'Celebrity information', 'text_domain' ),
      'labels'              => $celebrity_labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-star-filled',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => false,
      'capability_type'     => 'post',
    );

    register_post_type( 'celebrity', $celebrity_args );

    $cocktail_labels = array(
      'name'                => _x( 'Cocktail', 'Post Type General Name', 'text_domain' ),
      'singular_name'       => _x( 'Cocktail', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( 'Cocktails', 'text_domain' ),
      'parent_item_colon'   => __( 'Parent Cocktail:', 'text_domain' ),
      'all_items'           => __( 'All Cocktails', 'text_domain' ),
      'view_item'           => __( 'View Cocktail', 'text_domain' ),
      'add_new_item'        => __( 'Add New Cocktail', 'text_domain' ),
      'add_new'             => __( 'Add New Cocktail', 'text_domain' ),
      'edit_item'           => __( 'Edit Cocktail', 'text_domain' ),
      'update_item'         => __( 'Update Cocktail', 'text_domain' ),
      'search_items'        => __( 'Search Cocktails', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $cocktail_args = array(
      'label'               => __( 'cocktail', 'text_domain' ),
      'description'         => __( 'Cocktail information', 'text_domain' ),
      'labels'              => $cocktail_labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => false,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-tickets',
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => false,
      'capability_type'     => 'post',
    );

    register_post_type( 'cocktail', $cocktail_args );
}

// Hook into the 'init' action to register them
add_action( 'init', 'stillhouse_custom_post_types', 0 );

