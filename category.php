<?php get_header(); ?>¨
  <div class="container page-content">
    <h2 class="titulo-categorias"><?php single_cat_title(); ?></h2>
    <hr />
    <div class="row">
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-xs-12 col-lg-3">
          <div class="card" style="width: 18rem;">
            <?php echo the_post_thumbnail('thumbnail', ['class' => 'card-img-top', 'title' => 'Thumbnail']); ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><i class="far fa-calendar"></i> <?php the_time('d/m/Y') ?></p>
              <a href="<?php the_permalink(); ?>">Ler mais</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

      <?php if (!have_posts()) : ?>
        <span class="categoria-empty">Nenhum post encontrado</span>
      <?php endif; ?>

    </div>
  </div>
<?php get_footer(); ?>
