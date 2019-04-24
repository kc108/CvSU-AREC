<?php

include('db.php');
include('function.php');
session_start();
if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Add")
	{
	$project_title = $_POST["project_title"];
		$project_owner = $_POST["project_owner"];
		$project_location = $_POST["project_location"];
		$project_start = $_POST["project_start"];
		$project_end = $_POST["project_end"];
		$project_scope = $_POST["project_scope"];
		$project_head = $_POST["project_head"];
		$project_status = $_POST["project_status"];

		$sql ="INSERT INTO `project_monitoring` (
		`proj_ID`,
		 `proj_Title`,
		  `proj_Owner`,
		   `proj_Location`,
		    `proj_Costing`,
		     `proj_DateStarted`,
		      `proj_DateEnded`,
		       `proj_Scope`,
		        `proj_Head`,
		         `status_ID`,
		          `proj_Expenses`,
		           `visibility`,
		            `date_added`) 
		            VALUES (
		            NULL,
		             :project_title,
		              :project_owner,
		               :project_location,
		                NULL,
		                 :project_start,
		                  :project_end,
		                   :project_scope,
		                    :project_head,
		                     :project_status,
		                      NULL,
		                       '1', CURRENT_TIMESTAMP);";
		
		$statement = $connection->prepare($sql);
		
		$result = $statement->execute(
				array(
					':project_title' 	=> $project_title,
					':project_owner' 	=> $project_owner,
					':project_location' => $project_location,
					':project_start' 	=> $project_start,
					':project_end' 		=> $project_end,
					':project_scope' 	=> $project_scope,
					':project_head' 	=> $project_head,
					':project_status' 	=> $project_status


				)
			);
		if(!empty($result))
		{
			echo 'Successfully Project Add';
		}
		
	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$proj_ID = $_REQUEST["proj_ID"];

		$project_title = $_POST["project_title"];
		$project_owner = $_POST["project_owner"];
		$project_location = $_POST["project_location"];
		$project_start = $_POST["project_start"];
		$project_end = $_POST["project_end"];
		$project_scope = $_POST["project_scope"];
		$project_head = $_POST["project_head"];
		$project_status = $_POST["project_status"];
		
		
		
		 $sql ="UPDATE `project_monitoring` 
		 SET `proj_Title` = :project_title ,
		 `proj_Owner` = :project_owner ,
		 `proj_Location` = :project_location ,
		 `proj_DateStarted` = :project_start ,
		 `proj_DateEnded` = :project_end ,
		 `proj_Scope` = :project_scope ,
		 `proj_Head` = :project_head ,
		 `status_ID` = :project_status 
		 WHERE `project_monitoring`.`proj_ID` = :proj_ID;";
		
		$statement = $connection->prepare($sql);
		
		$result = $statement->execute(
				array(
					':proj_ID'			=>	$proj_ID,
					':project_title' 	=> $project_title,
					':project_owner' 	=> $project_owner,
					':project_location' => $project_location,
					':project_start' 	=> $project_start,
					':project_end' 		=> $project_end,
					':project_scope' 	=> $project_scope,
					':project_head' 	=> $project_head,
					':project_status' 	=> $project_status


				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>
