;(function($){
  'use strict';
  $(window).on('resize',function() {
    var telWidth = $('.footer_tel').width(),
        wrapSec = $('#section_08 .inner').width(),
        centerIntro = (wrapSec - telWidth) / 2;
        centerIntro = centerIntro + 'px';
    $('.footer_tel').css({
      marginLeft: centerIntro
    });
  });
  $(document).ready(function() {
      $(window).trigger('resize');
  });
}(jQuery));
