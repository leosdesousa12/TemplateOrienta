<!DOCTYPE html>
<html ng-app="app" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?php bloginfo('name'); ?> </title>

  <script type="text/javascript">
  var ajaxurl = "<?php echo admin_url('admin-ajax.php?_embed'); ?>";
  </script>

  <!-- Custom fonts for this theme 
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300&display=swap" rel="stylesheet">


  <?php wp_head(); ?>

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-light text-dark  navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class=" pr-0 mr-0 " href="<?php echo get_site_url(); ?>">
        <img class="text-center ml-0" src="<?php echo  get_stylesheet_directory_uri();?>/assets/img/logo_normal.png"
          width="280" height="auto" alt=""></a>
      <button
        class=" text-left ml-0 mt-2 navbar-toggler navbar-toggler-left text-uppercase  bg-secondary text-dark rounded"
        type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto pt-2 mr-0 pr-0 custom " style="width: 100% !important;">
          <?php wp_nav_menu(
              array('theme_location' => 'header-meu',
                     'menu_class'     => 'font-weight-bold text-nowrap navbar-nav ml-auto nav-link py-2 px-0 px-lg-2 rounded js-scroll-trigger'
              )
          ); ?>

          <a class="pt-1 mt-1 btn btn-outline-light btn-social mt-1 menu-principal mx-1 border-0 mt-1"
            href="https://www.facebook.com/orientaescolhaprofissionaledecarreiras/">
            <i class="fa  fa-facebook  " style="color: #fff; "></i>
          </a>

          <a class="pt-1 mt-1 btn btn-outline-light btn-social menu-principal mx-1 border-0 mt-1 "
            href="https://www.instagram.com/orientaescolhaprofissional/">
            <i class="fa fa-instagram  " style="color: white;"></i>
          </a>
        </ul>

      </div>
    </div>
  </nav>