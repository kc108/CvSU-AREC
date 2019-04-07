<?php 
	include('../session.php');

$conversation_ID = $_POST["conversation_ID"];
$message_content = $_POST["message_content"];
$sender_ID = $_POST["sender_ID"];
$sql = "INSERT INTO `message` (`message_ID`, `user_ID`, `research_ID`, `message_Content`, `message_Date`) VALUES (NULL, '$sender_ID', '$conversation_ID',  '$message_content', CURRENT_TIMESTAMP);";
 	$result = mysqli_query($conn, $sql);
	 if (mysqli_num_rows($result) > 0) {

	 }

?>