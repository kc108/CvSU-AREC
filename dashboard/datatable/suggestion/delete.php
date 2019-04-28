<?php

include('db.php');
include("function.php");

if(isset($_POST["s_ID"]))
{
	
	$statement = $conn->prepare(
		"DELETE FROM `suggestion` WHERE s_ID = :s_ID"
	);
	$result = $statement->execute(
		array(
			':s_ID'	=>	$_POST["s_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>