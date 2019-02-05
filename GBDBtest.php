<?php
		


		$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=goldberg_funding', 'root', 'root' );
		$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$con->setAtTribute( PDO::ATTR_PERSISTENT, false );

		echo $con->query('select database()')->fetchColumn();
		
		$name = "colin"; //Filter::String( $_POST['name'] );
		$mname = "matthew";
		$Lname = "fisher";
		$email = "anphibon2@yahoo.com"; //Filter::String( $_POST['Email'] );
		$SAddress = "1922 sage dr"; //Filter::String( $_POST['sAddress'] );
		$city = "garland";//Filter::String( $_POST['city'] );
		$state = "tx";//Filter::String( $_POST['state'] );
		$country = "united states";//Filter::String( $_POST['country'] );
		$zip = "75040"; //Filter::String( $_POST['zip'] );
		$Hphone = "9724145184";//Filter::String( $_POST['Hphone'] );
		$Cphone = "9726977359";//Filter::String( $_POST['Cphone'] );
		$DOB = "1993-04-19";//Filter::String( $_POST['DOB'] );
		$DL = "12345679";//Filter::String( $_POST['DL'] );
		$SSN = "365-84-5648";//Filter::String( $_POST['SSN'] );

		// Make sure the user does not exist. 
		/*$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();*/
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
			
			$addUser = $con->prepare("INSERT INTO clients(first_name, middle_name, last_name, email, street, city, state, zip, country, phone, cell_phone, birth_date, drivers_license, ssn) VALUES(Lower(:name), Lower(:mname), Lower(:Lname), LOWER(:email), LOWER(:street), LOWER(:city),  LOWER(:state), Lower(:zip), LOWER(:country), :phone, :cell_phone, :birth_date, :driverse_license, :SSN)");

				$addUser->bindParam(':name', $name, PDO::PARAM_STR);
				$addUser->bindParam(':mname', $mname, PDO::PARAM_STR);
				$addUser->bindParam(':Lname', $Lname, PDO::PARAM_STR);
				$addUser->bindParam(':email', $email, PDO::PARAM_STR);
				$addUser->bindParam(':street', $SAddress, PDO::PARAM_STR);
				$addUser->bindParam(':city', $city, PDO::PARAM_STR);
				$addUser->bindParam(':state', $state, PDO::PARAM_STR);
				$addUser->bindParam(':country', $country, PDO::PARAM_STR);
				$addUser->bindParam(':zip', $zip, PDO::PARAM_STR);
				$addUser->bindParam(':phone', $Hphone, PDO::PARAM_STR);
				$addUser->bindParam(':cell_phone', $Cphone, PDO::PARAM_STR);
				$addUser->bindParam(':birth_date', $DOB, PDO::PARAM_STR);
				$addUser->bindParam(':driverse_license', $DL, PDO::PARAM_STR);
				$addUser->bindParam(':SSN', $SSN, PDO::PARAM_STR);
				echo "  stupid";

				$addUser->execute();
			
				echo "success";

?>