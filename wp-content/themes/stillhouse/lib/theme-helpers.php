<?php
/**
 * Helper functions for use in other areas of the theme
 *
 * @package stillhouse
 */


/**
 * Retrieve a file listed in the theme asset directory
 */
function sh_get_theme_asset($path){
  return get_template_directory_uri() . '/assets' . $path;
}

function sh_theme_asset($path) {
  echo sh_get_theme_asset($path);
}