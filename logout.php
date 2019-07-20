<?php
require_once('dbconfig.php');
session_start();

$msg = $_SESSION['user_Name']." is logout";
if(session_destroy()) // Destroying All Sessions
{
	header("Location: index.php"); // Redirecting To Home Page
	$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
	mysqli_query($conn,$mentry);
}
?>