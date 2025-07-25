document.addEventListener("DOMContentLoaded", function () {
  const rootSelector = '[data-js-video-player]';

  class VideoPlayer {
    constructor(rootElement) {
      this.rootElement = rootElement;
      this.selectors = {
        video: '[data-js-video-player-video]',
        panel: '[data-js-video-player-panel]',
        playButton: '[data-js-video-player-play-button]',
      };
      this.stateClasses = {
        isActive: 'is-active',
      };

      this.videoElement = this.rootElement.querySelector(this.selectors.video);
      this.panelElement = this.rootElement.querySelector(this.selectors.panel);
      this.playButtonElement = this.rootElement.querySelector(this.selectors.playButton);

      this.bindEvents();
    }

    onPlayButtonClick = () => {
      this.videoElement.play();
      this.videoElement.controls = true;
      this.panelElement.classList.remove(this.stateClasses.isActive);
    }

    onVideoPause = () => {
      this.videoElement.controls = false;
      this.panelElement.classList.add(this.stateClasses.isActive);
    }

    bindEvents() {
      if (this.playButtonElement && this.videoElement) {
        this.playButtonElement.addEventListener('click', this.onPlayButtonClick);
        this.videoElement.addEventListener('pause', this.onVideoPause);
      }
    }
  }

  document.querySelectorAll(rootSelector).forEach((element) => {
    new VideoPlayer(element);
  });
});

