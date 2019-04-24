<?php
session_start(); // Starting Session

include('data-md5.php');
$error=''; // Variable To Store Error Message
function success(){
		echo "<script>alert('Successfully login');
											window.location='authentication.php';
										</script>";
}
function success_register(){
		echo "<script>alert('Successfully Register Wait For Approval');
											window.location='authentication.php';
										</script>";
}
function error_registertaken(){
		echo "<script>alert('Username is Already Use');
											window.location='authentication.php';
										</script>";
}

function notallowed(){
		
	echo "<script>alert('You are not allowed to register');
											window.location='authentication.php';
										</script>";
}
function notmatch(){
	echo "<script>alert('Password Not match');
											window.location='authentication.php';
										</script>";
}
function error_Sql(){
	echo "<script>alert('Sql Error');
											window.location='authentication.php';
										</script>";
}
function error_credential(){
	echo "<script>alert('Wrong Username or Password!');
											window.location='authentication.php';
										</script>";
}

if (isset($_POST['submit_login'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='authentication.php';
				</script>";
				
			
			}
		
		else
		{
		
			login();
		}
}

if (isset($_POST['submit_register'])) {
		if (empty($_POST['r_username']) || empty($_POST['r_password'])) 
			{
				echo "<script>alert('Username or Password is empty !');
					window.location='authentication.php';
				</script>";
				
			
			}
		
		else
		{
		
			if ($_POST['r_password'] == $_POST['r_cpassword']) {
				register();
				
			}
			
		}
}
function login(){

			include('dbconfig.php');
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($conn,$username);
			$password = mysqli_real_escape_string($conn,$password);
			
			
 			$input = "$password";
			$encrypted = encryptIt($input);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($conn,"SELECT * FROM `user_accounts` WHERE `user_Name` = '$username' AND `user_Pass` = '$encrypted' AND user_status = 1");
			if (mysqli_num_rows($query) > 0) 
			{
				$rows = mysqli_fetch_assoc($query);
				// And error has occured while executing
			    if ($rows['level_ID']) 
				{
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: dashboard/"); //go to dashboard
					success();
				} 

			}
			else
			{
			 error_credential();
			}
			mysqli_close($conn); // Closing Connection
}
function register(){

			include('dbconfig.php');
			// Define $username and $password
			$r_username = $_POST['r_username'];
			$r_password = $_POST['r_password'];
			$r_cpassword = $_POST['r_cpassword'];
			$r_email = $_POST['r_email'];
			// To protect MySQL injection for Security purpose
			$r_username = stripslashes($r_username);
			$r_password = stripslashes($r_password);
			$r_cpassword = stripslashes($r_cpassword);
			$r_email = stripslashes($r_email);
			$r_username = mysqli_real_escape_string($conn,$r_username);
			$r_password = mysqli_real_escape_string($conn,$r_password);
			$r_email = mysqli_real_escape_string($conn,$r_email);
			
			
 			$input = "$r_password";
			$encrypted = encryptIt($input);

			 $sql = "SELECT * FROM `user_accounts` WHERE `user_Name`= '$r_username'";
			$query1 = mysqli_query($conn,$sql);

			if (mysqli_num_rows($query1) > 0) 
			{
			   
			   // if username is not available
				error_registertaken();

			}
			 else {
			 	// if username is available

				$sql = "INSERT INTO `user_accounts` (`user_ID`, `level_ID`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES (NULL, 1, '$r_username', '$encrypted', '$r_email', CURRENT_TIMESTAMP, 0);";

				if(mysqli_query($conn,$sql))
				{
					success_register();
				}

			}
			mysqli_close($conn); // Closing Connection
}



?>