<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?php bloginfo('name'); ?> </title>

  <!-- Custom fonts for this theme -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->

  
  <?php wp_head(); ?>

</head>

<body id="page-top">



  <!-- Navigation -->
  <nav class="navbar navbar-light text-dark  navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <!--<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>-->
      <img src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/logo_normal.png" width="280" height="auto" alt="">
      <button class="navbar-toggler navbar-toggler-right text-uppercase  bg-secondary text-dark rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger" href="equipe.php">EQUIPE</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger" href="#about">PROSTAS</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger" href="#contact">PROFISSÕES E CARREIRAS</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger" href="#portfolio">MATERIAS</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger" href="#portfolio">CONTATO</a>
          </li>-->
          <?php wp_nav_menu(
              array('theme_location' => 'header-meu',
                     'menu_class'     => 'navbar-nav ml-auto nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger'
              )
          ); ?>
         
          <li class="nav-item mx-0 mx-lg-1">
            <a href="#"  class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger fa fa-facebook color bg-info rounded-circle "  ></a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a href="#"  class="nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger js-scroll-trigger fa fa-instagram color bg-info rounded-circle" ></a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  