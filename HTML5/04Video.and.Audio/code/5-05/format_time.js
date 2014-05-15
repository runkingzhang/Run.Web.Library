function formatTime(seconds) {
  var seconds = Math.round(seconds);
  var minutes = Math.floor(seconds / 60);
  // Remaining seconds
  seconds = Math.floor(seconds % 60);
  // Add leading Zeros
  minutes = (minutes >= 10) ? minutes : "0" + minutes;
  seconds = (seconds >= 10) ? seconds : "0" + seconds;
  return minutes + ":" + seconds;
}