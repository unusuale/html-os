<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>HTMLOS-Player (Good stuff) ALPHA</title>
<link href="material.css"
      rel="stylesheet">
<script>

  function invoker() {

  // Video
  var video = document.getElementById("video");

  // Buttons
  var playButton = document.getElementById("play-pause");
  var muteButton = document.getElementById("mute");
  var fullScreenButton = document.getElementById("full-screen");

  // Sliders
  var seekBar = document.getElementById("seek-bar");
  var volumeBar = document.getElementById("volume-bar");


// Event listener for the play/pause button
playButton.addEventListener("click", function() {
  if (video.paused == true) {
    // Play the video
    video.play();

    // Update the button text to 'Pause'
    playButton.innerHTML = "<i class='material-icons'>pause_circle_outline</i>";
  } else {
    // Pause the video
    video.pause();

    // Update the button text to 'Play'
    playButton.innerHTML = "<i class='material-icons'>play_circle_outline</i>";
  }
});

// Event listener for the mute button
muteButton.addEventListener("click", function() {
  if (video.muted == false) {
    // Mute the video
    video.muted = true;

    // Update the button text
    muteButton.innerHTML = '<i class="material-icons">volume_mute</i>';
  } else {
    // Unmute the video
    video.muted = false;

    // Update the button text
    muteButton.innerHTML = '<i class="material-icons">volume_up</i>';
  }
});

// Event listener for the full-screen button
fullScreenButton.addEventListener("click", function() {
var marbobo = document.getElementById("videoview");
  if (marbobo.requestFullscreen) {
   marbobo.requestFullscreen();
  } else if (marbobo.mozRequestFullScreen) {
    marbobo.mozRequestFullScreen(); // Firefox
  } else if (marbobo.webkitRequestFullscreen) {
   marbobo.webkitRequestFullscreen(); // Chrome and Safari
  }
});
// Event listener for the seek bar
seekBar.addEventListener("change", function() {
  // Calculate the new time
  var time = video.duration * (seekBar.value / 500);

  // Update the video time
  video.currentTime = time;
});

// Update the seek bar as the video plays
video.addEventListener("timeupdate", function() {
  // Calculate the slider value
  var value = (500 / video.duration) * video.currentTime;

  // Update the slider value
  seekBar.value = value;
});

// Pause the video when the slider handle is being dragged
seekBar.addEventListener("mousedown", function() {
  video.pause();
});

// Play the video when the slider handle is dropped
seekBar.addEventListener("mouseup", function() {
  video.play();
});

// Event listener for the volume bar
volumeBar.addEventListener("change", function() {
  // Update the video volume
  video.volume = volumeBar.value;
});
}
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}
function chainload()
{
 
invoker();
}
</script>
 
<link rel="stylesheet" type="text/css" href="vp.css">
 
<link rel="stylesheet" type="text/css" href="../../usr/vp/style.css">
</head>
<body onload="chainload()">

<a id="goBack" href="javascript:window.history.back();">Back</a>


<div id="videoview" >
<div id="video-container">
  <!-- Video -->
  <video id="video" width="640" height="365">
    <source id="fuckinHotLolisLittleGirlsMakeMe" src="<?php echo $_SERVER['QUERY_STRING'];?>" type="video/mp4">
	<h1>Inevitable Bug happened.</h1> 
 </video>
  <!-- Video Controls -->
  <div id="video-controls">
    <button type="button" id="play-pause"><i class="material-icons">play_circle_outline</i></button>
    <input type="range" id="seek-bar" max="500" value="0" >
    <button type="button" id="mute"><i class="material-icons">volume_mute</i></button>
    <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
    <button type="button" id="full-screen"><i class="material-icons">fullscreen</i></button>
  </div>

 </div>
</div>	
</body>

</html>
