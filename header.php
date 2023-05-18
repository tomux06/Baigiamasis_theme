<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .cards1 .container,
    .postas .container,
    .posts-back .container,
    .galerija-kok .container,
    .susisiekti .container {
      background: url("http://localhost/WordPress/wp-content/uploads/2023/05/body.jpg") no-repeat center;
      background-size: cover;

      width: 90%;
      padding-bottom: 100px;

      filter: drop-shadow(20px 30px 10px);


    }

    .menu .container {
      background: url('http://localhost/WordPress/wp-content/uploads/2023/05/body.jpg') no-repeat center;
      background-size: cover;
      width: 90%;
      padding-top: 100px;
      padding-bottom: 100px;

      filter: drop-shadow(20px 30px 10px);


    }
  </style>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  wp_head();
  ?>



</head>

<body>
  <header class="container-fluid d-flex align-items-center">

    <div class="container d-flex justify-content-between align-items-center">
      <p class="mb-0" style="color: black">Socialiniai tinklai:</p>

      <?php dynamic_sidebar('header-1'); ?>

      <ul class="list-unstyled d-flex mb-0">
        <li>
          <a href="https://facebook.com"> <img src="<?= get_template_directory_uri() . "/assets/images/fb.png" ?>" /> </a>
        </li>
        <li>
          <a href="https://instagram.com"><img src="<?= get_template_directory_uri() . "/assets/images/insta.png" ?>" /> </a>
        </li>
        <li>
          <a href="https://twitter.com"><img src="<?= get_template_directory_uri() . "/assets/images/twiter.png" ?>" /> </a>
        </li>
        <li>
          <a href="https://youtube.com"><img src="<?= get_template_directory_uri() . "/assets/images/youtube.png" ?>" /> </a>
        </li>
      </ul>
    </div>

  </header>




  <div class="menu container-fluid d-flex align-items-center">

    <div class="container d-flex justify-content-start">


      <?php
      class Custom_Menu_Walker extends Walker_Nav_Menu
      {
        // Modify the start level of the menu
        public function start_lvl(&$output, $depth = 0, $args = array())
        {
          $output .= '<ul class="nav list-unstyled d-flex mb-0">';
        }

        // Modify the end level of the menu
        public function end_lvl(&$output, $depth = 0, $args = array())
        {
          $output .= '</ul>';
        }

        // Modify the start of each menu item
        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
          $output .= '<li class="nav-item">';
          $output .= '<a class="mygtu myg-2" href="' . $item->url . '">' . '<span style="color:white">' . $item->title . '</span>' . '</a>';
        }

        // Modify the end of each menu item
        public function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
          $output .= '</li>';
        }
      }


      // Usage in the wp_nav_menu() function

      wp_nav_menu(
        array(
          'nav-menu' => 'primary-menu',
          'container' => '',
          'theme_location' => 'primary-menu',
          'menu_class' => 'nav-menu list-unstyled d-flex mb-0',

          'walker' => new Custom_Menu_Walker(),
        )
      );


      
      ?>


      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>



    </div>

  </div>