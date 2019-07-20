<?php

include('db.php');
include("function.php");
session_start();
if(isset($_POST["research_ID"]))
{
	$zc = "SELECT research_Title FROM `research`  WHERE  research_ID = ".$_POST["research_ID"]."";
	$statementzc = $conn->prepare($zc);
		
	$statementzc->execute();
	$resultxz = $statementzc->fetchAll();
	foreach($resultxz as $row)
	{
		$research_Title = $row['research_Title'];
	}

	$statement = $connection->prepare(
		"DELETE FROM `research` WHERE research_ID = :research_ID"
	);
	$result = $statement->execute(
		array(
			':research_ID'	=>	$_POST["research_ID"]
		)
	);
	
	if(!empty($result))
	{
		$msg = $_SESSION['user_Name']." Delete Research: ".$research_Title;
		$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
		$smentry = $conn->prepare($mentry);
		$rmentry = $smentry->execute();
		echo 'Data Deleted';
	}
}



?>