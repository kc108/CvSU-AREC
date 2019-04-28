<?php
include('../../../data-md5.php');

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM `research` WHERE status_ID = 1 OR status_ID = 2 ");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}
function get_total_all_arcrecords()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM `research` WHERE status_ID = 3");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}




?>