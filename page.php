<?php get_header(); ?>¨
  <div class="container page-content">
    <span class="titulo-post"><?php the_title(); ?></span><br />
    <hr />
    <div class="row">
      <div class="col">
        <span>
          <?php
            global $post;
            $post_slug = $post->post_name;

            $page = get_page_by_path($post_slug);
            $content = apply_filters('the_content', $page->post_content);
            echo $content;
          ?>
        </span>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
