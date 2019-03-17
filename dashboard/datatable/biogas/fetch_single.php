<?php
include('db.php');
include('function.php');
if(isset($_POST["location_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM `locations`
		WHERE id = '".$_POST["location_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["loc_title"] = $row["title"];
		$output["loc_descr"] = $row["description"];
		$output["location_status"] = $row["location_status"];
	
	}
	echo json_encode($output);
}
?>