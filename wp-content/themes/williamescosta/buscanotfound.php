<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <main class="container">
    <div class="row">
      <section id="busca" class="col-12 col-md-8 p-0">
        <!-- <h2><strong>Resultado</strong> da busca</h2> -->

        
          


          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="result">
          <p>Foram encontrados 3 resultado(s) para o termo: "<span>Hospitais</span>"</p>


          <div class="card">
            <div class="card-image">
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.jpg" alt="Imagem de capa do card">
              <span>Política</span>
            </div>
            <div class="card-body">
               <div class="tg">
                 <span>Política</span>
                 <span>Economia</span>
               </div>
              <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo
                drogas</h5>
                <a href="#" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.jpg" alt="Imagem de capa do card">
              <span>Política</span>
            </div>
            <div class="card-body">
               <div class="tg">
                 <span>Política</span>
                 <span>Economia</span>
               </div>
              <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo
                drogas</h5>
                <a href="#" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
            </div>
          </div>
          <div class="card">
            <div class="card-image">
              <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?><?php echo get_stylesheet_directory_uri(); ?>/assets/busca.jpg" alt="Imagem de capa do card">
              <span>Política</span>
            </div>
            <div class="card-body">
               <div class="tg">
                 <span>Política</span>
                 <span>Economia</span>
               </div>
              <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo
                drogas</h5>
                <a href="#" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
            </div>
          </div>
          </div>

          <?php endwhile; else : ?>
            <!-- resultado negativo -->
            <div id="res">
              <main id="res" class="container">
                <div class="row">
                  <section class="col-12 col-md-10 offset-md-1">
                    <div class="res">
                      <h2><strong>Resultado</strong> da busca</h2>
                      <h3>Desculpe</h3>
                      <p>Não encontramos resultados para a busca: "<span>asidj asijdioasjdasd</span>"</p>
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
          <?php endif; ?>
      </section>
      <?php get_sidebar(); ?>
  </main>



  <section id="parceiros">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="parceiros">
            <h2><span>Parceiros</span> do blog</h2>
            <div class="owl-carousel">
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro1.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro2.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro1.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro2.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro1.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro2.jpg" /></div>
              <div><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/parceiro1.jpg" /></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  
<?php get_footer(); ?>