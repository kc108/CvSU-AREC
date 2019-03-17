<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Edit")
	{
		
		$loc_title = $_POST["loc_title"];
		$loc_descr = $_POST["loc_descr"];
		$loc_stat = $_POST["loc_stat"];
		$location_id = $_POST["location_id"];

		if ($loc_stat == 1 || $loc_stat == 0 ) {
			$sql = "UPDATE `locations` SET `title` = :loc_title,`description` = :loc_descr,`location_status` = :loc_stat WHERE `locations`.`id` = :location_id;";
		}
		else{
			$sql = "UPDATE `locations` SET `title` = :loc_title,`description` = :loc_descr WHERE `locations`.`id` = :location_id;";
		}
		$statement = $connection->prepare($sql);
		$result = $statement->execute(
			array(
				':loc_title'	=>	$loc_title,
				':loc_descr'	=>	$loc_descr,
				':loc_stat'		=>	$loc_stat,
				':location_id'	=>	$location_id
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
	else{
		echo 'error';
	}
}
print_r($_POST);
?>
