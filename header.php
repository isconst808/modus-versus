<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- <style>
      .header::before {
        background-image: url("<?php bloginfo('template_directory'); ?>/assets/img/svg/ruler.svg");
      }
    </style> -->
</head>

<body>
  <!-- Start Header -->
  <header class="header">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-3 col-sm-10 col-8">
          <div class="logo">
            <a href="">
              <span>Modus</span>
              <span class='small'>Versus</span>
            </a>
          </div>
        </div>
        <div class="col-lg-8 col-sm-1 col-2">
          <div class="top-menu-box">
            <button class="top-menu-btn">
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/svg/menu-button.svg" alt="menu">
            </button>
            <nav class="top-menu">
              <?php wp_nav_menu( array(
                'theme_location'  => 'primary',
                'container' => false
              ) ); ?>
            </nav>
          </div>
        </div>
        <div class="col-sm-1 col-2">
          <div class="search-block">
            <button class="search-btn">
              <span class="icon-search"></span>
            </button>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
  </header>
  <!-- Finish Header -->