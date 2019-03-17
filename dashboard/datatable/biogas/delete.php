<?php

include('db.php');
include("function.php");

if(isset($_POST["location_id"]))
{
	
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
		echo 'Data Deleted';
	}
}



?>