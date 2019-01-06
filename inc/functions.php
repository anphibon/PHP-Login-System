<?php
	function ForceLogin()
	{
		if(isset($_SESSION['user_id'])){

		}else{
			header("location: /login.php"); exit;
		}
	}
	Function ForceDashboard()
	{
		if(isset($_SESSION['user_id']))
		{
			header("location: /dashboard.php"); exit;
		}
	}
?>
