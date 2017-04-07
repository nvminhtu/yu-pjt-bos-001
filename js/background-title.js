;(function($){
  'use strict';
    $.Index = (function() {

      function init(){
        setDataBG();
      }

      function setDataBG(){
        var current = 0;
        var $bgtitle = $('#title-background');
        var bgPC = $bgtitle.data('pc'),
            bgTB = $bgtitle.data('tb'),
            bgSP = $bgtitle.data('sp');
        console.log(bgPC);
        $('#title-background').css("background", bgPC);
        console.log('test');
      }

      return {
        init: init
      };
    })();


  $(function(){
    $.Index.init();
  });



}(jQuery));