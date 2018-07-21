<?php
global $google_fonts;
global $hamburgers_css;
global $font_awesome;
global $fancybox_css;
global $fancybox_js;

$google_fonts = 'https://fonts.googleapis.com/css?family=Roboto:400,700';
$hamburgers_css = 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';
$font_awesome = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
$fancybox_css  =  'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css';
$fancybox_js = 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js';


function kenai_scripts () {
  global $google_fonts;
  global $hamburgers_css;
  global $font_awesome;
  global $fancybox_css;
  global $fancybox_js;

  wp_enqueue_style( 'google-fonts', $google_fonts, array(), '1.0.0', 'all' );
  wp_enqueue_style( 'hamburgers-css', $hamburgers_css, array(), '0.9.3', 'all' );
  wp_enqueue_style( 'font-awesome', $font_awesome, array(), '5.1.0', 'all' );
  wp_enqueue_style( 'fancybox-css', $fancybox_css, array(), '3.3.5', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('google-fonts', 'hamburgers-css', 'font-awesome', 'fancybox-css'), '1.0.0', 'all' );

  wp_enqueue_script('jquery');
  wp_enqueue_script( 'fancybox-js', $fancybox_js, array('jquery'), '3.3.5', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery', 'fancybox-js'), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'kenai_scripts');

function kenai_menus () {
  register_nav_menus( array(
    'main_menu' => 'Menú Principal',
    'social_menu' => 'Menú de Redes Sociales',
    'about_menu' => 'Menú de Identidad'
  ) );
}

add_action( 'init', 'kenai_menus' );
