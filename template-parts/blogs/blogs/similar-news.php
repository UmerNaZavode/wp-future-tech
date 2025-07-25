<?php
$similar_news = get_field('similar_news');
$title = $similar_news['title'];
$button = $similar_news['button'];
$items = $similar_news['items'];
?>

<div class="blog-details__news news container">
  <header class="news__header">
    <h2 class="news__title h4"><?php echo $title; ?></h2>
    <a href="/" class="news__link button">
      <span class="icon icon--yellow-arrow"><?php echo $button; ?></span>
    </a>
  </header>
  <ul class="news__list">
    <?php foreach ($items as $item) : ?>
      <?php
      $image = $item['image'];
      $title = $item['title'];
      $subtitle = $item['subtitle'];
      $button_text = $item['button_text'];
      ?>
      <li class="news__item">
        <article class="news-card">
        <img src="<?php echo $image['url'];?>"  alt="<?php echo $image['alt']; ?>" />
          <div class="news-card__body">
            <h2 class="news-card__title h6"><?php echo $title; ?></h2>
            <div class="news-card__description">
              <p><?php echo $subtitle; ?></p>
            </div>
          </div>
          <div class="news-card__controls">
            <div class="news-card__actions blog-actions">
              <ul class="blog-actions__list">
                <li class="blog-actions__item">
                  <button class="blog-actions__button" type="button">
                    <span class="blog-actions__icon-wrapper">
                      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z" stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
                      </svg>
                    </span>
                    <span>2.2k</span>
                  </button>
                </li>
                <li class="blog-actions__item">
                  <button class="blog-actions__button" type="button">
                    <span class="blog-actions__icon-wrapper">
                      <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                    <span>60</span>
                  </button>
                </li>
              </ul>
            </div>
            <a href="/" class="news-card__link button">
            <span class="icon icon--yellow-arrow"><?php echo $button_text; ?></span>
            </a>
          </div>
        </article>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
