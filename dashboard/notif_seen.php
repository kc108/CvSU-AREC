<?php 
include('../dbconfig.php');
session_start();
$user_ID = $_SESSION['login_id'];

if ($login_level == 2) {
	$sql = "UPDATE `notification` SET `notif_State` = '1'  WHERE user_ID = $user_ID OR notif_Type = 1 AND notif_State is null";
}
else{
	$sql = "UPDATE `notification` SET `notif_State` = '1'  WHERE user_ID = $user_ID AND notif_Type = 2 AND notif_State is null";
}

mysqli_query($conn, $sql);



?>