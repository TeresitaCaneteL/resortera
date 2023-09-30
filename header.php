<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?><?php if (wp_title("", false)) {
                                    echo "-";
                                  } ?><?php wp_title(''); ?></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <meta name="description" content="<?php bloginfo("description") ?>">
  <link rel="stylesheet" href="custom.css">
  <!---favicon-->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <!--etiquetas movil ios-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Resotera">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.jpg" />
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <!--etiquetas movil android-->
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#333333">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/icono.png" />

  <?php wp_head() ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" <?php body_class() ?>>


  <!-- page Navigation -->
  <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top is-sticky-on" data-spy="affix" data-offset-top="10">
    <div class="container ">
      <a class="navbar-brand" href="#">
        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>
        <img src="assets/imgs/resortera-logo-.png" alt="">
      </a>
      <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php wp_nav_menu(array(
        'theme_location'     => 'menu_principal',
        'container_class'    => 'collapse navbar-collapse',
        'container_id'       => 'navbarSupportedContent',
        'menu_class'         => 'navbar-nav ml-auto'
      )) ?>

    </div>
  </nav>
  <!-- End Of Second Navigation -->