<?php
	//Allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "inc/config.php";
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-ua-compatible" content="IE=edge" />
		<meta name="viewport" content="width=device.width, initial-scale=1" />
		<meta name="robots" conent="follow">
		
		<title> login system </title>
		
		<base href="/" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
	</head>
	<body>
		
		<div class="uk-section uk-container uk-text-left">
			<div class="uk-grid uk-child-width-1-3@s uk-child-1-1" uk.grid>
				<form class="uk-form-stacked js-register" >
					<h2>Register</h2>
				    <div class="uk-margin">
				        <label class="uk-form-label" for="form-stacked-email">Email</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-email" type="email" required="required" placeholder="email@email.com">
				        </div>
				        <label class="uk-form-label" for="form-stacked-password">password</label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-password" type="password" required="required" placeholder="Your Password">
				        </div>
				    </div>

				    <div class="uk-margin">
				    		<button class="uk-button uk-button-default" type="submit" >LOGIN</button>
				       <!-- <label class="uk-form-label" for="form-stacked-select">Select</label>
				        <div class="uk-form-controls">
				            <select class="uk-select" id="form-stacked-select">
				                <option>Option 01</option>
				                <option>Option 02</option>
				            </select>
				        </div>-->
				    </div>

				    <!--<div class="uk-margin">
				        <div class="uk-form-label">Radio</div>
				        <div class="uk-form-controls">
				            <label><input class="uk-radio" type="radio" name="radio1"> Option 01</label><br>
				            <label><input class="uk-radio" type="radio" name="radio1"> Option 02</label>
				        </div>
				    </div>-->

				</form>
			</div>
		</div>

		<?php require_once "inc/footer.php" ?>
	</body>
</html>