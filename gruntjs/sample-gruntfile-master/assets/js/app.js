/* global jQuery,Modernizr */
(function ($) {
  var $articles = $('article');
  var INDICATOR = 'indicator-class-name';

  $.each($articles, function (i, el) {
    var $el = $(el);

    if ( ! $el.hasClass(INDICATOR))
      return;

    $el.animate({
      height: $(window).height() / 4,
      width: $(window).width() / 2
    });
  });
}(jQuery));