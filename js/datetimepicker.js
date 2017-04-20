
function check_weekdays(date) {
	"use strict"; 
	var a = true;
	if(date==="Sat"||date==="Sun"){
		a = false;
	}
    return a ;
}

$("body").click(function(event) {
	$(".popup_time").fadeOut();
});

$(".popup_time").click(function(e) {
	e.stopPropagation();
});

$(document).ready(function() {
   "use strict"; 
	$('input[name="date_01"]').on('click touch touchstart', function (e) {
		e.stopPropagation();
		$("#popup_time01").fadeIn();
		$("#popup_time02").fadeOut();
		$("#popup_time03").fadeOut();
	});
	$('input[name="date_02"]').on('click touch touchstart', function (e) {
		e.stopPropagation();
		$("#popup_time02").fadeIn();
		$("#popup_time01").fadeOut();
		$("#popup_time03").fadeOut();
	});
	$('input[name="date_03"]').on('click touch touchstart', function (e) {
		e.stopPropagation();
		$("#popup_time03").fadeIn();
		$("#popup_time01").fadeOut();
		$("#popup_time02").fadeOut();
	});
});


/* script date col01 */
$(function() {
"use strict";
	 
    $("#col01_datepicker" ).datepicker({ 
		minDate: 0,
	 	onSelect: function() {       
		var seldate = $(this).datepicker('getDate').toDateString().split(' ');
		var check = check_weekdays(seldate[0]);
			if(check===false){
					$('#contact_col01_select_time01 .wd').attr("hidden","hidden");
					$("#contact_col01_select_time02 .wd").attr("hidden","hidden");
					var check_time_select01 = $('#contact_col01_select_time01').val();
					var check_time_select02 = $('#contact_col01_select_time02').val();
					if(check_time_select01==="17:00"||check_time_select01==="18:00"||check_time_select01==="19:00"||check_time_select01==="20:00"){
						$('#contact_col01_select_time01').val("10:00");
					}
					if(check_time_select02==="17:00"||check_time_select02==="18:00"||check_time_select02==="19:00"||check_time_select02==="20:00"){
						$('#contact_col01_select_time02').val("10:00");
					}
			}
				else{
					$('#contact_col01_select_time01 .wd').removeAttr("hidden");
					$("#contact_col01_select_time02 .wd").removeAttr("hidden");
			}
       }
	});
	$("#col01_done").click(function(){
		 var date = $("#col01_datepicker").datepicker("getDate");
		 var col_date = $.datepicker.formatDate("yy-mm-dd", date); 
		 var col_time01 = $('#contact_col01_select_time01').val();
		 var col_time02 = $('#contact_col01_select_time02').val();
		 if(col_time02===null){col_time02="";}
		 $("#popup_time01").fadeOut();
		 $('input[name="date_01"]').val(col_date + " " + col_time01 + "~" + col_time02);
	});
	
/* script date col02 */
    $("#col02_datepicker" ).datepicker({ 
		minDate: 0,
	 	onSelect: function() {       
		var seldate = $(this).datepicker('getDate').toDateString().split(' ');
		var check = check_weekdays(seldate[0]);
			if(check===false){
					$("#contact_col02_select_time01 .wd").attr("hidden","hidden");
					$("#contact_col02_select_time02 .wd").attr("hidden","hidden");
					var check_time_select01 = $('#contact_col02_select_time01').val();
					var check_time_select02 = $('#contact_col02_select_time02').val();
					if(check_time_select01==="17:00"||check_time_select01==="18:00"||check_time_select01==="19:00"||check_time_select01==="20:00"){
						$('#contact_col02_select_time01').val("10:00");
					}
					if(check_time_select02==="17:00"||check_time_select02==="18:00"||check_time_select02==="19:00"||check_time_select02==="20:00"){
						$('#contact_col02_select_time02').val("10:00");
					}
			}
				else{
					$("#contact_col02_select_time01 .wd").removeAttr("hidden");
					$("#contact_col02_select_time02 .wd").removeAttr("hidden");
			}
       }
	});
	$("#col02_done").click(function(){
		 var date = $("#col02_datepicker").datepicker("getDate");
		 var col_date = $.datepicker.formatDate("yy-mm-dd", date); 
		 var col_time01 = $('#contact_col02_select_time01').val();
		 var col_time02 = $('#contact_col02_select_time02').val();
		 if(col_time02===null){col_time02="";}
		 $("#popup_time02").fadeOut();
		 $('input[name="date_02"]').val(col_date + " " + col_time01 + "~" + col_time02);
	});
	
/* script date col03 */
    $("#col03_datepicker" ).datepicker({ 
		minDate: 0,
	 	onSelect: function() {       
		var seldate = $(this).datepicker('getDate').toDateString().split(' ');
		var check = check_weekdays(seldate[0]);
			if(check===false){
					$("#contact_col03_select_time01 .wd").attr("hidden","hidden");
					$("#contact_col03_select_time02 .wd").attr("hidden","hidden");
					var check_time_select01 = $('#contact_col03_select_time01').val();
					var check_time_select02 = $('#contact_col03_select_time02').val();
					if(check_time_select01==="17:00"||check_time_select01==="18:00"||check_time_select01==="19:00"||check_time_select01==="20:00"){
						$('#contact_col03_select_time01').val("10:00");
					}
					if(check_time_select02==="17:00"||check_time_select02==="18:00"||check_time_select02==="19:00"||check_time_select02==="20:00"){
						$('#contact_col03_select_time02').val("10:00");
					}
			}
				else{
					$("#contact_col03_select_time01 .wd").removeAttr("hidden");
					$("#contact_col03_select_time02 .wd").removeAttr("hidden");
			}
       }
	});
	$("#col03_done").click(function(){
		 var date = $("#col03_datepicker").datepicker("getDate");
		 var col_date = $.datepicker.formatDate("yy-mm-dd", date); 
		 var col_time01 = $('#contact_col03_select_time01').val();
		 var col_time02 = $('#contact_col03_select_time02').val();
		 if(col_time02===null){col_time02="";}
		 $("#popup_time03").fadeOut();
		 $('input[name="date_03"]').val(col_date + " " + col_time01 + "~" + col_time02);
	});

});



