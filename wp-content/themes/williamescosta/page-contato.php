<?php get_header(); ?>
  <main id="contato" class="container">
    <div class="row">

      <section id="contact" class="col-12 col-md-8">
        <div class="contato">
          <h2><strong>Contato</strong></h2>
        </div>
        <ul>
          <li>
            <div class="contato">
              <p>
                Para mais informações sobre qualquer assunto inclusive anunciar no blog entre em contato, teremos o maior
                prazer em lhe atender. Entre em contato comigo no e-mail: <a
                  href="mailto:blogdowillamescosta@gmail.com">blogdowillamescosta@gmail.com</a> ou prencha o fomulário
                abaixo:
              </p>
            </div>
          </li>
          <li>
            <div class="contato">
              <h3>Endereço:</h3>
              <h6>Rua dr. Miguel nº 24, Centro - Parnamirim-PE</h6>
              <p class="tel">Telefone: (87) 3883-1694</p>
            </div>
          </li>
          <li>
            <div class="contato">
              <div class="col-md-6 p-0">
                <h3>Fale conosco</h3>
                <form>
                  <input type="text" name="nome" placeholder="Nome">
                  <input type="email" name="email" placeholder="E-mail">
                  <textarea name="msg" id="msg" placeholder="Mensagem"></textarea>
                  <button type="submit">Enviar</button>
                </form>
              </div>
            </div>
          </li>
        </ul>
        
      </section>

      <?php get_sidebar(); ?>
  </main>


<?php get_footer(); ?>