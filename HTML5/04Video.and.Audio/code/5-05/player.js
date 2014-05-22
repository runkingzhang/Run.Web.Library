$(function(){

  // Stop if HTML5 video isn't supported
  if (!document.createElement('video').canPlayType) {
    $("#video_controls").hide();
    return;
  }

  var video = document.getElementById("my_video");

  // Play/Pause ============================//
  $("#play_button").bind("click", function(){
    video.play();
  });

  $("#pause_button").bind("click", function(){
    video.pause();
  });

  $("#play_toggle").bind("click", function(){
    if (video.paused) {
      video.play();
      $(this).html("Pause");
    } else {
      video.pause();
      $(this).html("Play");
    }
  });

  // Play Progress ========================//
  $(video).bind("timeupdate", function(){
	var timePercent = (this.currentTime / this.duration) * 100;
	$("#play_progress").css({ width: timePercent + "%" });
  });

  // Load Progress ========================//
  $(video).bind("progress", function(){
	updateLoadProgress();
  });
  $(video).bind("loadeddata", function(){
	updateLoadProgress();
  });
  $(video).bind("canplaythrough", function(){
	updateLoadProgress();
  });
  $(video).bind("playing", function(){
	updateLoadProgress();
  });

  function updateLoadProgress() {
	if (video.buffered.length > 0) {
		var percent = (video.buffered.end(0) / video.duration) * 100;
		$("#load_progress").css({ width: percent + "%" });
	}
  }

});
