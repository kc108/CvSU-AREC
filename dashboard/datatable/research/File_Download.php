<?php 

include('db.php');
// if(isset($_GET["research_ID"]))
// {
// 	$output = array();
// 	$statement = $connection->prepare(
// 		"SELECT research_AttchMIME,research_AttchData FROM `research`  WHERE research_ID=43 LIMIT 1"
// 	);
// 	$statement->execute();
// 	$result = $statement->fetchAll();
// 	foreach($result as $row)
// 	{

// 		$output["research_AttchMIME"] = $row["research_AttchMIME"];
// 		$output["research_AttchData"] = $row["research_AttchData"];

	
// 	}
// 	header('Content-Type:'.$output["research_AttchMIME"]);
// 	echo $output["research_AttchData"];
	
// }


$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $connection->prepare("SELECT research_Attachment,research_AttchMIME,research_AttchData FROM `research`  WHERE research_ID=? LIMIT 1");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header("Content-Type:".$row['research_AttchMIME']);
header('Content-disposition: filename="'.$row['research_Attachment'].'"');
echo $row['research_AttchData'];
?>
