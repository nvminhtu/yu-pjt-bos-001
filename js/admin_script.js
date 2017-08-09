jQuery(function($){
  	function checkNotNullInput() {
		var check = true;
		if($('#editable-post-name').length>0) {
			if($('#editable-post-name').text()!='') {
	 	   		console.log($('#editable-post-name').text());
	 	   		if($('#edit-slug-buttons').find('.save').length>0) { // check button exists
					$('#edit-slug-buttons').find('.save').attr("disabled", true);
					console.log('fuck');
	 	   		}
	 	   	}
	 	 }
		

		return check;
	}

    setInterval(function(){
		var checkNotNUll = true;
		checkNotNull = checkNotNullInput();
		if(checkNotNull == true)
		{
			console.log('ok');
		}
		else
		{
			console.log('fuck');
		}
	}, 500);

});