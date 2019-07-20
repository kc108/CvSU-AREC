<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT *,`ua`.`user_ID` as uID ";
$query .= "FROM `user_accounts` ua
INNER JOIN `register_info` `reg` ON `ua`.`user_ID` = `reg`.`user_ID`
";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE `ua`.`user_ID` LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR reg_fname LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR reg_lname LIKE "%'.$_POST["search"]["value"].'%" ';
    $query .= 'OR reg_address LIKE "%'.$_POST["search"]["value"].'%" ';
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
	

	$sub_array = array();
	$sub_array[] = $row["uID"];
	$sub_array[] = $row["reg_fname"];
	$sub_array[] = $row["reg_lname"];
	$sub_array[] = $row["reg_address"];

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



        
