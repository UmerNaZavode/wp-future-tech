<?php
$body = get_field('body');
$subtitle = $body['subtitle'];
$items = $body['items'];
$list = $body['list'];
?>

<div class="blog-details__info">
  <div class="blog-details__actions blog-actions full-vw-line full-vw-line--bottom full-vw-line--right">
    <ul class="blog-actions__list">
      <li class="blog-actions__item">
        <button class="blog-actions__button is-active" type="button">
          <span class="blog-actions__icon-wrapper">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.645 21.4107L11.6384 21.4071L11.6158 21.3949C11.5965 21.3844 11.5689 21.3693 11.5336 21.3496C11.4629 21.3101 11.3612 21.2524 11.233 21.1769C10.9765 21.0261 10.6132 20.8039 10.1785 20.515C9.31074 19.9381 8.15122 19.0901 6.9886 18.0063C4.68781 15.8615 2.25 12.6751 2.25 8.75C2.25 5.82194 4.7136 3.5 7.6875 3.5C9.43638 3.5 11.0023 4.29909 12 5.5516C12.9977 4.29909 14.5636 3.5 16.3125 3.5C19.2864 3.5 21.75 5.82194 21.75 8.75C21.75 12.6751 19.3122 15.8615 17.0114 18.0063C15.8488 19.0901 14.6893 19.9381 13.8215 20.515C13.3868 20.8039 13.0235 21.0261 12.767 21.1769C12.6388 21.2524 12.5371 21.3101 12.4664 21.3496C12.4311 21.3693 12.4035 21.3844 12.3842 21.3949L12.3616 21.4071L12.355 21.4107L12.3523 21.4121C12.1323 21.5289 11.8677 21.5289 11.6477 21.4121L11.645 21.4107Z" stroke="#666666" stroke-width="1.5" stroke-linejoin="round" />
            </svg>
          </span>
          <span>24.5k</span>
        </button>
      </li>
      <li class="blog-actions__item">
        <button class="blog-actions__button" type="button">
          <span class="blog-actions__icon-wrapper">
            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M28.6048 9.33898C28.9669 9.79452 29.1673 10.3864 29.1673 11C29.1673 11.6137 28.9669 12.2055 28.6048 12.6611C26.312 15.4625 21.093 20.9167 15.0007 20.9167C8.90831 20.9167 3.6894 15.4625 1.39658 12.6611C1.03444 12.2055 0.833984 11.6137 0.833984 11C0.833984 10.3864 1.03444 9.79452 1.39658 9.33898C3.6894 6.53751 8.90831 1.08333 15.0007 1.08333C21.093 1.08333 26.312 6.53751 28.6048 9.33898Z" stroke="#98989A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M15.0014 15.4072C17.4134 15.4072 19.3687 13.4339 19.3687 10.9998C19.3687 8.5657 17.4134 6.59246 15.0014 6.59246C12.5894 6.59246 10.6341 8.5657 10.6341 10.9998C10.6341 13.4339 12.5894 15.4072 15.0014 15.4072Z" stroke="#98989A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
          <span>50k</span>
        </button>
      </li>
      <li class="blog-actions__item">
        <button class="blog-actions__button" type="button">
          <span class="blog-actions__icon-wrapper">
            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.0384 14.4616L4.1719 11.7951C3.36454 11.4281 3.39898 10.2697 4.22673 9.95134L18.8999 4.30781C19.7087 3.99675 20.5033 4.79139 20.1922 5.60013L14.5487 20.2733C14.2303 21.1011 13.072 21.1355 12.705 20.3281L10.0384 14.4616ZM10.0384 14.4616L14.4231 10.077" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </span>
          <span>206</span>
        </button>
      </li>
    </ul>
  </div>
  <div class="blog-details__summary summary summary--2-cols">
    <dl class="summary__list">
      <?php foreach ($items as $item) : ?>
        <?php
        $key = $item['key'];
        $value = $item['value'];
        ?>
        <div class="summary__item">
          <dt class="summary__key"><?php echo $key; ?></dt>
          <dd class="summary__value"><?php echo $value; ?></dd>
        </div>
      <?php endforeach; ?>
      <div class="summary__item summary__item--wide">
        <dt class="summary__key"><?php echo $subtitle; ?></dt>
        <dd class="summary__value">
          <div class="table-of-contents">
            <ul class="table-of-contents__list">
              <?php foreach ($list as $item) : ?>
                <?php
                $list_item = $item['list_item'];
                ?>
              <li class="table-of-contents__item"><?php echo $list_item; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </dd>
      </div>
    </dl>
  </div>
</div>
