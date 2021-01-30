export default class Player {
  constructor() {
    this.rootElement = document.querySelector('.js-player');
    this.trackStatusElement = this.rootElement.querySelector('.js-track-status');
    this.trackTitleElement = this.rootElement.querySelector('.js-track-title');
    this.trackTimeElement = this.rootElement.querySelector('.js-track-time');
    let togglePlayButton = this.rootElement.querySelector('.js-toggle-play');
    this.playIcon = this.rootElement.querySelector('.js-play-icon');
    this.pauseIcon = this.rootElement.querySelector('.js-pause-icon');
    this.artworkElement = this.rootElement.querySelector('.js-artwork');

    this.playing = false;
    this.player = $('.radioplayer').radiocoPlayer();

    togglePlayButton.addEventListener('click', (event) => this.player.playToggle())

    this.player.event('audioLoaded', () => this.loaded())

    this.player.event('audioPlay', (e) => this.play(e))

    this.player.event('audioPause', (e) => this.pause(e))

    this.player.event('timeUpdate', (e) => this.timeUpdate(e));

    this.player.event('songChanged', (e) => this.songChanged(e))
  }

  loaded() {
    this.rootElement.classList.add('--shown');
    this.artworkElement.src = this.player.getArtwork(100,100,75);
  }

  play(event) {
    console.log('playing')
    // $('.status span').html('Playing at '+this.player.getTime()+' seconds<br />artwork: <a href="'++'" target="_blank">'+this.player.getArtwork(500,500,75)+'</a>');
    this.playIcon.classList.remove('--shown');
    this.pauseIcon.classList.add('--shown');
    this.trackStatusElement.innerText = 'Now Playing';
  }

  pause(event) {
    console.log('paused')
    // $('.status span').html('Paused at '+this.player.getTime() + ' seconds');
    this.pauseIcon.classList.remove('--shown');
    this.playIcon.classList.add('--shown');
    this.trackStatusElement.innerText = 'Listen Live';
  }

  timeUpdate(event) {
    console.log(event)
    // $('.seconds').html(e.newTime);
  }


  songChanged(event) {
    this.trackTitleElement.innerHTML = event.trackTitle;
    this.artworkElement.src = event.trackArtwork;
  }
}
