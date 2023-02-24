<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Photora</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600&family=Fraunces:wght@700;900&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>

</head>

<body>
  <!-- MAIN CONTAINER -->
  <div class="container">
    <!-- HEADER SECTION -->
    <header>
      <nav class="navbar">
        <a href="#" class="navbar-brand">
          <img src="<?php bloginfo('template_directory'); ?>/images/Photora-logo-white.png" alt="sunnyside logo" />
        </a>

        <?php
        wp_nav_menu(array(
          'theme_location' => 'top-menu',
          'container' => 'ul',
          'menu_class' => 'navbar-nav',

        )); ?>

        <!-- <ul class="navbar-nav">
          <li>
            <a href="#about" class="nav-link">About</a>
          </li>
          <li>
            <a href="#services" class="nav-link">Services</a>
          </li>
          <li>
            <a href="#projects" class="nav-link">Projects</a>
          </li>
        </ul> -->
        <button class="nav-toggle-btn">
          <span class="line one"></span>
          <span class="line two"></span>
          <span class="line three"></span>
        </button>
      </nav>
    </header>