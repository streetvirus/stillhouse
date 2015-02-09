<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package stillhouse
 */

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function stillhouse_wp_title( $title, $sep ) {
  if ( is_feed() ) {
    return $title;
  }

  global $page, $paged;

  // Add the blog name
  $title .= get_bloginfo( 'name', 'display' );

  // // Add the blog description for the home/front page.
  // $site_description = get_bloginfo( 'description', 'display' );
  // if ( $site_description && ( is_home() || is_front_page() ) ) {
  //   $title .= " $sep $site_description";
  // }

  return $title;
}
add_filter( 'wp_title', 'stillhouse_wp_title', 10, 2 );
