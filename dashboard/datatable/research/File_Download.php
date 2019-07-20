<?php 

include('db.php');


$id = isset($_GET['id'])? $_GET['id'] : "";
$stat = $connection->prepare("SELECT research_Attachment,research_AttchMIME,research_AttchData FROM `research`  WHERE research_ID=? LIMIT 1");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header("Content-Type:".$row['research_AttchMIME']);
header('Content-disposition: filename="'.$row['research_Attachment'].'"');
echo $row['research_AttchData'];
?>
