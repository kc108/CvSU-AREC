<?php

include('db.php');
include("function.php");
session_start();
if(isset($_POST["news_ID"]))
{
	$zc = "SELECT news_Title FROM `news`  WHERE  news_ID = ".$_POST["news_ID"]."";
	$statementzc = $conn->prepare($zc);
		
	$statementzc->execute();
	$resultxz = $statementzc->fetchAll();
	foreach($resultxz as $row)
	{
		$news_Title = $row['news_Title'];
	}

	$statement = $conn->prepare(
		"DELETE FROM `news` WHERE news_ID = :news_ID"
	);
	$result = $statement->execute(
		array(
			':news_ID'	=>	$_POST["news_ID"]
		)
	);
	
	if(!empty($result))
	{
		$msg = $_SESSION['user_Name']." Delete News: ".$news_Title;
		$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
		$smentry = $conn->prepare($mentry);
		$rmentry = $smentry->execute();
		echo 'Data Deleted';
	}
}



?>