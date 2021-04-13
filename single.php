<?php get_header(); ?>
<?php
  global $post;
  $author_id = $post->post_author;
?>

<div class="container page-content post">
  <div class="row">
    <div class="col header-post">
      <span class="titulo-post"><?php the_title(); ?></span><br />
      <span class="card-text">
        <i class="far fa-calendar"></i> Publicado em <?php the_time('d/m/Y') ?> às <?php the_time('H:i') ?> por <?php echo get_the_author_meta('display_name', $author_id); ?>
      </span>
      <hr />
    </div>
  </div>

  <div class="row">
    <div class="col">
      <?php the_content(); ?>
    </div>
  </div>
  <hr />

  <div class="row">
    <div class="col comments-post">
      <?php comments_template(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
