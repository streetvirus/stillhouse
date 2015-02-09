<?php
/**
 * stillhouse theme functions definted in /lib/init.php
 *
 * @package stillhouse
 */

/**
 * Remove Dashboard Meta Boxes
 */
function sh_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Enqueue scripts
 */
function sh_scripts() {
  wp_enqueue_style( 'stillhouse-style', get_stylesheet_uri() );

  if ( !is_admin() ) {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr.2.8.3.custom.min.js', NULL, NULL);
    wp_enqueue_script( 'customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );
  }

}

/**
 * Remove scripts and styles from the WP Store Locator plugin so we can customize
 */
function sh_remove_wpsl_files() {
  wp_dequeue_style('wpsl-css');
  // wp_dequeue_script('wpsl-js');
  // wp_enqueue_script('wpsl-js', get_template_directory_uri() . '/assets/js/lib/wpsl-gmap-sh.js', array( 'jquery' ) );
}

/**
 * Remove Query Strings From Static Resources
 */
function sh_remove_script_version( $src ){
  $parts = explode( '?ver', $src );
  return $parts[0];
}