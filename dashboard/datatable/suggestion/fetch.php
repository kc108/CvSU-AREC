<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT *";
$query .= " FROM `suggestion`";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE subject LIKE "%'.$_POST["search"]["value"].'%" ';
}


if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY s_ID DESC ';
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

	$s_ID = $row["s_ID"];
    $fname = $row["fname"];
    $lname = $row["lname"];
    $email = $row["email"];
    $subject = $row["subject"];
    $date = $row["date"];
    $date = strtotime($date);
    $date_f = date("Y-m-d h:i:sa",$date);
	$sub_array = array();
	$sub_array[] = $fname.' '.$lname;
	$sub_array[] = $subject;
	$sub_array[] = $date_f;
	
	$sub_array[] = '<div class="dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action<span class="caret"></span></button><ul class="dropdown-menu"><li><a href="#" id="'.$s_ID.'" class="view">View</a></li><li><a href="#" id="'.$s_ID.'" class="delete">Delete</a></li></ul></div>';
	
	
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



        
