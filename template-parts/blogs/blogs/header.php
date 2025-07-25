<?php
$header = get_field('header');
$image = $header['image'];
$title = $header['title'];
?>

<header class="blog-details__banner" style="--bgImg: url('./../../assets/banner.jpg')">
  <div class="blog-details__banner-inner container">
    <h1 class="blog-details__title" id="blog-details-title"><?php echo $title; ?></h1>
  </div>
</header>
