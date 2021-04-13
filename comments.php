<div class="container comentarios">
  <div class="row">
    <div class="col">
      <?php
        if(comments_open()) {
          $fields =  array(
            'author' =>
              '<p class="comment-form-author"><div class="form-group"><label for="author">' . __('Nome', 'domainreference') . '</label> ' .
              ($req ? '<span class="required">*</span>' : '') .
              '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
              '" ' . $aria_req . ' /></div></p>',
            'email' =>
              '<p class="comment-form-email"><div class="form-group"><label for="email">' . __('Email', 'domainreference') . '</label> ' .
              ( $req ? '<span class="required">*</span>' : '' ) .
              '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr($commenter['comment_author_email']) .
              '" ' . $aria_req . ' /></div></p>');
          $comments_args = array(
          'fields' => apply_filters('comment_form_default_fields', $fields),
          'comment_field' =>  '<p class="comment-form-comment"><div class="form-group"><label for="comment">' . _x('Comment', 'noun') .
                              '</label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true">' .
                              '</textarea></div></p>', 'comment_notes_after' => ' ');
          comment_form($comments_args);
        }
      ?>
      <hr />
      <?php wp_list_comments(); ?>
    </div>
  </div>
</div>