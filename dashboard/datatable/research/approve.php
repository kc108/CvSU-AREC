<?php

include('db.php');
include("function.php");
session_start();
$login_id = $_SESSION["login_id"];
if(isset($_POST["research_ID"]))
{
	
	$statement = $connection->prepare(
		"UPDATE `research` SET `status_ID` = '2' WHERE `research`.`research_ID` = :research_ID;"
	);
	$result = $statement->execute(
		array(
			':research_ID'	=>	$_POST["research_ID"]
		)
	);


	$statementz = $connection->prepare(
		"SELECT research_Title,user_ID FROM `research`  WHERE research_ID =".$_POST["research_ID"]
	);
	 $statementz->execute();
	 $resultz = $statementz->fetchAll();
	 foreach($resultz as $rowz)
	 {
	   $research_Title = $rowz["research_Title"];
	   $user_IDz = $rowz["user_ID"];
	 }
	$notif = "INSERT INTO `notification` (`notif_ID`, `user_ID`, `notif_Msg`, `notif_Date`, `notif_State`,`notif_Type`) VALUES 
			(NULL,
			 :login_id,
			  :notif_msg,
			   CURRENT_TIMESTAMP,
			    NULL,
				2);";

			$statement1 = $connection->prepare($notif);
			
			$result1 = $statement1->execute(
				array(
					':notif_msg'		=>	$research_Title." Approved",
					':login_id'	 		=>	$user_IDz
				)
			);
	if(!empty($result))
	{
		echo 'Research Successfully Approved';
	}
}



?>