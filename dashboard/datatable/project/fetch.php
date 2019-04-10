<?php
include('db.php');
include('function.php');
session_start();
$login_level = $_SESSION['login_level'];
$query = '';
$output = array();

$query .= "SELECT `pm`.*,`s`.`status_Name`";
$query .= "FROM `project_monitoring` `pm` LEFT JOIN `status` `s` ON `pm`.`status_ID` = `s`.`status_ID` ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE proj_Title LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR proj_Owner LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY date_added DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	


		$button = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["proj_ID"].'" class="view">View</a></li><li><a href="#" id="'.$row["proj_ID"].'" class="update">Update</a></li><li><a href="#" id="'.$row["proj_ID"].'" class="delete">Delete</a></li></ul></div>';
	
	$sub_array = array();
	$sub_array[] = $row["proj_Title"];
	$sub_array[] = $row["proj_Owner"];
	$sub_array[] = $row["proj_DateStarted"];
	$sub_array[] = $row["proj_DateEnded"];
	$sub_array[] = $row["proj_Location"];
	$sub_array[] = $row["status_Name"];
	$sub_array[] = $button;
	// $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);

?>



        
