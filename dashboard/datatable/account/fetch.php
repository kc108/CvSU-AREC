<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT *,`ua`.`user_ID` as uID ";
$query .= "FROM `user_accounts` ua
LEFT JOIN `user_level` `ul` ON `ua`.`level_ID` = `ul`.`level_ID`
LEFT JOIN `user_status` `us` ON `ua`.`user_status` = `us`.`status_ID`
LEFT JOIN `register_info` `reg` ON `ua`.`user_ID` = `reg`.`user_ID`
";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE `ua`.`user_ID` LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR user_Name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR level_Name LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR status_Name LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY `ua`.`user_ID` DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();



foreach($result as $row)
{
	
	$query1 = "SELECT * FROM `research` WHERE user_ID = ".$row["user_ID"]." ORDER BY `research_ID`  DESC";
	$statement1 = $conn->prepare($query1);
	$statement1->execute();
	$content_row = $statement1->rowCount();

	$sub_array = array();
	$sub_array[] = $row["uID"];
	$sub_array[] = $row["level_name"];
	$sub_array[] = $row["user_Name"];
	$sub_array[] = $row["status_Name"];
	$sub_array[] = $row["user_Registered"];
	if (empty($content_row)) {
		if ($row["level_name"] == "researcher") {
			$del = '<li><a href="#" id="'.$row["user_ID"].'" class="delete">Delete</a></li>';
		}
		else{
			
		}
		
	}
	else{
		$del = "";
	}

	$sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["user_ID"].'" class="view">View Info</a></li><li><a href="#" id="'.$row["user_ID"].'" class="update">Update</a></li>'.$del.'</ul></div>';
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



        
