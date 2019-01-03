
$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var email_error = $(".js-email-error", _form);
	var password_error = $(".js-password-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if(dataObj.email.length < 12){
		email_error.text("please enter a valid email address").show();
		
	}
	if(dataObj.password.length < 11){
		password_error.text("Please enter a password that is atleast 11 characters long.").show();
	}
	if(dataObj.email.length < 12 || dataObj.password.length < 11)
	{
		return false;
	}

	
	

	//alert("hi how are you");
	password_error.hide();
	email_error.hide();
	

	$.ajax({
		type: 'POST',
		url: '/ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		console.log(data);
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		}

		alert(data.name);
	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

	return false;
})

//lets encrypt