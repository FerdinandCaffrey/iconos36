<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <?php
          if ( has_nav_menu( 'main_menu' ) ):
            wp_nav_menu( array(
              'theme_location' => 'main_menu',
              'container' => 'nav',
              'container_id' => 'MainMenu',
              'container_class' => 'Menu  MainMenu'
            ) );
          else:
        ?>
          <nav class="Menu">
            <ul>
              <?php wp_list_pages('title_li'); ?>
            </ul>
          </nav>
        <?php endif; ?>
      </section>
    </section>
  </header>
