<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<main class="container">
  <div class="row">
    <section id="busca" class="col-12 col-md-8 p-0">
        <h2><strong>Resultado</strong> da busca</h2>
        <?php $args_search = array('s' => $_GET['s']);
              $search = new WP_Query($args_search);
        ?> 
        <?php 
          if ( $search->have_posts() ) { ?>
         
            <div class="result">
            <h1></h1>
              <p>Foram encontrados <?php echo $search->found_posts; ?> resultado(s) para o termo: "<span><?php echo $s; ?></span>"</p> 
              <?php while ( $search->have_posts() ) { 
                $search->the_post(); ?>

                  <div class="card">
                    <div class="card-image">
                    <a class="card-title" href="<?php echo get_post_permalink(); ?>"><img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.jpg" alt="Imagem de capa do card"></a>
                      <span>Política</span>
                    </div>
                    <div class="card-body">
                      <div class="tg">
                        <span>Política</span>
                        <span>Economia</span>
                      </div>
                      <a class="card-title" href="<?php echo get_post_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                      <a href="<?php echo get_post_permalink(); ?>" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
                    </div>
                  </div> 
             <?php } ?>
             </div>

          <?php } else { ?>
             <!-- resultado negativo -->
            <div id="res">
              <main id="res" class="container">
                <div class="row">
                  <section class="col-12 col-md-10 offset-md-1">
                    <div class="res">

                      <h3>Desculpe</h3>
                      <p>Não encontramos resultados para a busca: "<span><?php echo $s; ?></span>"</p>
                      <h4>Para tentar de novo:</h4>
                      <ul>
                        <li>
                          <p>Veja se a palavra está escrita corretamente</p>
                        </li>
                        <li>
                          <p>Tente uma palavra-chave mais geral</p>
                        </li>
                      </ul>

                      <form action="<?php echo get_home_url(); ?>/?s=" class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" name="s" type="search" placeholder="Refazer busca..." aria-label="Search">
                        <button type="submit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/search.svg" alt=""></button>
                      </form>
                    </div>
                  </section>
                </div>
              </main>
            </div>
          <?php }
          /* Restore original Post Data */
          wp_reset_postdata();
          ?>
        

          
        </section> 
      <?php get_sidebar(); ?>
  
  </main>

  
<?php get_footer(); ?>