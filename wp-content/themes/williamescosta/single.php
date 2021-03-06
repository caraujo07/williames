<?php get_header(); ?>

  <main id="main" class="container">
    <div class="row">
      <section id="interna" class="col-12 col-md-8 p-0">

        <article>
          <h3><?php the_title(); ?></h3>

          <img class="card-img-top img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
          
          <div class="tg">
            <span>
              <?php
                if(get_the_tag_list()) {
                  echo get_the_tag_list('','</span><span>','');
                }
              ?>
            </span>
          </div>
          <?php 
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post(); 
                echo get_the_content();
              } // end while
            } // end if
          ?>


              <h6>Galeria</h6>
              <div class="owl-carousel galeria" id="">
                  <div>
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card1.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card1.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card1.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card2.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>

                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card3.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>

                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card3.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
                  <div>

                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg" />
                    <p class="legenda">Lorem Ipsum is simply dummy text of the printing a</p>
                  </div>
              </div>

              <div class="share">
                <h4>Compartilhe</h4>
                <div class="medias">
                  <ul>
                    <li><a href="#">
                      <svg id="Grupo_444" data-name="Grupo 444" xmlns="http://www.w3.org/2000/svg" width="8" height="15"
                        viewBox="0 0 13.019 24.93">
                        <g id="Facebook" transform="translate(0 0)">
                          <path id="Caminho_1" data-name="Caminho 1"
                            d="M88.448,24.93V13.573h3.878l.554-4.432H88.448V6.371c0-1.246.416-2.216,2.216-2.216h2.354V.138C92.465.138,91.08,0,89.556,0c-3.324,0-5.678,2.077-5.678,5.817V9.141H80v4.432h3.878V24.93Z"
                            transform="translate(-80)" fill="#19647e" fill-rule="evenodd" />
                        </g>
                      </svg>
                    </a></li>
                    <li><a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 26.217 21.265">
                        <path id="Caminho_422" data-name="Caminho 422"
                          d="M46.3,23.265A15.157,15.157,0,0,0,61.6,7.972V7.243a11.84,11.84,0,0,0,2.622-2.767,12.091,12.091,0,0,1-3.059.874,5.667,5.667,0,0,0,2.33-2.913,13.359,13.359,0,0,1-3.35,1.311A5.2,5.2,0,0,0,56.206,2a5.472,5.472,0,0,0-5.389,5.389,2.839,2.839,0,0,0,.146,1.165,15.059,15.059,0,0,1-11.069-5.68,5.578,5.578,0,0,0-.728,2.767,5.787,5.787,0,0,0,2.33,4.515,4.91,4.91,0,0,1-2.476-.728h0a5.323,5.323,0,0,0,4.37,5.243,4.49,4.49,0,0,1-1.457.146,2.479,2.479,0,0,1-1.02-.146,5.518,5.518,0,0,0,5.1,3.787,11,11,0,0,1-6.7,2.33A4.032,4.032,0,0,1,38,20.643a13.748,13.748,0,0,0,8.3,2.622"
                          transform="translate(-38 -2)" fill="#19647e" fill-rule="evenodd" />
                      </svg>
                    </a></li>
                    <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" viewBox="0 0 21.098 21.098"><g transform="translate(0 0)"><path d="M21.1,10.277a10.374,10.374,0,0,1-15.364,9L0,21.1l1.87-5.514A10.169,10.169,0,0,1,.383,10.277a10.358,10.358,0,0,1,20.715,0ZM10.741,1.637a8.684,8.684,0,0,0-8.708,8.641,8.55,8.55,0,0,0,1.659,5.066L2.6,18.552,5.95,17.489a8.716,8.716,0,0,0,13.5-7.211A8.685,8.685,0,0,0,10.741,1.637Zm5.23,11.008c-.064-.1-.233-.168-.487-.294s-1.5-.736-1.735-.819-.4-.126-.572.126-.656.819-.8.987-.3.19-.55.064a6.949,6.949,0,0,1-2.041-1.25A7.6,7.6,0,0,1,8.37,9.713c-.148-.252-.015-.388.111-.514s.254-.294.381-.441a1.688,1.688,0,0,0,.254-.42A.459.459,0,0,0,9.095,7.9c-.063-.126-.572-1.366-.783-1.87s-.423-.42-.571-.42-.317-.021-.487-.021a.937.937,0,0,0-.677.315A2.817,2.817,0,0,0,5.689,8a4.874,4.874,0,0,0,1.037,2.605,10.378,10.378,0,0,0,4.337,3.8c2.581,1.008,2.581.672,3.047.63a2.568,2.568,0,0,0,1.714-1.2A2.1,2.1,0,0,0,15.971,12.644Z" transform="translate(0 0)" fill="#19647e"/></g></svg>
                    </a></li>
                    
                  </ul>
                </div>
              </div>
        </article>



        <div class="result">
          <h4>Leia mais</h4>

          <?php 

          $related = new WP_Query(
                  array(
                     'category__in'   => wp_get_post_categories( $post->ID ),
                     'posts_per_page' => 5,
                     'post__not_in'   => array( $post->ID )
                  )
               );


               if( $related->have_posts() ) { 
                  while( $related->have_posts() ) { 
                     $related->the_post();  ?>
                     <div class="card">
                     <div class="card-image">

                     <a class="card-title" href="<?php echo get_post_permalink(); ?>"><img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Imagem de capa do card"></a>
                       
                       <?php $post_tags = get_the_tags();
                          if ( $post_tags ) { ?>
                          <span>
                            <?php
                                echo $post_tags[0]->name; 
                              } else {
                                echo null;
                              }
                            ?>
                          </span>
                     
                     </div>
                     <div class="card-body">
                       <div class="tg">
                         <span>
                           <?php
                             if(get_the_tag_list()) {
                               echo get_the_tag_list('','</span><span>','');
                             }
                           ?>
                         </span>
                       </div>
                       <a class="card-title" href="<?php echo the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                       <a href="<?php the_permalink(); ?>" class="card-link"> <span>continuar lendo</span><span><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/arrow-right.svg" alt=""></span></a>
                     </div>
                   </div> 
                   <?php
                  }
                  wp_reset_postdata();
               }
               ?>
          
         

<!-- <span class="badge">
                      <?php
                        if(get_the_tag_list()) {
                          echo get_the_tag_list('','</span><span>','');
                        }
                      ?>
                    </span> -->

          <!-- <div class="card">
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
          </div> -->

          <!-- <div class="card">
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
          </div> -->
          
          
        </div>
      </section>

     <?php get_sidebar(); ?>

    </div>
  </main>



<?php get_footer(); ?>