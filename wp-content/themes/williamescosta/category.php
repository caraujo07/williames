<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<main class="container">
  <div class="row">
    <section id="busca" class="col-12 col-md-8 p-0">
      <h2><strong>Resultado</strong> da busca</h2>
      <?php if ( have_posts() ) { ?>
        <div class="result">
        <?php while ( have_posts() ) { the_post(); ?>
          <div class="card">
            <div class="card-image">
            <a class="card-title" href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.jpg" alt="Imagem de capa do card"></a>
              <span>Política</span>
            </div>
            <div class="card-body">
              <div class="tg">
                <span>Política</span>
                <span>Economia</span>
              </div>
              <a class="card-title" href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
              <a href="<?php the_permalink(); ?>" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
            </div>
          </div> 
        <?php } // end while ?>
        </div> 
  <?php }  // end if ?> 
    </section>
    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>