;(function($){
  'use strict';
    $.Index = (function() {

      function init(){
        setLineHeight();
      }

      function setLineHeight(){
         var items_per_rows_1 = $('#dataprice_1').data('rows');
         var items_per_rows_2 = $('#dataprice_2').data('rows');
         var items_per_rows_3 = $('#dataprice_3').data('rows');

         var winWidth = $(window).width();
         if(winWidth > 890) {
          //  $('#dataprice_1').equalColumn({
          //      rows: items_per_rows_1
          //  });

          //  $('#dataprice_2').equalColumn({
          //      rows: items_per_rows_2
          //  });

            $('#dataprice_3').equalColumn({
                rows: items_per_rows_3
            });
         } else {
           $('#dataprice_1').removeAttr( 'style' );
           $('#dataprice_2').removeAttr( 'style' );
           $('#dataprice_3').removeAttr( 'style' );
         }
      }

      return {
        init: init
      };
    })();


  $(function(){
    $.Index.init();
  });



}(jQuery));
