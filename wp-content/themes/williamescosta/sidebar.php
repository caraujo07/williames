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
      <a href="https://www.accuweather.com/pt/br/parnamirim/40329/weather-forecast/40329" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1509924419437" class="aw-widget-current"  data-locationkey="40329" data-unit="c" data-language="pt-br" data-useip="false" data-uid="awcc1509924419437"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
</div>
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
            <li><a class="badge" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
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
          
		 <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/239a213f055c5b54b43686e973e57ea1.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

			</div>
          </div>
        </div>
      </section>

    </div>