$(document).ready(function() {
   "use strict"; 
	$('#contact_col01_select_time01').on('change', function() {
		var check_time_select02 = $(this).val().substr(0,2);
		$("#contact_col01_select_time02 option").each(function() {
            if($(this).attr("value").substr(0,2)<=check_time_select02){
				$(this).attr("hidden","hidden");
				var  number_time2= parseInt(check_time_select02)+1+":00";
				$("#contact_col01_select_time02").val(number_time2);
			}
			else{
				$(this).removeAttr("hidden");
			}
        });
	});
	
	$("#contact_col02_select_time01").on('change', function() {
		var check_time_select02 = $(this).val().substr(0,2);
		$("#contact_col02_select_time02 option").each(function() {
            if($(this).attr("value").substr(0,2)<=check_time_select02){
				$(this).attr("hidden","hidden");
				var  number_time2= parseInt(check_time_select02)+1+":00";
				$("#contact_col02_select_time02").val(number_time2);
			}
			else{
				$(this).removeAttr("hidden");
			}
        });
	});
	
	$("#contact_col03_select_time01").on('change', function() {
		var check_time_select02 = $(this).val().substr(0,2);
		$("#contact_col03_select_time02 option").each(function() {
            if($(this).attr("value").substr(0,2)<=check_time_select02){
				$(this).attr("hidden","hidden");
				var  number_time2= parseInt(check_time_select02)+1+":00";
				$("#contact_col03_select_time02").val(number_time2);
			}
			else{
				$(this).removeAttr("hidden");
			}
        });
	});
});


