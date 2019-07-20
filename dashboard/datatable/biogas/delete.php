<?php

include('db.php');
include("function.php");
session_start();
if(isset($_POST["location_id"]))
{
	
	$zc = "SELECT title FROM `locations`  WHERE  id = ".$_POST["location_id"]."";
	$statementzc = $connection->prepare($zc);
		
	$statementzc->execute();
	$resultxz = $statementzc->fetchAll();
	foreach($resultxz as $row)
	{
		$title = $row['title'];
	}

	$statement = $connection->prepare(
		"DELETE FROM `locations` WHERE id = :location_id"
	);
	$result = $statement->execute(
		array(
			':location_id'	=>	$_POST["location_id"]
		)
	);
	
	if(!empty($result))
	{
		$msg = $_SESSION['user_Name']." Delete Biogas: ".$title;
		$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
		$smentry = $connection->prepare($mentry);
		$rmentry = $smentry->execute();
		echo 'Data Deleted';
	}
}



?>