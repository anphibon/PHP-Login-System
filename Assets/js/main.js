$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if(dataObj.email.length < 6) {
		_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (dataObj.password.length < 11) {
		_error
			.text("Please enter a passphrase that is at least 11 characters long.")
			.show();
		return false;
	}

	// Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: '/ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			window.location = data.redirect;
		} else if(data.error !== undefined) {
			_error
				.text(data.error)
				.show();
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

	return false;
})
// 
.on("submit", "form.js-login", function(event) {
	event.preventDefault();

	var _form = $(this);
	var email_error = $(".js-email-error", _form);
	var password_error = $(".js-password-error", _form);


	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if(dataObj.email.length < 6) {
		email_error
			.text("Please enter a valid email address")
			.show();
		return false;
	} else if (dataObj.password.length < 10) {
		password_error
			.text("Please enter a passphrase that is at least 11 characters long.")
			.show();
		return false;
	}

	// Assuming the code gets this far, we can start the ajax process
	email_error.hide();
	password_error.hide();

	$.ajax({
		type: 'POST',
		url: '/ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			window.location = data.redirect;
			console.log(data.error);
		} else if(data.error !== undefined) {
			password_error
				.html(data.error)
				.show();
			console.log(data.error);
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

	return false;
})
.on("submit", "form.js-add-client", function(event) {
	event.preventDefault();

	var _form = $(this);
	var email_error = $(".js-email-error", _form);
	var dobm =  $("input[id='DOB_M']", _form).val();
	var dobd =  $("input[id='DOB_D']", _form).val();
	var doby =  $("input[id='DOB_Y']", _form).val();
	var DOBirth = doby + "-" + dobm + "-" + dobd;

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		fname: $("input[id='input_1_1_3']", _form).val(),
		mname: $("input[id='input_1_1_4']", _form).val(),
		lname: $("input[id='input_1_1_6']", _form).val(),
		sAddress: $("input[id='input_1_4_1']", _form).val(),
		city: $("input[id='input_1_4_3']", _form).val(),
		state: $("input[id='input_1_4_4']", _form).val(),
		zip: $("input[id='input_1_4_5']", _form).val(),
		country: $("input[id='input_1_4_6']", _form).val(),
		Hphone: $("input[id='input_1_7_1']", _form).val(),
		Cphone: $("input[id='input_1_8_1']", _form).val(),
		DOB_M:   $("input[id='DOB_m']", _form).val(),
		DOB_D:   $("input[id='DOB_D']", _form).val(),
	 	DOB_Y:   $("input[id='DOB_Y']", _form).val(),
		DL: $("input[id='input_1_9_1']", _form).val(),
		SSN: $("input[id='input_1_10_1']", _form).val()
	};


	// Assuming the code gets this far, we can start the ajax process
	
	


	$.ajax({
		type: 'POST',
		url: '/ajax/add_client.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data.redirect !== undefined) {
			window.location = data.redirect;
			console.log(data.error);
		} else if(data.error !== undefined) {
			password_error
				.html(data.error)
				.show();
			console.log(data.error);
		}
	})
	.fail(function ajaxFailed(e) {
		// This failed 
		console.log("failed");
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
		console.log('Always');
	})

	return false;
})

/*.on("submit", "form.js-add-client", function(event) {
	event.preventDefault();

	var _form = $(this);
	
	
	var dobm =  $("input[id='DOB_M']", _form).val();
	var dobd =  $("input[id='DOB_D']", _form).val();
	var doby =  $("input[id='DOB_Y']", _form).val();
	var DOBirth ="00-00-0000";
	var fname = $("input[id='input_1_1_3']", _form).val();
	var	mname = $("input[id='input_1_1_4']", _form).val();
	var	lname = $("input[id='input_1_1_6']", _form).val();
	//var coun = $("input[id='input_1_4_6']", _form).val();
	//console.log(coun);

	
	var dataObj = {
		name: fname,
		sAddress: $("input[id='input_1_4_1']", _form).val(),
		city: $("input[id='input_1_4_3']", _form).val(),
		state: $("input[id='input_1_4_4']", _form).val(),
		//country: $("input[id='input_1_4_6']", _form).val(),
		Email: $("input[id='input_1_6_1']", _form).val(),
		Hphone: $("input[id='input_1_7_1']", _form).val(),
		Cphone: $("input[id='input_1_8_1']", _form).val(),
		DOB: DOBirth,
		DL: $("input[id='input_1_9_1']", _form).val(),
		SSN: $("input[id='input_1_10_1']", _form).val()
		


	};

	// Assuming the code gets this far, we can start the ajax process
	console.log("hello");
	

	$.ajax({
		type: 'POST',
		url: '/ajax/add_client.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		// Whatever data is 
		if(data !== undefined) {
			window.location = data.redirect;
		}
		console.log('done');
	})
	.fail(function ajaxFailed(data) {
		// This failed 
		
		console.log("failed");
	})
	.always(function ajaxAlwaysDoThis(data) {
		// Always do
				console.log('Always');
				
	})

	return false;
})
*/
//lets encrypt