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
<header id="desktop-nav">

  
        <div class="logo">
          <a href="home">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logo.png" alt="">
          </a>
        </div>

      <nav class="navbar navbar-expand-md nav" role="navigation">
        <div class="container">
       <!-- Brand and toggle get grouped for better mobile display -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <?php
       wp_nav_menu( array(
           'theme_location' => 'menu-topo',
           'depth' => 2,
           'container' => 'div',
           'container_class' => 'collapse navbar-collapse',
           'container_id' => 'bs-example-navbar-collapse-1',
           'menu_class' => 'nav navbar-nav',
           'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
           'walker' => new WP_Bootstrap_Navwalker())
       );
       ?>
        <form action="<?php echo get_home_url(); ?>/?s=" class="form-inline my-2 my-lg-0">
          <div>
            <input class="form-control mr-sm-2" name="s" type="search" placeholder="BUSCA" aria-label="Search">
            <span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/busca.svg" alt=""></span>
          </div>
        </form>
   </div>
   
   </nav>






    
  </header>

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
    </nav>