<?php get_header(); ?>



    <section id="destaques">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="destaques">
              <div class="destaque slider">                
                <div class="owl-carousel slide-destaques owl-theme">
                  <?php
                    $args = array( 'cat' => 'brasil', 'posts_per_page' => 3 );

                    // The Query
                    $the_query = new WP_Query( $args );
 
                    // The Loop
                    $cont = 0;
                    if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                    
                          if($cont == 0){
                            echo '<div class="item active">';
                          }else{
                            echo '<div class="item">';
                          }
 
                        /* grab the url for the full size featured image */
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'imagem-carrossel'); 
  
                          echo '<a href="' . get_the_permalink() . '">';
                          echo '<img class="d-block" src="'.$featured_img_url.'" alt="">';
                          echo '<div class="carousel-caption d-block d-md-block"><h4>' . get_the_title() . '</h4></div>';
                          echo '</a>';
                          echo '</div>';
                          $cont++;
                      }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                      } else {
                      // no posts found
                    }
 
                  ?>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 d-lg-flex pl-0">
            <div class="destaques">


            <?php
                    $args = array( 'cat' => 'brasil', 'posts_per_page' => 2 );

                    // The Query
                    $the_query = new WP_Query( $args );
 
                    // The Loop
                    $cont = 0;
                    if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                    
                          echo '<div class="destaque">';
 
                        /* grab the url for the full size featured image */
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'imagem-carrossel'); 
  
                          echo '<a href="' . get_the_permalink() . '">';
                          echo '<img class="img-destaque" src="'.$featured_img_url.'" alt="">';
                          echo '<div class="caption"><h2>' . get_the_title() . '</h2></div>';
                          echo '</a>';
                          echo '</div>';
                          $cont++;
                      }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                      } else {
                      // no posts found
                    }
 
                  ?>



              <!-- <div class="destaque">
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
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="bd-example d-md-none">
      <div class="owl-carousel slide-mobile-destaques owl-theme">
        <?php
          $args = array( 'cat' => 'brasil', 'posts_per_page' => 3 );

          // The Query
          $the_query = new WP_Query( $args );

          // The Loop
          $cont = 0;
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post();
          
                if($cont == 0){
                  echo '<div class="item active">';
                }else{
                  echo '<div class="item">';
                }

              /* grab the url for the full size featured image */
              $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'imagem-carrossel'); 

                echo '<a href="' . get_the_permalink() . '">';
                echo '<img class="d-block" src="'.$featured_img_url.'" alt="">';
                echo '<div class="carousel-caption d-block d-md-block"><h4>' . get_the_title() . '</h4></div>';
                echo '</a>';
                echo '</div>';
                $cont++;
            }
              /* Restore original Post Data */
              wp_reset_postdata();
            } else {
            // no posts found
          }
        ?>            
      </div>
    </div>
    


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