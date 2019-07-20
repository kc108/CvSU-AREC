<?php 
	include('../session.php');
	$login_id = $_SESSION['login_id'];
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
print_r($_POST);
print_r($_GET);
print_r($_REQUEST);

if ($_FILES['atc_file']['error'] > 0) {
			 $filename = "";
		} else {
			
			$target_dir = "uploads";
			$uploadOk = 1;
			$target_file = basename($_FILES["atc_file"]["name"]);
			
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$imageFileTypeMIME = basename($_FILES["atc_file"]["type"]);
			
		
			 $filename = file_newname($target_dir,$target_file);
			// Check file size
			if ($_FILES["atc_file"]["size"] > 500000) {
			    $z_error =  "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" && $imageFileType != "zip" && $imageFileType != "rar" && $imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf" && $imageFileType != "txt"  && $imageFileType != "msword"  && $imageFileType != "vnd.openxmlformats-officedocument.wordprocessingml.document" ) {
			    $z_error =  "Sorry, this type of files are allowed.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    $z_error =  "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["atc_file"]["tmp_name"],$target_dir.'/'.$filename)) {
			        $z_error =   "The file ".basename($_FILES["atc_file"]["name"]). " has been uploaded.";
			    } else {
			        $z_error =   "Sorry, there was an error uploading your file.";
			       
			    }
			}
		}
		
		$atc_file_AttchMIME = $_FILES["atc_file"]["type"];
		$atc_file_AttchData = file_get_contents($target_dir.'/'.$filename);

		$receiver_ID = $_POST["receiver_ID"];
		$message_content = $_POST["message_content"];
		$sender_ID = $_POST["sender_ID"];
		$sql = "INSERT INTO `message` (`message_ID`, `sender_ID`, `receiver_ID`, `message_Content`, `message_Date`) VALUES (NULL, '$sender_ID', '$receiver_ID',  '$message_content', CURRENT_TIMESTAMP);";
		 	$result = mysqli_query($conn, $sql);
			 if (mysqli_num_rows($result) > 0) {

			 }

?>