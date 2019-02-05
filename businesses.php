
<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
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
		
		<title> bussinesses </title>
		
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
			     <a href="/logout.php" style="color: #999;">Logout</a>
			    </li>
			  </ul>
			</div>
		</nav>
		<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-2@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-add-client">
		  	<fieldset class="uk-fieldset">

		        <legend class="uk-legend">Legend</legend>

		       		<div class="uk-margin">
				        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> Business Name </label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
				        </div>
				    </div>

				    <div class="uk-margin">
				        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> DBA Name </label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="text" required='false' placeholder="ex. John" autocomplete="off">
				        </div>
				    </div>
				
		        <div class="uk-margin">
		        	<label class="uk-form-label" for="uk-enitity-type" style="color: #ffd700;">Entity Type<br></label>
		            <select class="uk-select" id="uk-enitity-type" type="required">
		                <option>none</option>
		                <option>llc</option>
		                <option>partnership</option>
		                <option>INC</option>
		                <option>sole proprietor</option>		              
		            </select>
		        </div>

		        <div class="uk-margin">
				        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> Employer identification number </label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="text" required='required' placeholder="XX-XXXXXXX" autocomplete="off">
				        </div>
				    </div>

				<div class="uk-margin">
				        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> physical address </label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="text" required='required' placeholder="XX-XXXXXXX" autocomplete="off">
				        </div>
				</div>

			    <div class="uk-margin">
			        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> Mailing address (if different) </label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="text" required='false' placeholder="XX-XXXXXXX" autocomplete="off">
			        </div>
			    </div>


			    <p style="padding:0; margin:0; color: #ffd700;">Date Established</p>
			    <div class="uk-margin" uk-margin="" style="margin:0 padding:0;">
				            <input class="uk-input uk-form-width-xsmall uk-first-column" id="form-stacked-text" type="text" required='required' placeholder="MM" autocomplete="off">


				            <input class="uk-input uk-form-width-xsmall" id="form-stacked-text" type="text" required='required' placeholder="DD" autocomplete="off">

				            <input class="uk-input uk-form-width-xsmall" id="form-stacked-text" type="text" required='required' placeholder="YY" autocomplete="off">
				</div>

				<div class="uk-margin">
		        	<label class="uk-form-label" for="uk-enitity-type" style="color: #ffd700;">Business Classification<br></label>
		            <select class="uk-select" id="uk-enitity-type" type="required">
		                <option>retail</option>
		                <option>restaurant</option>
		                <option>bar</option>
		                <option>internet</option>
		                <option>services</option>	
		                <option>business to business</option>
		                <option>high risk</option>
		                <option>Other</option>	              
		            </select>
		        </div>

		        <label class="uk-form-label" for="uk-enitity-type" style="color: #ffd700;">(if high risk or other please explain)<br></label>
		        <div class="uk-margin">
		            <textarea class="uk-textarea" rows="5" placeholder="Textarea" rows="2" cols="50"></textarea>
		        </div>

		        <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Bussiness Phone number</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="972-123-4567"autocomplete="off">
			        </div>
			    </div>

			    <div class="uk-margin uk-alert uk-alert-danger js-b-name-error" style='display: none;'>TEXT</div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Client email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="email" required='required' placeholder="Client email"autocomplete="off">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Bussiness Website</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='false' placeholder="www.website.com"autocomplete="off">
			        </div>
			    </div>

		       <div class="container">
		        	
		        	<div class="uk-margin">
				        <label class="uk-form-label " for="form-stacked-text" style="color: #ffd700;"> landlord Name </label>
				        <div class="uk-form-controls">
				            <input class="uk-input" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
				        </div>
				    </div>

				    <div class="uk-margin">
			      	  	<label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">landlord Phone number</label>
			       		<div class="uk-form-controls">
			            	<input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="972-123-4567"autocomplete="off">
			        	</div>
			   		</div>

			   		<div class="uk-margin">
			      	  	<label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Mortgage/rent</label>
			       		<div class="uk-form-controls">
			            	<input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="$1500"autocomplete="off">
			        	</div>
			   		</div>

		        </div>

		        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Business Bankrupcy</label>
		        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
		            <label><input class="uk-radio" type="radio" name="radio2" > YES</label>
		            <label><input class="uk-radio" type="radio" name="radio2"> NO</label>
		        </div>


			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">ADD</button>
			    </div>



		    </fieldset>
		</form>
	</body>

</html>

