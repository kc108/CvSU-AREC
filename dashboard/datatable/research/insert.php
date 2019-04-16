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
		$research_Status = $_POST["research_Status"];
		
		if ($_FILES['research_Attachment']['error'] > 0) {
			 $filename = "";
		} else {
			
			$target_dir = "uploads";
			$uploadOk = 1;
			$target_file = basename($_FILES["research_Attachment"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
		
			echo $filename = file_newname($target_dir,$target_file);
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
		
		


		echo 	$sql = "INSERT INTO `research` 
		(`research_ID`,
		 `research_Title`,
		  `research_Content`,
		   `status_ID`,
		    `research_Created`,
		     `research_Attachment`,
		     `user_ID`) 
		VALUES 
		(NULL,
		 :research_Title,
		  :research_Content,
		   :research_Status,
		    CURRENT_TIMESTAMP,
		     :filename,
		     :login_id);";
			$statement = $connection->prepare($sql);
			
			$result = $statement->execute(
				array(
					':research_Title'			=>	$research_Title,
					':research_Content'		=>	$research_Content,
					':filename'	 		=>	$filename,
					':research_Status'	 		=>	$research_Status,
					':login_id'	 		=>	$login_id
				)
			);

			if(!empty($result))
			{
				echo 'Successfully User Added';
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
		 $sql ="UPDATE `research` SET 
		 `research_Title` = :research_Title,
		 `research_Content` = :research_Content,
		 `status_ID` = :research_Status,
		 `research_Attachment` = :filename
		  WHERE `research`.`research_ID` = :research_ID";
		
		$statement = $connection->prepare($sql);
		
		$result = $statement->execute(
				array(
					':research_ID'			=>	$research_ID,
					':research_Title'		=>	$research_Title,
					':research_Content'		=>	$research_Content,
					':filename'	 		=>	$filename,
					':research_Status'	 		=>	$research_Status
				)
			);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>
