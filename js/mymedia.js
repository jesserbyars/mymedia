$(document).ready(function() {
	var $create_account, $log_in, messageDelay;
	//config init
	messageDelay = 2000;
	//jquery handles
	$create_account = $(".create_account");
	$log_in = $(".log_in");
	//document.querySelectorAll('.create_account')[0].style.display = 'none';
	//hide the forms
	$create_account.hide();
	$log_in.hide();
	//toggle appearance of forms when links are clicked
	$(".create_account_link").click(function() {
		$log_in.slideUp();
		$create_account.slideToggle();
		$create_account.find("form input:first-child()").focus();
	});
	$(".login_link").click(function() {
		$create_account.slideUp();
		$log_in.slideToggle();
		$log_in.find("form input:first-child()").focus();
	});

	function showLoading() {
		$(".loader").css("margin-top", $(window).height()/2.2);
		$(".screen-dim").css("height", $(window).height()).fadeIn();
	}

	function hideLoading() {
		$(".screen-dim").fadeOut();
	}

	function alertResults(response) {
		hideLoading();
		alert(response);
	}

	function showSystemMessage(msg) {
		hideLoading();
		$(".system-message").html("<p>"+msg+"</p>").slideDown().delay(messageDelay).slideUp();
	}

	function createAccount(response) {
		showSystemMessage(response);
	}

	function log_in(response) {
		hideLoading();
		showSystemMessage(response);
	}

	function submitAjaxForm(form, handleSuccess) {
			var submitUrl = $(form).attr("action");
			var formData = {};
			$(form).find("input[name]").each(function(index, elt) {
				formData[elt.name] = elt.value;
			});
			$.ajax({
				type: 'POST',
				url: submitUrl,
				data: formData,
				success: handleSuccess
			});
	}

	$(".signup_submit").click(function(e) {
		e.preventDefault();
		showLoading();
		submitAjaxForm($(".create_account form"), createAccount);
	});

	$(".login_submit").click(function(e) {
		e.preventDefault();
		showLoading();
		submitAjaxForm($(".log_in form"), log_in);
		console.log("logging_in");
	});

});