<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

  <title>Home</title>

  <!-- Wordpress Head -->
  <?php wp_head(); ?>
</head>

<body>

  <header>
  
      <nav id="desktop-nav">
        <div class="logo">
          <a href="home">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="">
          </a>
        </div>
        <div class="nav">
            <ul>
            <?php wp_nav_menu( array( 'theme_location' => 'menu-topo' ) ); ?>
              <!-- <li class="nav-item">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Editorias
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Brasil</a>
                  <a class="dropdown-item" href="#">Carnaval</a>
                  <a class="dropdown-item" href="#">Carros</a>
                  <a class="dropdown-item" href="#">Ciência</a>
                  <a class="dropdown-item" href="#">Cultura</a>
                  <a class="dropdown-item" href="#">Economia</a>
                  <a class="dropdown-item" href="#">Educação</a>
                  <a class="dropdown-item" href="#">Especiais</a>
                  <a class="dropdown-item" href="#">Esporte</a>
                  <a class="dropdown-item" href="#">Gente</a>
                  <a class="dropdown-item" href="#">Justiça</a>
                  <a class="dropdown-item" href="#">Mundo</a>
                  <a class="dropdown-item" href="#">Natureza</a>
                  <a class="dropdown-item" href="#">Paladar</a>
                  <a class="dropdown-item" href="#">Polícia</a>
                  <a class="dropdown-item" href="#">Política</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cidades
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Araguaína</a>
                  <a class="dropdown-item" href="#">Arapoema</a>
                  <a class="dropdown-item" href="#">Araripina</a>
                  <a class="dropdown-item" href="#">Arcoverde</a>
                  <a class="dropdown-item" href="#">Bodocó</a>
                  <a class="dropdown-item" href="#">Brasília</a>
                  <a class="dropdown-item" href="#">Cabrobó</a>
                  <a class="dropdown-item" href="#">Caruaru</a>
                  <a class="dropdown-item" href="#">Exú</a>
                  <a class="dropdown-item" href="#">Garanhuns</a>
                  <a class="dropdown-item" href="#">Goiânia</a>
                  <a class="dropdown-item" href="#">Juazeiro</a>
                  <a class="dropdown-item" href="#">Lagoa Grande</a>
                  <a class="dropdown-item" href="#">Olinda</a>
                  <a class="dropdown-item" href="#">Ouricuri</a>
                  <a class="dropdown-item" href="#">Palmas</a>
                  <a class="dropdown-item" href="#">Parnamirim</a>
                  <a class="dropdown-item" href="#">Petrolina</a>
                  <a class="dropdown-item" href="#">Recife</a>
                  <a class="dropdown-item" href="#">Salgueiro</a>
                  <a class="dropdown-item" href="#">Santa Maria</a>
                  <a class="dropdown-item" href="#">Serra Talhada</a>
                  <a class="dropdown-item" href="#">Terra Nova</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Seu estado
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Bahia</a>
                  <a class="dropdown-item" href="#">Ceará</a>
                  <a class="dropdown-item" href="#">Distrito Federal</a>
                  <a class="dropdown-item" href="#">Goiás</a>
                  <a class="dropdown-item" href="#">Maranhão</a>
                  <a class="dropdown-item" href="#">Pará</a>
                  <a class="dropdown-item" href="#">Paraíba</a>
                  <a class="dropdown-item" href="#">Pernambuco</a>
                  <a class="dropdown-item" href="#">Tocantins</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Serviço
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="servico">Hospitais</a>
                  <a class="dropdown-item" href="#">Hotéis</a>
                  <a class="dropdown-item" href="#">Restaurantes</a>
                  <a class="dropdown-item" href="#">Telefones úteis</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato" title="Contato">Contato</a>
              </li> -->
            </ul>
          <form action="<?php echo get_home_url(); ?>/?s=" class="form-inline my-2 my-lg-0">
            <div>
              <input class="form-control mr-sm-2" name="s" type="search" placeholder="BUSCA" aria-label="Search">
              <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.svg" alt=""></span>
            </div>
          </form>
        </div>
      </nav>


    <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0" id="mobile-nav">
      <a class="navbar-brand pl-3" href="home"><img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-mobile.png"
          alt="Blog Williames Costa"></a>
      <button class="navbar-toggler pr-3" type="button" onclick="slideToggle()">
        <div>
          <span>Menu</span>
          <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/menu-hamburger.svg"></span>
        </div>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="btnclose" onclick="slideToggle()"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/close.svg" alt=""></div>

        <div class="mt-3">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo-vertical.png" alt="">
        </div>

        <form action="<?php echo get_home_url(); ?>/?s=" class="form-inline my-2 my-lg-0 container">
          <div>
            <input class="form-control mr-sm-2" name="s" type="search" placeholder="Refazer busca..." aria-label="Search">
            <button type="submit"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/search.svg" alt=""></button>
          </div>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Editorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Seu Estado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="servico">Serviço</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato">Contato</a>
          </li>
        </ul>

        <div class="social">
          <h5>Nossas redes sociais</h5>
          <ul>
            <li><a href="#"></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/fb.svg" alt=""></li>
            <li><a href="#"></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Instagram.svg" alt=""></li>
            <li><a href="#"></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/tt.svg" alt=""></li>
            <li><a href="#"></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/wpp.svg" alt=""></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>