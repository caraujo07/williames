<?php get_header(); ?>



    <section id="destaques">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="destaques">
              <div class="destaque">
             


                
                <div class="owl-carousel slide-destaques owl-theme">
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
                  <div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/foto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block d-md-block">
                      <h4>Pirenópolis ganha mais uma Reserva Particular do Patrimônio Natural</h4>
                    </div></div>
              </div>
 
  
              </div>
            </div>
          </div>

          <div class="col-md-4 d-lg-flex pl-0">
            <div class="destaques">
              <div class="destaque">
                <a href="#">
                  <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/destaque2.jpg" alt="">
                  <div class="caption">
                    <h2>Atividade econômica registra retração de 0,13% no segundo trimestre</h2>
                  </div>
                </a>
              </div>
            
              <div class="destaque">
                <a href="#">
                  <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/destaque3.jpg" alt="">
                  <div class="caption">
                    <h2>Maia e Toffoli defendem reforma que r</h2>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    


  <main id="main" class="container">
    <div class="row">
      <div class="col-12 col-md-8">
        <div id="post">
          
        <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>    
               <div class="card">
                  <img class="card-img-top"
                       src="<?php the_post_thumbnail_url(); ?>"
                       alt="Imagem de capa do card">
                  <div class="bdg card-body">
                    <span class="badge">
                      <?php
                        if(get_the_tag_list()) {
                          echo get_the_tag_list('','</span><span class="badge">','');
                        }
                      ?>
                    </span>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text"><?php the_content(); ?></p>
                  </div>
                  <div class="card-body pt-0">
                    <a href="<?php the_permalink(); ?>" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
                  </div>
                </div>
              <?php endwhile; ?>
        <?php endif; ?>

          <button>Mais matérias</button>
        </div>
      </div>

      <?php get_sidebar(); ?>
  </main>


<?php get_footer(); ?>