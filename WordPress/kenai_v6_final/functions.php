<?php
global $google_fonts;
global $hamburgers_css;
global $font_awesome;
global $fancybox_css;
global $fancybox_js;
global $add_this_js;

$google_fonts = 'https://fonts.googleapis.com/css?family=Roboto:400,700';
$hamburgers_css = 'https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.9.3/hamburgers.min.css';
$font_awesome = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css';
$fancybox_css  =  'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css';
$fancybox_js = 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js';
$add_this_js = '//s7.addthis.com/js/300/addthis_widget.js#pubid=';


function kenai_scripts () {
  global $google_fonts;
  global $hamburgers_css;
  global $font_awesome;
  global $fancybox_css;
  global $fancybox_js;
  global $add_this_js;

  wp_enqueue_style( 'google-fonts', $google_fonts, array(), '1.0.0', 'all' );
  wp_enqueue_style( 'hamburgers-css', $hamburgers_css, array(), '0.9.3', 'all' );
  wp_enqueue_style( 'font-awesome', $font_awesome, array(), '5.1.0', 'all' );
  wp_enqueue_style( 'fancybox-css', $fancybox_css, array(), '3.3.5', 'all' );
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('google-fonts', 'hamburgers-css', 'font-awesome', 'fancybox-css'), '1.0.0', 'all' );

  wp_enqueue_script('jquery');
  wp_enqueue_script( 'fancybox-js', $fancybox_js, array('jquery'), '3.3.5', true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery', 'fancybox-js'), '1.0.0', true );

  if ( is_single() ):
    wp_enqueue_script( 'add-this-js', $add_this_js, array(), '1.0.0', true );
  endif;
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

function kenai_register_sidebars () {
  register_sidebar( array(
    'id' => 'main_sidebar',
    'name' => 'Sidebar Principal',
    'description' => 'Este es el sidebar principal y aparecerá al lado del contenido principal.',
    'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ) );

  register_sidebar( array(
    'id' => 'footer_sidebar',
    'name' => 'Sidebar Footer',
    'description' => 'Este es el sidebar del footer y aparecerá en el footer.',
    'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ) );
}

add_action( 'widgets_init', 'kenai_register_sidebars' );

function kenai_setup () {
  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'html5', array(
    'comment-list',
    'comment-form',
    'search-form',
    'gallery',
    'caption'
  ) );

  add_theme_support( 'post-formats', array(
    'aside',
    'gallery',
    'link',
    'image',
    'quote',
    'status',
    'video',
    'audio',
    'chat'
  ) );

  add_theme_support( 'title-tag' );

  remove_action( 'wp_head', 'wp_generator' );

  add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width' => 100,
    'flex-width' => true,
    'flex-height' => true
  ) );
}

add_action( 'after_setup_theme', 'kenai_setup' );

function kenai_excerpt_more () {
  return ' <a href="'. get_permalink() .'">leer más...</a>';
}

add_filter( 'excerpt_more', 'kenai_excerpt_more' );

function kenai_excerpt_length () {
  return 30;
}

add_filter( 'excerpt_length', 'kenai_excerpt_length' );
