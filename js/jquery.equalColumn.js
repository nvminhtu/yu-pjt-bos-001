/***
*** jQuery equal items
*** Author: Tu Nguyen
*** Website: minhtu.net
 ***/
(function($) {

  $.fn.equalColumn = function( options ) {

    // Establish our default settings
    var settings = $.extend({
      //setup options - according to requirement
      rows: 2
    }, options);

    var
      $item,
      itemLen = 0,
      rows = settings.rows;

    function setHeightBox(object){
      object.each(function(index, el) {
        $item = $(this).find('li');

        itemLen = $item.length;
        for( var i = -1, len = Math.ceil( itemLen / rows); ++ i < len; ){
          var itemArray = [];
          for(var j = -1; ++ j < rows;){
            itemArray.push( i * rows + j );
          }
          setItemColumn(itemArray);
        }
      });
    }

    function setItemColumn(itemNum){
      var txtMaxHeight = 0;
      var txtDescript = 0;
      var txtNote = 0;

      for( var i = 0; i < itemNum.length; i++){
        if($item.eq(itemNum[i]).find('.h-description').length) {
            txtDescript = $item.eq(itemNum[i]).find('.h-description').height() > txtDescript ? $item.eq(itemNum[i]).find('.h-description').height() : txtDescript;
        }
        if($item.eq(itemNum[i]).find('.take-note').length) {
            txtNote =  $item.eq(itemNum[i]).find('.take-note').height() > txtNote ? $item.eq(itemNum[i]).find('.take-note').height() : txtNote;
        }
        txtMaxHeight = $item.eq(itemNum[i]).height() > txtMaxHeight ? $item.eq(itemNum[i]).height() : txtMaxHeight;
      }
      for(i = 0; i < itemNum.length; i++){
        if($item.eq(itemNum[i]).find('.h-description').length) {
            $item.eq(itemNum[i]).find('.h-description').height(txtDescript);
        }
        if($item.eq(itemNum[i]).find('.take-note').length) {
            $item.eq(itemNum[i]).find('.take-note').height(txtNote);
        }
        //$item.eq(itemNum[i]).height(txtMaxHeight);
        $item.eq(itemNum[i]).css({
            marginBottom: '20px'
        });
      }
    }
    return this.each( function() {
      setHeightBox($(this));
    });

  };


}(jQuery));
