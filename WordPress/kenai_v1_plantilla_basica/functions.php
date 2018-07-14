<?php
global $google_fonts;
global $hamburgers_css;
global $font_awesome;

$google_fonts = 'https://fonts.googleapis.com/css?family=Roboto:400,700';
$hamburgers_css = 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';
$font_awesome = 'https://use.fontawesome.com/releases/v5.0.13/css/all.css';

function kenai_scripts () {
  global $google_fonts;
  global $hamburgers_css;
  global $font_awesome;

  wp_enqueue_style( 'google-fonts', $google_fonts, array(), '1.0.0', 'all' );
  wp_enqueue_style( 'hamburgers-css', $hamburgers_css, array(), '0.9.3', 'all' );
  wp_enqueue_style( 'font-awesome', $font_awesome, array(), '5.0.13', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('google-fonts', 'hamburgers-css', 'font-awesome'), '1.0.0', 'all' );

  wp_enqueue_script('jquery');
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'kenai_scripts');
