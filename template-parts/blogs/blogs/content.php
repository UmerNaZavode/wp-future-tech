<?php
$body = get_field('body');
$title = $body['title'];
$info = $body['info'];
$desc = $body['desc'];
?>

<div class="blog-details__content">
  <div class="blog-details__intro full-vw-line full-vw-line--bottom full-vw-line--left">
    <h2 class="h6"><?php echo $title; ?></h2>
    <p><?php echo $info; ?></p>
  </div>
  <div class="blog-details__main expandable-content" data-js-expandable-content>
    <?php echo $desc; ?>
    <button class="blog-details__read-full-button button expandable-content__button" type="button" data-js-expandable-content-button>
      <span class="icon icon--gray-arrow-down">Read Full Blog</span>
    </button>
  </div>
</div>
