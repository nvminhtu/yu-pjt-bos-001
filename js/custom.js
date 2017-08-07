$(document).ready(function() {
	$('#list_footer').slick({
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
	$('.magazin_sl').slick({
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});



	$('#feature .section_04 .list_03').slick({
	  speed: 300,
		infinite: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}]
	});

	$('.h_share').click(function(event) {
		$('.header .share_box').slideToggle();
		$('.header .search_box').hide();
		if($(window).width()<1201){
			$('.header .h_navi').hide();
		}
		event.stopPropagation();
	});
	$('.menu_icon').click(function(event) {
		$('.header .h_navi').slideToggle();
		$('.header .share_box').hide();
		$('.header .search_box').hide();
		event.stopPropagation();
	});
	$('.h_search').click(function(event) {
		$(this).addClass('active');
		event.stopPropagation();
		$('.h_search input.text').focus();
	});
	$('.header .h_search .close').click(function(event) {
		$('.header .h_search').removeClass('active');
		event.stopPropagation();
	});
	$('body').click(function(event) {
		if($(window).width()<1200){
			$('.header .h_navi').slideUp();
		}
		$('.header .search_box').slideUp();
		$('.header .share_box').slideUp();
		$('.header .h_search').removeClass('active');
	});
	$('.header .search_box input').click(function(event) {
		event.stopPropagation();
	});

	var url_share = window.location.href;
	$('.share_facebook').attr('href', 'https://www.facebook.com/sharer.php?u='+url_share);
	$('.share_twitter').attr('href', 'https://twitter.com/intent/tweet?url='+url_share);

	/*TNT CUSTOM JS FOR CONTACT FORM*/
	
	
	function checkNotNullInput()
	{
		var check = true;
		
		var flagInput = true,
			flagTextArea = true;

		/*$('.form_contact .wpcf7-validates-as-required').each(function(index, el) {
			if($(this).val() == "") {
			  	flagInput = false;
			}	
		}); */

		$('.form_contact input[type="text"]').each(function(index, el) {
			if($(this).hasClass('wpcf7-validates-as-required') === true) {
				if($(this).val() == "") {
			  		flagInput = false;
				}
			}
		});
		

		$('.form_contact input[type="email"]').each(function(index, el) {
			if($(this).hasClass('wpcf7-validates-as-required') === true) {
				if($(this).val() == "") {
			  		flagInput = false;
				}
			}
		});

		$('.form_contact textarea').each(function(index, el) {
			if($(this).hasClass('wpcf7-validates-as-required') === true) {
				if($(this).val() == "") {
			  		flagInput = false;
				}
			}
		});

		// put a flag = false, means all checkboxs are not checked
        var flagCB = false,
        	hasRequired = false;

        $('.form_contact .checkb').each(function(index, el) {
        	var cbItems = $(this).find('.wpcf7-checkbox');
        	var boolCB = false;
        	if(cbItems.hasClass('wpcf7-validates-as-required') === true)
        	{
        		cbItems.each(function(index2, el2) {
	            	//if one of checkboxes is checked, flag = true
		            if($(this).find('input[type=checkbox]').is(':checked') === true) {
		                boolCB = true;
		            }
	       		 });
        		flagCB = boolCB;
        		hasRequired = true;
        	}
        });
        
        // check checkBox is required or not
		if(hasRequired === true) {
			
			// if the checkboxes was not checked
			if(flagCB === true && flagInput === true){
	            check = true;
	        }
	        else {
	        	check = false;
	        }

		} else {
			if(flagInput === true) {
				check = true;
			} else {
				check = false;
			}
		}
       

		return check;
	}

	setInterval(function(){
		var checkNotNUll = true;
		checkNotNull = checkNotNullInput();
		if(checkNotNull == true)
		{
			$('.form_contact input.wpcf7-submit').attr('value','送信');
		}
		else
		{
			$('.form_contact input.wpcf7-submit').attr('value','未入力の項目があります');
		}
	}, 500);


	/*END TNT CUSTOM JS FOR CONTACT FORM*/

});

// load slide gallery for instagram position
$(document).ready(function() {
	$('#instagram').slick({
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true
		  }
		},
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
});


$(function(){
	$(window).on("scroll", function() {
		fsCheakFotterPos();
	});
	function fsCheakFotterPos(){
		var xPageHeight = $(document).height() - 500;
		var xPosition = $(window).height() + $(window).scrollTop();
		if($(this).scrollTop() > 490){
			if ((xPageHeight - xPosition) / xPageHeight >= 0) {
				$("#side").addClass("side--fixed");
			}else{
			}
		}else{
			$("#side").removeClass("side--fixed");
			$("#side").removeClass("side--bottom");
		}

		//some pages don't have bottom list
		if( $('#list_footer').length ) {
			if(xPosition>$('#list_footer').offset().top){
			 $("#side").removeClass('side--fixed');
			 $("#side").addClass("side--bottom");
			} else {
				 $("#side").removeClass("side--bottom");
			}
		}



	};
});


$(window).bind('scroll',function(){
	  if ($(this).scrollTop() >300) {
		 $('#sticky_menu_footer').fadeIn();
	 }
	 else{
	   $('#sticky_menu_footer').fadeOut();
	 }

});
