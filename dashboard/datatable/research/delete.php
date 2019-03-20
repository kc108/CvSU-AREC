<?php

include('db.php');
include("function.php");

if(isset($_POST["user_ID"]))
{
	
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
		echo 'Data Deleted';
	}
}



?>