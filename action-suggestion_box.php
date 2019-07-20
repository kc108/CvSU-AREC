<?php
include('dbconfig.php');
if (isset($_POST["submit"])) {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$sql = "INSERT INTO `suggestion` (`s_ID`, `fname`, `lname`, `email`, `subject`, `message`) VALUES (NULL, '$fname', '$lname', '$email', '$subject', '$message');";

	if (mysqli_query($conn,$sql)) {

		//ALL ADMIN
		$sql = "SELECT user_ID FROM `user_accounts` where level_ID = 2";
		
		$rsql = mysqli_query($conn,$sql);
			
		while($row = mysqli_fetch_array($rsql)){

			$r_user_ID = $row['user_ID'];

			$sql3 = "INSERT INTO `notification` (`notif_ID`, `user_ID`, `notif_Msg`, `notif_Date`, `notif_Type`, `notif_State`) 
				VALUES (NULL, $r_user_ID, 'New Suggestion From $fname $lname', CURRENT_TIMESTAMP, 3, NULL);";

			$rsql3 = mysqli_query($conn,$sql3);

		}
		
		echo "<script>alert('Successfully Send');
											window.location='index.php';
										</script>";
	}
	else{
									echo "<script>alert('Error Send');
											window.location='index.php';
										</script>";

	}
}


?>