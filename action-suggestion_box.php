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
		echo "<script>
				alertify.alert('Successfully Send').setHeader('Successfully');
										window.location='index.php';
									</script>";
	}
	else{
		echo "<script>
				alertify.alert('Error Send').setHeader('Error');
										window.location='index.php';
									</script>";

	}
}


?>