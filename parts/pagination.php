<!-- ===================================================
 breadcrumb.scss
 パンくずリストテンプレート
================================================== -->
<div class="pagination">
  <div class="pagination__list">
    <?php
    $args = array(
      'show_all' => false,
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'prev_text' => __('&#8636; 前へ'),
      'next_text' => __('次へ &#8640;'),
      'type' => 'plain',
      'before_page_number' => '',
      'after_page_number' => ''
    );

    echo paginate_links($args);
    ?>
  </div>
</div>