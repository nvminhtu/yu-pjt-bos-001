
$(document).ready(function() {
  "use strict";

  var width, height, ratio;
  var new_height, new_width, equal_height;    
  
  $(window).on("ready resize", function () {
    // return equal height
    $("#instagram .slick-slide img").each(function() {
      width = $(this).data("width");
      height = $(this).data("height");
      ratio = width / height;
      
      if(ratio == 1) {
        equal_height = $(this).height();
      }
    });

    // load in second 2
    $("#instagram .slick-slide img").each(function() {
      width = $(this).data("width");
      height = $(this).data("height");
      ratio = width / height;

      if(ratio < 1) {
        $(this).height(equal_height);
        new_width = equal_height * ratio;
        $(this).width(new_width);
      }
    });
  }); // end on load/resize
 
});