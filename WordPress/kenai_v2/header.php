<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class( array ('fixed', 'full-width') ); ?>>
  <header class="Header">
    <section class="Header-container">
      <div class="Logo">
        <a href="<?php echo home_url('/'); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      </div>
      <button class="Panel-btn  hamburger  hamburger--squeeze" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>
      <section class="Panel">
        <nav class="Menu">
          <ul>
            <?php wp_list_pages('title_li'); ?>
          </ul>
        </nav>
      </section>
    </section>
  </header>
