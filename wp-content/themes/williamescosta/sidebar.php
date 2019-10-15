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
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/clima.jpg" alt="">
        </div>
        <div id="populares">
          <div class="populares">
            <h2 class="mb-0"><span>Posts</span> populares</h2>
            <div class="card">
              <div class="card-image">
                <img class="card-img-top"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg"
                alt="Imagem de capa do card">
                <span>Política</span>
              </div>
              <div class="card-body">
                <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img class="card-img-top"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg"
                alt="Imagem de capa do card">
                <span>Economia</span>
              </div>
              <div class="card-body">
                <h5 class="card-title">Jovem de 18 anos é assassinado a facadas em Exu-PE por causa de rixas envolvendo drogas</h5>
              </div>
            </div>
            <div class="card">
              <div class="card-image">
                <img class="card-img-top"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/card4.jpg"
                alt="Imagem de capa do card">
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
            </div>
          </div>
        </div>

        <div id="tags">
          <div class="badges">
          
          <h2>Tags</h2>
<ul>
    <?php
    $tags = get_tags();
    if ( $tags ) :
        foreach ( $tags as $tag ) : ?>
            <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
            <!-- <h2>Tags</h2>
            <span class="badge">brasil</span>
            <span class="badge">economia</span>
            <span class="badge">nacional</span>
            <span class="badge">política</span>
            <span class="badge">nacional</span>
            <span class="badge">brasil</span>
            <span class="badge">economia</span> -->
          </div>
        </div>

        <div id="anuncio">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/anuncio.jpg" alt="">
        </div>

        <div id="facebook">
          <div class="facebook">
            <h2>Facebook</h2>
            <img class="img-fluid"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/fbembed.jpg" alt="">
          </div>
        </div>

        <div id="instagram">
          <div class="ig">
            <h2>Instagram</h2>
            <img class="img-fluid"src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ig.jpg" alt="">
          </div>
        </div>
      </section>

    </div>