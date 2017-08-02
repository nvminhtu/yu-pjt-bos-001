// anchor in page
$(document).ready(function() {
    "use strict";
    $(function() {
        $('a[href^="#"]').click(function() {
			if($(this).hasClass("ui-state-default")){
			}
			else{
				if ($($(this).attr('href')).length) {
                var p = $($(this).attr('href')).offset();
					if ($(window).width() > 768) {
						$('html,body').animate({ scrollTop: p.top - 90 }, 200);
					} else {
						$('html,body').animate({ scrollTop: p.top - 90 }, 200);
					}
				}
				return false;
			}
            
        });
    });
});

