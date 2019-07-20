<?php

include('db.php');
include("function.php");
session_start();
if(isset($_POST["user_ID"]))
{	
	try
	{

		$zc = "SELECT user_Name FROM `user_accounts`  WHERE  user_ID = ".$_POST["user_ID"]."";
		$statementzc = $conn->prepare($zc);
			
		$statementzc->execute();
		$resultxz = $statementzc->fetchAll();
		foreach($resultxz as $row)
		{
			$zuser_Name = $row['user_Name'];
		}

		$statement = $conn->prepare(
			"DELETE FROM `user_accounts` WHERE user_ID = :user_ID"
		);
		$result = $statement->execute(
			array(
				':user_ID'	=>	$_POST["user_ID"]
			)
		);
		
		if(!empty($result))
		{

			$msg = $_SESSION['user_Name']." Delete User: ".$zuser_Name;
			$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
			$smentry = $conn->prepare($mentry);
			$rmentry = $smentry->execute();

			echo 'Data Deleted';
		}
	}
	catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}
}



?>