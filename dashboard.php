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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
  	<a class="navbar-brand" href="dashboard.php"><img src="Assets/pcs/logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/clients.php">Clients <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/businesses.php">bussinesses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0);">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <ul class="nav navbar-nav pull-right">
    <li>
     <a href="/logout.php" style="color: #999;">Logout</a></button>
    </li>
  </ul>
</div>
</nav>
		<div class="uk-section uk-container uk-text-left">
			<?php 
				
				echo('your user id is ' . $_SESSION['user_id']);
			?>
		</div>
		<?php 
		require_once "inc/footer.php";

		?>
	</body>
</html>