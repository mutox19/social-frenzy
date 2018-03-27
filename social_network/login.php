<?php 
	session_start();
	include ("includes/connection.php");

	if (isset($_POST['login'])) {
		# code...
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$pass = mysqli_real_escape_string($con,$_POST['pass']);

		$select_user = "select * FROM users where user_email='$email' AND user_pass='$pass' AND status='verified'";

		//run the sql query
		$query = mysqli_query($con,$select_user);

		//check the num of rows affected
		$check_user = mysqli_num_rows($query);

		//if there is 1 user redirect user to home page 
		if ($check_user==1) {
			# code...
			$_SESSION['user_email']= $email;
			
			echo "<script>window.open('home.php','_self')</script>";
		}
		else
		{
			echo "<script>alert('Incorrect details, try again!')</script>";
		}

	}
?>