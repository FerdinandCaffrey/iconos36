  <main class="Main  u-afterFixed">
    <div class="Main-container">
      <section class="Content">
        <h2>Contenido principal</h2>
        <?php
          if( have_posts() ):
            while( have_posts() ):
              the_post();
              //mostrar el contenido
              //echo '<p>Información del Post</p>';
        ?>
          <article class="Post">
              <h2>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
              <?php the_post_thumbnail();  ?>
              <?php the_category(); ?>
              <?php the_category(', '); ?>
              <br>
              <?php the_tags(); ?>
              <?php the_excerpt(); ?>
              <?php the_time( get_option( 'date_format' ) ); ?>
              <?php the_author(); ?>
              <?php the_author_posts_link(); ?>
              <?php the_content(); ?>
          </article>
          <hr>
        <?php
            endwhile;
          else:
            //no hay contenido que mostrar
            echo '<p>No hay contenido</p>';
          endif;
        ?>
      </section>
      <div class="Pagination">
        <?php echo paginate_links(); ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>
