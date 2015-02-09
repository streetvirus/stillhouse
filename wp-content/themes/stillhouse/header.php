<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <meta property="og:title" content="<?php wp_title(); ?>"/>
  <meta property="og:url" content="<?php echo home_url(); ?>"/>
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>"/>
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>"/>
  <meta property="og:image" content="<?php echo sh_get_theme_asset('/images/icons/og-icon.png'); ?>"/>
  <link rel="shortcut icon" href="<?php echo sh_get_theme_asset('/images/icons/favicon.ico'); ?>" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon.png'); ?>" />
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-57x57.png'); ?>" />
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-72x72.png'); ?>" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-76x76.png'); ?>" />
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-114x114.png'); ?>" />
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-120x120.png'); ?>" />
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-144x144.png'); ?>" />
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo sh_get_theme_asset('/images/icons/apple-touch-icon-152x152.png'); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
