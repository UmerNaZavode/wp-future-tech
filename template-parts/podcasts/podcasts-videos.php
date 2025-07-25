<?php
$podcasts_videos = get_field('podcasts_videos');
$header_title = $podcasts_videos['header_title'];
$header_subtitle = $podcasts_videos['header_subtitle'];
$body = $podcasts_videos['body'];
?>

<section class="section" aria-labelledby="podcasts-videos-title">
  <header class="section__header">
    <div class="section__header-inner container">
      <div class="section__header-info">
        <p class="section__subtitle tag"><?php echo $header_title; ?></p>
        <h2 class="section__title" id="podcasts-videos-title"><?php echo $header_subtitle; ?></h2>
      </div>
    </div>
  </header>
  <div class="section__body">
    <ul class="bordered-grid bordered-grid--3-cols container">
      <?php foreach ($body as $item) : ?>
        <?php
        $video = $item['video'];
        $poster = $item['poster'];
        $video_duration = $item['video_duration'];
        $title = $item['title'];
        $description = $item['description'];
        $button_text = $item['button_text'];
        ?>

      <li class="bordered-grid__item">
        <div class="video-card">
          <div class="video-card__player video-player" data-js-video-player>
            <video class="video-player__video video-player__video--small" src="<?php echo $video; ?>" width="470" height="390" poster="<?php echo $poster; ?>" data-js-video-player-video></video>
            <div class="video-player__panel is-active" data-js-video-player-panel>
              <button class="video-player__play-button" type="button" aria-label="Play video" title="Play video" data-js-video-player-play-button>
                <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5625 29C0.5625 13.2944 13.2944 0.5625 29 0.5625C44.7056 0.5625 57.4375 13.2944 57.4375 29C57.4375 44.7056 44.7056 57.4375 29 57.4375C13.2944 57.4375 0.5625 44.7056 0.5625 29ZM41.4663 26.1318C43.7167 27.382 43.7167 30.6183 41.4663 31.8685L25.1248 40.9471C22.9377 42.1621 20.25 40.5807 20.25 38.0788V19.9215C20.25 17.4196 22.9377 15.8381 25.1248 17.0531L41.4663 26.1318Z" fill="white" />
                </svg>
              </button>
              <div class="video-player__duration"><?php echo $video_duration; ?></div>
            </div>
          </div>
          <div class="video-card__body">
            <h3 class="video-card__title h5"><?php echo $title; ?></h3>
            <div class="video-card__description">
              <p><?php echo $description; ?></p>
            </div>
          </div>
          <a class="video-card__link button" href="/">
            <span class="icon icon--yellow-arrow"><?php echo $button_text; ?></span>
          </a>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
