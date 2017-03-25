<?php

/**
 * Setup Child Theme
 */

add_action( 'after_setup_theme', 'authentic_child_setup', 99 );

function authentic_child_setup() {

  // Add Custom Text Domain
  load_child_theme_textdomain( 'authentic', get_stylesheet_directory() . '/languages' );

  // Enqueue Child Scripts & Styles
  add_action( 'wp_enqueue_scripts', 'authentic_child_assets', 99 );
}

function authentic_child_assets() {
  if ( ! is_admin() ) {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('authentic_child_css', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(), $version, 'all');
  }
}

/**
 * Copy any function from parent and paste here. It will override the parent's version.
 */

