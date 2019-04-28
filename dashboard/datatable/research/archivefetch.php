<?php
include('db.php');
include('function.php');
session_start();
$login_level = $_SESSION['login_level'];
$query = '';
$output = array();
$query .= "SELECT `r`.*,`rs`.`status_Name`  `rssn`,`ua`.`user_Name`";
$query .= " FROM `research` as `r` 
LEFT JOIN `research_status` as `rs` ON `r`.`status_ID` = `rs`.`status_ID`
LEFT JOIN `user_accounts` `ua` ON `r`.user_ID = `ua`.`user_ID`";
 $query .= " WHERE  `rs`.`status_ID` = '3' AND ";
if(isset($_POST["search"]["value"]))
{

 $query .= '(research_Title LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR status_Name LIKE "%'.$_POST["search"]["value"].'%") ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY research_ID DESC ';
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
	
	if ($login_level == 1) {
		$button = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["research_ID"].'" class="view">View</a></li>';
		if ($row["user_ID"] == $_SESSION['login_id']) {
		$button .='<li><a href="#" id="'.$row["research_ID"].'" class="update">Update</a></li>';
		}
		$button .= '</div>';
	}
	else if ($login_level == 2) {
		$button = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$row["research_ID"].'" class="view">View</a></li>';
		if ($row["user_ID"] == $_SESSION['login_id']) {
		$button .='<li><a href="#" id="'.$row["research_ID"].'" class="update">Update</a></li>';
		}
		$button .='<li><a href="#" id="'.$row["research_ID"].'" class="unarchive">Unarchive</a></li></ul></div>';
	}
	else{
		
	}
	$sub_array = array();
	$sub_array[] = $row["research_ID"];
	$sub_array[] = $row["user_Name"];
	$sub_array[] = $row["research_Title"];
	$sub_array[] = $row["rssn"];
	$sub_array[] = $row["research_Created"];
	$sub_array[] = $button;
	// $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_arcrecords(),
	"data"				=>	$data
);
echo json_encode($output);

?>



        
