<?php
include('db.php');
include('function.php');

if(isset($_POST["s_ID"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `suggestion`
		WHERE s_ID = '".$_POST["s_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

	$output["fname"] = $row["fname"];
	$output["lname"] = $row["lname"];
	$output["email"] = $row["email"];
	$output["subject"] = $row["subject"];
	$output["message"] = $row["message"];
	
	}
	echo json_encode($output);
}
?>
