<?php get_header(); ?>


<div id="mapa"></div>

<div class="container menu_central">
  <div class="row">
    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_1',
              'container' => '',
              'theme_location' => 'central_1',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_2',
              'container' => '',
              'theme_location' => 'central_2',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_3',
              'container' => '',
              'theme_location' => 'central_3',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_4',
              'container' => '',
              'theme_location' => 'central_4',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_5',
              'container' => '',
              'theme_location' => 'central_5',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_6',
              'container' => '',
              'theme_location' => 'central_6',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_7',
              'container' => '',
              'theme_location' => 'central_7',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>

    <div class="col">
      <ul>
        <?php
          wp_nav_menu(
            array(
              'menu' => 'central_8',
              'container' => '',
              'theme_location' => 'central_8',
              'items_wrap' => '<li class="menu_central-item">%3$s</li>'
            )
          );
        ?>
      </ul>
    </div>
  </div>
</div>

<div class="container container-conceitos">
  <div class="row">
    <div class="col conceitos">
      <span>
        <?php
          $page = get_page_by_path('conceitos');
          $content = apply_filters('the_content', $page->post_content);
          echo $content;
        ?>
      </span>
    </div>
  </div>
</div>


<?php get_footer(); ?>

