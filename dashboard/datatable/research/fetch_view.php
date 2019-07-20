<?php
include('db.php');
include('function.php');
if(isset($_POST["research_ID"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM `research` r
INNER JOIN research_status rs ON r.status_ID = rs.status_ID
WHERE research_ID = '".$_POST["research_ID"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{

    $output["research_ID"] = $row["research_ID"];
		$output["research_Title"] = $row["research_Title"];
    $output["research_Author"] = $row["research_Author"];
    
		$output["research_Content"] = $row["research_Content"];
    $output["research_yrConduct"] = $row["research_yrConduct"];
		$output["research_Attachment"] = 'datatable/research/uploads/'.$row["research_Attachment"];

    $output["research_AttchMIME"] = $row["research_AttchMIME"];

    // $output["research_AttchData"] = $row["research_AttchData"];
		$output["research_Status"] = $row["status_ID"];
		$output["research_Created"] = $row["research_Created"];

    $output["research_view"] = "";


   $output["research_view"] .= '<div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label"><label for="research_attachment">Attachment</label></div><div class="col-lg-10 col-md-10 col-sm-8 col-xs-7"><div class="form-group"><div class="">';
    if (empty($row["research_AttchData"])) {

      if (empty($row["research_Attachment"])) {
        $output["research_view"] .= "No Attachment Available";
      }
      else{
        $output["research_view"] .= '<a class="btn btn-primary" href="'.$output["research_Attachment"].'" download>DOWNLOAD</a>';
     
      }
    } else {
        $output["research_view"] .= "<a  class='btn btn-primary' href='datatable/research/File_Download.php?id=".$_POST["research_ID"]."' target='_blank'>Download</a>";
     }
     $output["research_view"] .= '</div></div></div></div>';


	
	}
	echo json_encode($output);
}
?>

                              
