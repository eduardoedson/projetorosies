<?php

function rosies_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('comment-list'));
}

function rosies_register_styles() {
  wp_enqueue_style('rosies-styles', get_template_directory_uri() . '/style.css', array('rosies-bootstrap', 'rosies-aos'), wp_get_theme()->get('Version'), 'all');
  wp_enqueue_style('rosies-mobile-styles', get_template_directory_uri() . '/assets/css/mobile.css', array('rosies-styles'), '1.0', 'all');
  wp_enqueue_style('rosies-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css', array(), '5.0.0-beta2', 'all');
  wp_enqueue_style('rosies-leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.7.1', 'all');
  wp_enqueue_style('rosies-font-montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', array(), '2.3.1', 'all');
  wp_enqueue_style('rosies-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '1.0', 'all');
}

function rosies_register_scripts() {
  wp_enqueue_script('rosies-jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', 'all', true);
  wp_enqueue_script('rosies-popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js', array(), '2.6.0', 'all', true);
  wp_enqueue_script('rosies-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js', array('rosies-popper'), '5.0.0-beta2', 'all', true);
  wp_enqueue_script('rosies-font-awesome', 'https://kit.fontawesome.com/1c117cd0c5.js', array(), '5.15.2', 'all');
  wp_enqueue_script('rosies-main', get_template_directory_uri() . '/assets/js/main.js', array('rosies-bootstrap', 'rosies-aos'), wp_get_theme()->get('Version'), 'all', true);
  wp_enqueue_script('rosies-leaflet', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.7.1', 'all', true);
  wp_enqueue_script('rosies-mapa', get_template_directory_uri() . '/assets/js/mapa.js', array('rosies-leaflet'), wp_get_theme()->get('Version'), 'all', true);
  wp_enqueue_script('rosies-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', 'all', true);

}

function rosies_menus() {
  $locations = array(
    'header' => 'Header menu',
    'social' => 'Social menu',
    'central_1' => 'Central 1',
    'central_2' => 'Central 2',
    'central_3' => 'Central 3',
    'central_4' => 'Central 4',
    'central_5' => 'Central 5',
    'central_6' => 'Central 6',
    'central_7' => 'Central 7',
    'central_8' => 'Central 8',
    'central_lateral' => 'Central Lateral'
  );

  register_nav_menus($locations);
}

add_action('after_setup_theme', 'rosies_theme_support');
add_action('wp_enqueue_scripts', 'rosies_register_styles');
add_action('wp_enqueue_scripts', 'rosies_register_scripts');
add_action('init', 'rosies_menus');
?>