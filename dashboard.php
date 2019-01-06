<?php
	//Allow the config
	define('__CONFIG__', true);
	//require the config
	require_once "inc/config.php";


	ForceLogin();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-ua-compatible" content="IE=edge" />
		<meta name="viewport" content="width=device.width, initial-scale=1" />
		<meta name="robots" content="follow">
		
		<title> login system </title>
		
		<base href="/" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
	</head>
	<body>
		
		<div class="uk-section uk-container uk-text-left">
			<?php 
				echo  $_SESSION['user_id'] . ' is your user id';
			?>
		</div>

		<?php 
		require_once "inc/footer.php";

		?>
	</body>
</html>