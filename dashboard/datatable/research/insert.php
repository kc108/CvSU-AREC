<?php

include('db.php');
include('function.php');
session_start();
if(isset($_POST["operation"]))
{
	function file_newname($path, $filename){
		    if ($pos = strrpos($filename, '.')) {
		           $name = substr($filename, 0, $pos);
		           $ext = substr($filename, $pos);
		    } else {
		           $name = $filename;
		    }

		    $newpath = $path.'/'.$filename;
		    $newname = $filename;
		    $counter = 0;
		    while (file_exists($newpath)) {
		           $newname = $name .'_'. $counter . $ext;
		           $newpath = $path.'/'.$newname;
		           $counter++;
		     }

		    return $newname;
		}
	if($_POST["operation"] == "Add")
	{
		
		$login_id = $_SESSION["login_id"];
		$research_Title = $_POST["research_Title"];
		$research_Content = $_POST["research_Content"];
		$research_yrConduct = $_POST["research_yrconduct"];
		
		$research_Status = $_POST["research_Status"];
		
		if ($_FILES['research_Attachment']['error'] > 0) {
			 $filename = "";
		} else {
			
			$target_dir = "uploads";
			$uploadOk = 1;
			$target_file = basename($_FILES["research_Attachment"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$imageFileTypeMIME = basename($_FILES["research_Attachment"]["type"]);
			
		
			echo $filename = file_newname($target_dir,$target_file);
			// Check file size
			if ($_FILES["research_Attachment"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf" && $imageFileType != "txt"  && $imageFileType != "msword"  && $imageFileType != "vnd.openxmlformats-officedocument.wordprocessingml.document" ) {
			    echo "Sorry, this type of files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["research_Attachment"]["tmp_name"],$target_dir.'/'.$filename)) {
			        echo "The file ".basename($_FILES["research_Attachment"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			       
			    }
			}
		}
		
		$research_AttchMIME = $_FILES["research_Attachment"]["type"];
		$research_AttchData = file_get_contents($target_dir.'/'.$filename);

		 	$sql = "INSERT INTO `research` 
		(`research_ID`,
		 `research_Title`,
		  `research_Content`,
		   `status_ID`,
		    `research_yrConduct`,
		    `research_Created`,
		     `research_Attachment`,
		     `research_AttchMIME`,
		     `research_AttchData`,
		     `user_ID`) 
		VALUES 
		(NULL,
		 :research_Title,
		  :research_Content,
		   :research_Status,
		   :research_yrConduct,
		    CURRENT_TIMESTAMP,
		     :filename,
		     :research_AttchMIME,
		     :research_AttchData,
		     :login_id);";
			$statement = $connection->prepare($sql);
			
			$result = $statement->execute(
				array(
					':research_Title'			=>	$research_Title,
					':research_Content'		=>	$research_Content,
					':filename'	 		=>	$filename,
					':research_AttchMIME'	 		=>	$research_AttchMIME,
					':research_AttchData'	 		=>	$research_AttchData,
					':research_Status'	 		=>	$research_Status,
					':research_yrConduct'	 		=>	$research_yrConduct,
					':login_id'	 		=>	$login_id
				)
			);

			$notif = "INSERT INTO `notification` (`notif_ID`, `user_ID`, `notif_Msg`, `notif_Date`, `notif_State`) VALUES 
			(NULL,
			 :login_id,
			  :notif_msg,
			   CURRENT_TIMESTAMP,
			    NULL);";
			$statement1 = $connection->prepare($notif);
			
			$result1 = $statement1->execute(
				array(
					':notif_msg'		=>	"Research Added: (".$research_Title.")",
					':login_id'	 		=>	$login_id
				)
			);

			if(!empty($result))
			{
				echo 'Successfully Research Added';
			}


	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$research_ID = $_POST["research_ID"];
		
		$research_Title = $_POST["research_Title"];
		$research_Content = $_POST["research_Content"];
		$research_Status = $_POST["research_Status"];
		if ($_FILES['research_Attachment']['error'] > 0) {
			 $filename = "";
		} else {
			
			$target_dir = "uploads";
			$uploadOk = 1;
			$target_file = basename($_FILES["research_Attachment"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
		
			 $filename = file_newname($target_dir,$target_file);
			// Check file size
			if ($_FILES["research_Attachment"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf" ) {
			    echo "Sorry, this type of files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["research_Attachment"]["tmp_name"],$target_dir.'/'.$filename)) {
			        echo "The file ".basename($_FILES["research_Attachment"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			       
			    }
			}
		}

		$research_AttchMIME = $_FILES["research_Attachment"]["type"];
		$research_AttchData = file_get_contents($target_dir.'/'.$filename);
		
		 $sql ="UPDATE `research` SET 
		 `research_Title` = :research_Title,
		 `research_Content` = :research_Content,
		 `status_ID` = :research_Status,
		 `research_Attachment` = :filename,
		 `research_AttchMIME` = :research_AttchMIME,
		 `research_AttchData` = :research_AttchData
		  WHERE `research`.`research_ID` = :research_ID";
		
		$statement = $connection->prepare($sql);
		
		$result = $statement->execute(
				array(
					':research_ID'			=>	$research_ID,
					':research_Title'		=>	$research_Title,
					':research_Content'		=>	$research_Content,
					':filename'	 		=>	$filename,
					':research_AttchMIME'	 		=>	$research_AttchMIME,
					':research_AttchData'	 		=>	$research_AttchData,
					':research_Status'	 		=>	$research_Status
				)
			);

		if ($research_Status == 2) {
			$za = " Approved";
		}
		if ($research_Status == 3) {
			$za = " Archive";
		}

		$statementz = $connection->prepare(
		"SELECT research_Title,user_ID FROM `research`  WHERE research_ID =".$_POST["research_ID"]
		);
		 $statementz->execute();
		 $resultz = $statementz->fetchAll();
		 foreach($resultz as $rowz)
		 {
		   $research_Title = $rowz["research_Title"];
		   $user_IDz = $rowz["user_ID"];
		 }
		$notif = "INSERT INTO `notification` (`notif_ID`, `user_ID`, `notif_Msg`, `notif_Date`, `notif_State`,`notif_Type`) VALUES 
				(NULL,
				 :login_id,
				  :notif_msg,
				   CURRENT_TIMESTAMP,
				    NULL,
					2);";

				$statement1 = $connection->prepare($notif);
				
				$result1 = $statement1->execute(
					array(
						':notif_msg'		=>	$research_Title.$za,
						':login_id'	 		=>	$user_IDz
					)
				);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>
