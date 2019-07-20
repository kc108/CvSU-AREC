<?php
include('db.php');
include('function.php');
if(isset($_POST["update"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `user_accounts` `ua`
		LEFT JOIN `register_info` `reg` ON `reg`.`user_ID` = `ua`.`user_ID`
		WHERE `ua`.`user_ID` = '".$_POST["user_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{


		$output["reg_fname"] = $row["reg_fname"];
		$output["reg_lname"] = $row["reg_lname"];
		$output["reg_address"] = $row["reg_address"];
		$output["reg_contact"] = $row["reg_contact"];
		
		$output["level_ID"] = $row["level_ID"];
		$output["user_Name"] = $row["user_Name"];
		$output["user_Pass"] = decryptIt($row["user_Pass"]);
		$output["user_Email"] = $row["user_Email"];
		$output["user_status"] = $row["user_status"];
	
	}
	echo json_encode($output);
}

if (isset($_POST['view'])) {
	
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM `register_info` WHERE user_ID  = '".$_POST["user_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

		$output["reg_fname"] = $row["reg_fname"];
		$output["reg_lname"] = $row["reg_lname"];
		$output["reg_address"] = $row["reg_address"];
		$output["reg_contact"] = $row["reg_contact"];
	
	}
	echo json_encode($output);
	
}
?>