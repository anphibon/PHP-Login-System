
$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var email_error = $(".js-email-error", _form);
	var password_error = $(".js-password-error", _form);
	var data = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if(data.email.length < 12){
		email_error
			.text("please enter a valid email address").show();
		
	}
	if(data.password.length < 11){
		password_error
			.text("Please enter a password that is atleast 11 characters long.").show();
	}
	if(data.email.length < 12 || data.password.length < 1)
	{
		return false;
	}

	
	console.log(data);

	//alert("hi how are you");
	 password_error.hide();
	 email_error.hide();
	return false;
})

//lets encrypt