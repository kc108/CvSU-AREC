<?php

include('db.php');
include("function.php");
session_start();
if(isset($_POST["proj_ID"]))
{
	$zc = "SELECT proj_Title FROM `project_monitoring`  WHERE  proj_ID = ".$_POST["proj_ID"]."";
	$statementzc = $conn->prepare($zc);
		
	$statementzc->execute();
	$resultxz = $statementzc->fetchAll();
	foreach($resultxz as $row)
	{
		$proj_Title = $row['proj_Title'];
	}

	$statement = $connection->prepare(
		"DELETE FROM `project_monitoring` WHERE `project_monitoring`.`proj_ID` = :proj_ID"
	);
	$result = $statement->execute(
		array(
			':proj_ID'	=>	$_POST["proj_ID"]
		)
	);
	
	if(!empty($result))
	{
		$msg = $_SESSION['user_Name']." Delete Project: ".$proj_Title;
		$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
		$smentry = $conn->prepare($mentry);
		$rmentry = $smentry->execute();
		echo 'Data Deleted';
	}
}



?>