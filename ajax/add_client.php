<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');
		if($_SESSION['user_id'])
		{
		$con2 = GoldbergDB::getConnection();
		
		$return = [];

		$client = [];
		$client[0] = Filter::String($_POST['fname']);
		$client[1] = Filter::String($_POST['mname']);
		$client[2] = Filter::String($_POST['lname']);
		$client[3] = Filter::String( $_POST['email'] );
		$client[4] = Filter::String( $_POST['sAddress'] );
		$client[5] = Filter::String( $_POST['city'] );
		$client[6] = Filter::String( $_POST['state'] );
		$client[7] = "united states";//Filter::String( $_POST['country'] );
		$client[8] = Filter::String( $_POST['zip'] );
		$client[9] = Filter::String( $_POST['Hphone'] );
		$client[10] = Filter::String( $_POST['Cphone'] );
		$client[11] = Filter::String( $_POST['DOB_M'] );
		$client[12] = Filter::String( $_POST['DOB_D'] );
		$client[13] = Filter::String( $_POST['DOB_Y'] );
		$client[14] = Filter::String( $_POST['DL'] );
		$client[15] = Filter::String( $_POST['SSN'] );

		
		if($client[11] == "" || $client[12] == "" || $client[13] == ""){
		
			$DOB = null;
			
		} else {
			
			$DOB = $client[13] . '-' . $client[11] . '-' . $client[12];
		}
		

		for($x = 0; $x <= 15; $x++){

		
			if($client[$x] == "") {
				$client[$x] = null;
			}
		}

		

		// Make sure the user does not exist. 
		/*$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();*/
		$return['error'] = "hello";
		/*if($findUser->rowCount() == 1) {
			// User exists, try and sign them in
			$User = $findUser->fetch(PDO::FETCH_ASSOC);

			$user_id = (int) $User['user_id'];
			$hash = (string) $User['password'];

			if(password_verify($password, $hash)) {
				// User is signed in
				$return['redirect'] = '/dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/password combo
				$return['error'] = "Invalid user email or password ";
			}*/
			
			//$return['error'] = $con->query('select database()')->fetchColumn();;
			$addUser = $con2->prepare("INSERT INTO clients(first_name, middle_name, last_name, email, street, city, state, zip, country, phone, cell_phone, birth_date, drivers_license, ssn) VALUES(Lower(:first_name),Lower(:middle_name),Lower(:last_name),LOWER(:email), LOWER(:street), LOWER(:city),  LOWER(:state), Lower(:zip), LOWER(:country), :phone, :cell_phone, :birth_date, :driverse_license, :SSN)");

				$addUser->bindParam(':first_name', $client[0], PDO::PARAM_STR);
				$addUser->bindParam(':middle_name', $client[1], PDO::PARAM_STR);
				$addUser->bindParam(':last_name', $client[2], PDO::PARAM_STR);
				$addUser->bindParam(':email', $client[3], PDO::PARAM_STR);
				$addUser->bindParam(':street', $client[4], PDO::PARAM_STR);
				$addUser->bindParam(':city', $client[5], PDO::PARAM_STR);
				$addUser->bindParam(':state', $client[6], PDO::PARAM_STR);
				$addUser->bindParam(':country', $client[7], PDO::PARAM_STR);
				$addUser->bindParam(':zip', $client[8], PDO::PARAM_STR);
				$addUser->bindParam(':phone', $client[9], PDO::PARAM_STR);
				$addUser->bindParam(':cell_phone', $client[10], PDO::PARAM_STR);
				$addUser->bindParam(':birth_date', $DOB, PDO::PARAM_STR);
				$addUser->bindParam(':driverse_license', $client[14], PDO::PARAM_STR);
				$addUser->bindParam(':SSN', $client[15], PDO::PARAM_STR);
				

				$addUser->execute();
			

		//} else {
			// They need to create a new account
			//$return['error'] = "You do not have an account. <a href='/register.php'>Create one now?</a>";
		//}
		$return['redirect'] = '/dashboard.php';
		
		echo json_encode($return, JSON_PRETTY_PRINT); exit;
		} else{

		}
	} else {
		// Die. Kill the script. Redirect the user. Do something regardless.
		exit('Invalid URL');
	}
?>