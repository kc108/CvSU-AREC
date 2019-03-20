<?php
include('db.php');
include('function.php');
if(isset($_POST["research_ID"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM `research`
		WHERE research_ID = '".$_POST["research_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["research_Title"] = $row["research_Title"];
		$output["research_Content"] = $row["research_Content"];
		$output["research_Attachment"] = $row["research_Attachment"];
		$output["research_Status"] = $row["research_Status"];
		$output["research_Created"] = $row["research_Created"];
	
	}
	echo json_encode($output);
}
?>