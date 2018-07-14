  <main class="Main  u-afterFixed">
    <div class="Main-container">
      <section class="Content">
        <?php
          if( have_posts() ):
            while( have_posts() ):
              the_post();
              get_template_part( 'template-parts/content-main' );
            endwhile;
          else:
            get_template_part( 'template-parts/content-none' );
          endif;
        ?>
      </section>
      <?php
        get_template_part( 'template-parts/pagination' );
        get_sidebar();
      ?>
    </div>
  </main>
