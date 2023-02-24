<?php

function load_stylesheets()
{
  wp_register_style('styles', get_template_directory_uri() . '/common/styles.css', array(), 1, 'all');
  wp_enqueue_style('styles');

  wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
  wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs()
{
  wp_register_script('icons1', get_template_directory_uri() . 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js', array(), 1, 1, 1);
  wp_enqueue_script('icons1');

  wp_register_script('icons2', get_template_directory_uri() . 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js', array(), 1, 1, 1);
  wp_enqueue_script('icons2');

  wp_register_script('scripts', get_template_directory_uri() . '/common/scripts.js', array(), 1, 1, 1);
  wp_enqueue_script('scripts');

  wp_register_script('custom', get_template_directory_uri() . '/common/custom.js', array(), 1, 1, 1);
  wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'addjs');

// Custom Images Sizes
add_image_size('image_small', 400, 400, false);

// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Register Menus
register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
  )
);
