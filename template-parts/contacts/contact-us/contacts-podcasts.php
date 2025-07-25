<?php
$contacts_podcasts = get_field('contacts_podcasts');
$icon = $contacts_podcasts['icon'];
$title = $contacts_podcasts['title'];
?>

<div class="list__item">
  <div class="card container">
    <div class="card__preview">
      <div class="card__review-main">
        <img src="<?php echo $icon['url'];?>"  alt="<?php echo $icon['alt']; ?>" />
        <div class="card__preview-info">
          <h2 class="card__preview-title"><?php echo $title; ?></h2>
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/contacts/contact-us/form'); ?>
  </div>
</div>
