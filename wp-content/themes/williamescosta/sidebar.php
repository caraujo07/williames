<section class="col-12 col-md-4">

  <div id="sobre">
    <div class="card">
      <h2><span>Sobre</span> o editor</h2>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/wc.jpg" class="card-img-top" alt="Willames Costa">
      <div class="card-body">
        <h5 class="card-title">Wíllames Costa</h5>
        <h6 class="card-title subtitle">Editor</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
      </div>
    </div>
  </div>

  <div id="anuncio">
    <div class="box-widget">
      <a href="https://www.accuweather.com/pt/br/parnamirim/40329/weather-forecast/40329" class="aw-widget-legal"></a>
      <div id="awcc1509924419437" class="aw-widget-current"  data-locationkey="40329" data-unit="c" data-language="pt-br" data-useip="false" data-uid="awcc1509924419437"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
    </div>
  </div>

  <div id="populares">
    <div class="populares">
      <h2 class="mb-0"><span>Posts</span> populares</h2>

  

    <?php $pc = new WP_Query('posts_per_page=5&cat=pernambuco'); ?>
      <?php while ($pc->have_posts()) : $pc->the_post(); ?>
        <a href="<?php echo post_permalink(); ?>"  title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
          <div class="card">
            <div class="card-image">
              <?php
                if (get_the_post_thumbnail()) {
                    the_post_thumbnail('imagem-chamada', array('class' => 'img-fluid'));
                    }
              ?>  
              
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
              <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
            </div>
          </div>
        </a>
              <?php endwhile; ?>
          

      
        
          
        
        
     
<!--
      <div class="card">
        <div class="card-image">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg" alt="Imagem de capa do card" />
          <span>Economia</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
        </div>
      </div>

      <div class="card">
        <div class="card-image">
          <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg" alt="Imagem de capa do card" />
            <span>Brasil</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
        </div>
      </div>

      <div class="card">
        <div class="card-image noimg">
          <span>Brasil</span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
        </div>
      </div> -->
    </div>
  </div>

  <div id="tags">
    <div class="badges">
      <h2>Tags</h2>
      <ul>
      <?php $tags = get_tags();
        if ( $tags ) :
          foreach ( $tags as $tag ) : ?>
          <li>
            <a class="badge" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
          </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>      

  <div id="anuncio">
    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/anuncio.jpg" alt="">
  </div>

  <div id="facebook">
    <div class="facebook">
      <h2>Facebook</h2>
      <div class="box-widget" style="text-align:center;">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-like-box" data-href="https://www.facebook.com/BlogWillamesCosta" data-width="292" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
      </div>		 
    </div>
  </div>

  <div id="instagram">
    <div class="ig">
      <h2>Instagram</h2>
      <div class="box-widget">      
      <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/239a213f055c5b54b43686e973e57ea1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
    </div>
  </div>

</section>
