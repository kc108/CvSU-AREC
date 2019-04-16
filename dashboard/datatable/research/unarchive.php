<?php

include('db.php');
include("function.php");

if(isset($_POST["research_ID"]))
{
	
	$statement = $connection->prepare(
		"UPDATE `research` SET `status_ID` = '1' WHERE `research`.`research_ID` = :research_ID;"
	);
	$result = $statement->execute(
		array(
			':research_ID'	=>	$_POST["research_ID"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Research Successfully Archive';
	}
}



?>