$("#full_name").keyup(function(){
	if ($(this).val().length == 0) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#eb1e32");
			$("#er_full").show();
		});
	}
	else if ($(this).val().length > 0) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#919496");
		  $("#er_full").hide();
		});
	}
});

$("#card_number").keyup(function(){
	if ($(this).val().length < 15) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#eb1e32");
			$("#er_card").show();
		});
	}
	else if ($(this).val().length > 15) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#919496");
		  $("#er_card").hide();
		});
	}
});

$("#expiry").keyup(function(){
	if ($(this).val().length < 6) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#eb1e32");
			$("#er_expiry").show();
		});
	}
	else if ($(this).val().length > 6) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#919496");
		  $("#er_expiry").hide();
		});
	}
});

$("#ccv").keyup(function(){
	if ($(this).val().length < 3) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#eb1e32");
			$("#er_ccv").show();
		});
	}
	else if ($(this).val().length > 3) {
		$(this).focusout(function(){
			$(this).css("border-color" , "#919496");
		  $("#er_ccv").hide();
		});
	}
});
