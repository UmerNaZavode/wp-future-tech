<?php
$footer = get_field('footer', 'option');
$extra_menu = $footer['extra_menu'];
$socials = $footer['socials'];
$copyright = $footer['copyright'];
?>

<div class="footer__extra-menu">
  <ul class="footer__extra-menu-list">
    <?php foreach ($extra_menu as $item) : ?>
      <?php
      $text = $item['text'];
      $url = $item['url'];
      ?>
      <li class="footer__extra-menu-item">
        <a href="<?php echo $url; ?>" class="footer__extra-menu-link"><?php echo $text; ?></a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<div class="footer__soc1als soc1als">
  <ul class="soc1als__list">
    <?php foreach ($socials as $item) : ?>
      <?php
      $icon = $item['icon'];
      $url = $item['url'];
      ?>
      <li class="soc1als__item">
        <a href="<?php echo $url; ?>" class="soc1als__link" target="_blank">
          <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
<p class="footer__copyright"><?php echo $copyright; ?></p>
