<?php

include('db.php');
include("function.php");

if(isset($_POST["proj_ID"]))
{
	
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
		echo 'Data Deleted';
	}
}



?>