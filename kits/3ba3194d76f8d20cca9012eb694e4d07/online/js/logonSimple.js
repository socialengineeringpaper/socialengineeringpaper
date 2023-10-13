$(document).ready(function () {
	// $("#access-number").focus();
	$("#access-number").formatAccessNumber();
});

function rememberMeClicked() {
	if ($('.fullLogon #rememberMe').prop('checked')) {
		$('.fullLogon #rememberMeNote').show(300);
	} else {
		$('.fullLogon #rememberMeNote').hide(300);
	}
}


$.fn.formatAccessNumber = function () {
	return this.each(function () {
		var $userIdtxt = $(this)
		$userIdtxt.keyup(function (event) {
			try {
				var key = event.which;
				if (key == null || key == 0 || key == 8 || key == 9 || key == 13 || key == 27 || key == 20 || key == 45 || key == 16 || key == 17 || key == 46 || key == 144) {
					return true;
				} else if (key >= 33 && key <= 40) {
					return true;
				} else {
					var userId = $userIdtxt.val().trim();
					if (userId == null) {
						return userId;
					}
					if (userId.indexOf("9") == 0)
					//This is the logic for 8 digit axs codes
					{
						if (userId.length == 9) {
							$('#securityNumber').focus();
						} else {

							if (userId.length == 4 && userId.indexOf("-") != 3) {
								userId = userId + "-";
								$("#access-number").val(userId);
							}

							if (userId.length == 5) {
								if (userId.indexOf("-", 3) != 4) {
									startstr = userId.substr(0, 4);
									endstr = userId.substr(4, 1);
									userId = startstr + "-" + endstr;
								}
							}

							$("#access-number").val(userId);
							$("#access-number").focus();
						}
					} else {
						if (userId.indexOf("03") == 0 && userId.length == 14) {
							$('#securityNumber').focus();

						} else if (userId.length == 19) {
							$('#securityNumber').focus();

						} else {
							if (userId.length == 4 && userId.indexOf("-") != 3) {
								//						userId = userId + "-";
							} else if (userId.length == 5) {
								if (userId.indexOf("-", 3) != 4) {
									startstr = userId.substr(0, 4);
									endstr = userId.substr(4, 1);
									userId = startstr + "-" + endstr;
								}
							} else if (userId.length == 9 && userId.indexOf("-", 7) != 8) {
								//							userId = userId + "-";
							} else if (userId.length == 10) {
								if (userId.indexOf("-", 7) != 9) {
									startstr = userId.substr(0, 9);
									endstr = userId.substr(9, 1);
									userId = startstr + "-" + endstr;
								}
							} else if (userId.length == 14 && userId.indexOf("-", 12) != 13) {
								//							userId = userId + "-";
							} else if (userId.length == 15) {
								if (userId.indexOf("-", 12) != 14) {
									startstr = userId.substr(0, 14);
									endstr = userId.substr(14, 1);
									userId = startstr + "-" + endstr;
								}
							}
							$("#access-number").val(userId);
							$("#access-number").focus();
						}
					}
				}
			} catch (exception) {}
		});
	});
};