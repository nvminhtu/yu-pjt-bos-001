$(document).ready(function() {
	// $('#instagram').jqinstapics({
	// 	"user_id": "188981642",
	// 	"access_token": "188981642.1677ed0.a5a0099658fa4c8da157ca4c3016e89e ",
	// 	"count": 10
	// });
	$('#list_footer').slick({
	  speed: 300,
	  slidesToShow: 4,
	  slidesToScroll: 4,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
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
	  slidesToScroll: 4,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
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
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  responsive: [
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});

	// #home blog list to be roll over
	$('#section_01 .list_01').slick({
	  speed: 300,
	  slidesToShow: 3,
	  slidesToScroll: 3,
	  responsive: [
		{
		  breakpoint: 890,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 640,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
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
	// $('.h_search').click(function(event) {
	// 	$('.header .search_box').slideToggle();
	// 	$('.header .share_box').hide();
	// 	if($(window).width()<1201){
	// 		$('.header .h_navi').hide();
	// 	}
	// 	event.stopPropagation();
	// });
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
	$('#submit').click(function(event) {
		$('#popup_area').fadeIn();
		$('body').css('overflow', 'hidden');
	});
	$('#btn_close_popup_area').click(function(event) {
		$('#popup_area').fadeOut();
		$('body').css({
			'-ms-overflow-x': 'hidden',
			'overflow-x': 'hidden',
			'-ms-overflow-y': 'scroll',
			'overflow-y': 'scroll'
		});
	});
	var url_share = window.location.href;
	$('.share_facebook').attr('href', 'https://www.facebook.com/sharer.php?u='+url_share);
	$('.share_twitter').attr('href', 'https://twitter.com/intent/tweet?url='+url_share);

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
				//$("#side").removeClass("side--fixed");
				//$("#side").addClass("side--bottom");
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
