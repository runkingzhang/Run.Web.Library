$(function(){

  // Stop if HTML5 video isn't supported
  if (!document.createElement('video').canPlayType) {
    $("#video_controls").hide();
    return;
  }

  var video = document.getElementById("my_video");

});
