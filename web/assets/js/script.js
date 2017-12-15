$(function() {

	$("#name_error_message").hide();


	var error_name = false;


	$("#form_name").focusout(function() {

		check_name();
		
	});





		
		if(error_username == false) {
			return true;
		} else {
			return false;	
		}



});