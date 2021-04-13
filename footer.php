    <?php wp_footer(); ?>

    <footer class="footer">
      <span>Copyright © Todos os direitos reservados. 2021. Criado por <a href="https://eduardoedson.github.io">Eduardo Edson</a></span>
      <div class="footer-social">
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
      <img src="<?php echo(get_template_directory_uri() . '/assets/images/flor_marrom.png'); ?>" alt="" width="45" height="45">

      <button id="btnTopo" title="Ir para o topo"><i class="fa fa-angle-up" aria-hidden="true"></i></button>
    </footer>
  </body>
</html>