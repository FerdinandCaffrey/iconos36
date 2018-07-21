  <footer class="Footer ">
    <section class="Footer-container ">
      <div class="Footer-nav ">
        <?php
         if ( has_nav_menu( 'social_menu' ) ):
          wp_nav_menu( array(
              'theme_location' => 'social_menu',
              'container' => 'nav',
              'container_id' => 'SocialMenu',
              'container_class' => 'Menu  SocialMenu'
            ) );
         else:
          echo '<p><small>Aquí puedes agregar un menú de redes sociales, créalo desde tu wp-admin.</small></p>';
         endif;
        ?>
      </div>
      <div class="Footer-copy ">
        <p>
          &copy; <?php echo date('Y'); ?> Copyright
          <a href="https://jonmircha.com " target="_blank ">@jonmircha</a>
        </p>
      </div>
      <div class="Footer-nav ">
        <?php
         if ( has_nav_menu( 'about_menu' ) ):
          wp_nav_menu( array(
              'theme_location' => 'about_menu',
              'container' => 'nav',
              'container_id' => 'AboutMenu',
              'container_class' => 'Menu  AboutMenu'
            ) );
         else:
          echo '<p><small>Aquí puedes agregar un menú de identidad corporativa, créalo desde tu wp-admin.</small></p>';
         endif;
        ?>
      </div>
    </section>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>
