<?php 
include('../dbconfig.php');
session_start();
$user_ID = $_SESSION['login_id'];



if (isset($_POST["account"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` =  $user_ID AND notif_Type = '1'";
}
if (isset($_POST["news"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` = $user_ID AND notif_Type = '2'";
}
if (isset($_POST["suggest"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` = $user_ID
	AND notif_Type = '3'";
}
if (isset($_POST["research"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` = $user_ID
	AND notif_Type = '4'";
}
if (isset($_POST["project"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` = $user_ID
	AND notif_Type = '5'";
}
if (isset($_POST["biogas"])) {
	$sql = "UPDATE `notification` SET `notif_State` = '1' WHERE `notification`.`user_ID` = $user_ID
	AND notif_Type = '6'";
}
mysqli_query($conn, $sql);

?>