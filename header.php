<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo(get_template_directory_uri() . '/assets/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo(get_template_directory_uri() . '/assets/images/favicon.ico'); ?>" type="image/x-icon">
    <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="<?php echo(get_template_directory_uri() . '/assets/images/logo.jpg'); ?>" alt="" width="100" height="53" class="d-inline-block align-center">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarToggler">
          <div class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'header',
                  'container' => '',
                  'theme_location' => 'header',
                  'items_wrap' => '<li class="nav-link">%3$s</li>'
                )
              );
            ?>
          </div>

          <div class="navbar-nav navbar-brand social">
            <?php
              wp_nav_menu(
                array(
                  'menu' => 'social',
                  'container' => '',
                  'theme_location' => 'social',
                  'items_wrap' => '<li class="nav-link">%3$s</li>'
                )
              );
            ?>
          </div>
        </div>

      </div>
    </nav>