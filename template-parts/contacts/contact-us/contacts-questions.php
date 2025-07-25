<?php
$contacts_questions = get_field('contacts_questions');
$icon = $contacts_questions['icon'];
$title = $contacts_questions['title'];
$description = $contacts_questions['description'];
$button_text = $contacts_questions['button_text'];
$accordion = $contacts_questions['accordion'];
?>

<div class="card container">
  <div class="card__preview">
    <div class="card__preview-main">
      <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
      <div class="card__preview-info">
        <h2 class="card__preview-title h3"><?php echo $title; ?></h2>
        <div class="card__preview-description">
          <p><?php echo $description; ?></p>
        </div>
      </div>
      <a class="card__preview-link button button--dark-gray" href="/">
        <span class="icon icon--yellow-arrow"><?php echo $button_text; ?></span>
      </a>
    </div>
  </div>
  <div class="card__body">
    <div class="accordion-group">
      <?php foreach ($accordion as $item) : ?>
        <?php
        $accordion_title = $item['accordion_title'];
        $accordion_desc = $item['accordion_desc'];
        ?>
        <div class="accordion tile">
          <details class="accordion__details" name="faq" open>
            <summary class="accordion__summary">
              <h4 class="accordion__title h6">
                <span role="term" aria-details="faq-1"><?php echo $accordion_title; ?></span>
              </h4>
            </summary>
          </details>
          <div class="accordion__content" id="faq-1" role="definition">
            <div class="accordion__content-inner">
              <div class="accordion__content-body">
                <p><?php echo $accordion_desc; ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
