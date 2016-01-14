var hotsite = document.querySelector('.hotsite');
var video = document.querySelector('.video');
var fechar = document.querySelector('.fecharHot');
var codVideo = document.querySelector('#player');

fechar.onclick = function(){
  hotsite.remove(video);
}




var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";

var firstScriptTag = document.getElementsByTagName('script')[0];

firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;






  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '540',
      width: '960',
      videoId: codVideo.getAttribute("data-video"),
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
    console.log('Cod: '+codVideo.getAttribute('data-video'));
  }



   
function onPlayerReady(event) {
  event.target.playVideo();
}

function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.ENDED) {
    hotsite.remove(video);
  }
}

function stopVideo() {
  player.stopVideo();
}
