<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 
	ForceLogin();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Page Title</title>

    	<base href="/" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="Assets/css/main.css">
		
	</head>
	<style>
		input[type=text]{
			clear;
		}
		br {
			margin:0;
			padding:0;
		}

	</style>
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
	  
      <button class="btn btn-secondary my-2 my-sm-0"><a href="javascript:void(0);" style="color: #ffd700;"> Add Client</a></button>
      <button class="btn btn-secondary my-2 my-sm-0"><a href="javascript:void(0);" style="color: #ffd700;">Search Clients</a></button>
    
	<div class="container">
	</div>
	<br />
	<div class="uk-section uk-container">
		<h2 style="color: #ffd700;">Add Client</h2>
		<form class="uk-form-stacked uk-child-width-1-6@m" uk-grid style="padding:0;">
                        <div>

                            
                            <div class="uk-margin">

								<div class="uk-margin" uk-margin="">
							        <label class="uk-form-label uk-form-width-xsmall uk-first-column" for="form-stacked-text" style="color: #ffd700;"> First </label>
									<input class="uk-input uk-form-width-small uk-first-column" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">	
								</div>

                            

                       		</div>
                    	</div>
                        <div>

                           

                            <div class="uk-margin">

                                <div class="uk-margin" uk-margin="">
					       			<label class="uk-form-label uk-form-width-xsmall " for="form-stacked-text" style="color: #ffd700;">  Middle</label>

				           			<input class="uk-input uk-form-width-small" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
			      				</div>

                            </div>


                        </div>

                        <div>
                        	 <div class="uk-margin">
                       		 	<div class="uk-margin" uk-margin="">
				        			<label class="uk-form-label uk-form-width-xsmall " for="form-stacked-text" style="color: #ffd700;"> Last Name</label>

				        			<input class="uk-input uk-form-width-small" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
				    			</div>
           					</div>

                        </div>

                    </form>

  		<div class="uk-grid uk-child-width-1-2@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-add-client" autocomplete="off">

		<!--	<form class="" style="display:inline-block;">
					<div class="uk-margin uk-first-column" uk-margin="">
				        <label class="uk-form-label uk-form-width-xsmall uk-first-column" for="form-stacked-text" style="color: #ffd700;"> First </label>
					        <input class="uk-input uk-form-width-small uk-first-column" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">	
					</div>
					<div>
				        <label class="uk-form-label uk-form-width-xsmall " for="form-stacked-text" style="color: #ffd700;">  Middle</label>

			            <input class="uk-input uk-form-width-small" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
			        </div>
			        <div>
				        <label class="uk-form-label uk-form-width-xsmall " for="form-stacked-text" style="color: #ffd700;"> Last Name</label>

				        <input class="uk-input uk-form-width-small" id="form-stacked-text" type="text" required='required' placeholder="ex. John" autocomplete="off">
				    </div>

				
			</form>-->

			   
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Home Address</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="ex. '102 street dr.'"autocomplete="off">
			        </div>
			    </div>
			     <div class="uk-margin uk-alert uk-alert-danger js-c-name-error" style='display: none;'>Home Address</div>

			   
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Client email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="email" required='required' placeholder="Client email"autocomplete="off">
			        </div>
			    </div>

			    <div class="uk-margin uk-alert uk-alert-danger js-email-error" style='display: none;'>Cell Phone Number</div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Home Phone number</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="972-123-4567"autocomplete="off">
			        </div>
			    </div>
			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Cell Phone number</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='required' placeholder="972-123-4567"autocomplete="off">
			        </div>
			    </div>

			    <div class="uk-margin uk-alert uk-alert-danger js-b-name-error" style='display: none;'>TEXT</div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Client Website</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='false' placeholder="www.website.com"autocomplete="off">
			        </div>
			    </div>

			    <p style="padding:0; margin:0; color: #ffd700;">DOB</p>
			    <div class="uk-margin" uk-margin="" style="margin:0 padding:0;">
				            <input class="uk-input uk-form-width-xsmall uk-first-column" id="form-stacked-text" type="text" required='required' placeholder="MM" autocomplete="off">


				            <input class="uk-input uk-form-width-xsmall" id="form-stacked-text" type="text" required='required' placeholder="DD" autocomplete="off">

				            <input class="uk-input uk-form-width-xsmall" id="form-stacked-text" type="text" required='required' placeholder="YY" autocomplete="off">
				</div>

				<div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">Drivers License</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" type="text" required='false' placeholder="ex. '12345678'" autocomplete="off">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text" style="color: #ffd700;">SSN</label>
			        <div class="uk-form-controls">
			            <input class="uk-input  uk-form-width-large" id="form-stacked-text" required pattern="^d{3}-d{2}-d{4}$"
						required='false' placeholder="ex. '123-45-6789'"autocomplete="off">
			        </div>
			    </div>


			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">ADD</button>
			    </div>

			</form>
  		</div>
  	</div>
  	


  	<?php require_once "inc/footer.php"; ?> 
  </body>
</html>
