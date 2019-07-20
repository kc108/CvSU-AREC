<?php
include('db.php');
include('function.php');
session_start();

if(isset($_POST["operation"]))
{

	$login_ID = $_SESSION['login_id'];
	if($_POST["operation"] == "Add")
	{
		
		$aa_fname = $_POST["aa_fname"];
		$aa_lname = $_POST["aa_lname"];
		$aa_address = $_POST["aa_address"];
		$aa_contact = $_POST["aa_contact"];

		$username = $_POST["username"];
		$level = $_POST["level"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$con_pass = $_POST["con_pass"];
		$status = $_POST["status"];
		

		
		$sql = "SELECT * FROM `user_accounts` WHERE `user_Name`= :user_Name;";
		$statement = $conn->prepare($sql);
		$statement->bindParam(':user_Name', $username, PDO::PARAM_STR);
		$result = $statement->execute();
		$resultrows = $statement->rowCount();

		if (empty($resultrows)) { 
		   // if username is available

			$sql = "INSERT INTO `user_accounts` (`user_ID`, `level_ID`, `user_Name`, `user_Pass`, `user_Email`, `user_Registered`, `user_status`) VALUES (NULL, :level, :user_Name, :encrypted_pass, :email, CURRENT_TIMESTAMP, :status);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':level'			=>	$level,
					':user_Name'		=>	$username,
					':encrypted_pass' 	=>	encryptIt($pass),
					':email'	  		=>	$email,
					':status'	 		=>	$status
				)
			);

			$last_id = $conn->lastInsertId();

			$rsql = "INSERT INTO `register_info` (`reg_ID`, `user_ID`, `reg_fname`, `reg_lname`, `reg_address`, `reg_contact`) 
			VALUES (NULL, $last_id, '$aa_fname', '$aa_lname', '$aa_address', '$aa_contact');";

			$stmt = $conn->prepare($rsql);
			
			$rstmt = $stmt->execute();


			$sql1 = "INSERT INTO `notification` (
			`notif_ID`,
			 `user_ID`,
			  `notif_Msg`,
			   `notif_Date`,
			    `notif_Type`,
			     `notif_State`) 
			VALUES (
			NULL,
			 $login_ID,
			  '$username Account Added', CURRENT_TIMESTAMP, 1, NULL);";

			$statement1 = $conn->prepare($sql1);
			
			$result1 = $statement1->execute();



			
			$msg = $_SESSION['user_Name']." Add User ".$username;
			$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
			$smentry = $conn->prepare($mentry);
			$rmentry = $smentry->execute();

			if(!empty($result))
			{
				echo 'Successfully User Added';
			}

		} else {
		   // if username is not available
			echo 'Username is Already Use';

		}

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$user_ID = $_POST["user_ID"];
		


		$aa_fname = $_POST["aa_fname"];
		$aa_lname = $_POST["aa_lname"];
		$aa_address = $_POST["aa_address"];
		$aa_contact = $_POST["aa_contact"];
		
		$level = $_POST["level"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$con_pass = $_POST["con_pass"];
		$status = $_POST["status"];
		
		 $sql ="UPDATE `user_accounts` SET `level_ID` = :level,`user_Pass` = :encrypted_pass,`user_Email` = :email,`user_status` = :status WHERE `user_accounts`.`user_ID` = :user_ID;";
		
		$statement = $conn->prepare($sql);
		
		$result = $statement->execute(
				array(
					':user_ID'			=>	$user_ID,
					':level'			=>	$level,
					':encrypted_pass' 	=>	encryptIt($pass),
					':email'	  		=>	$email,
					':status'	 		=>	$status
				)
			);

		$rsql = "UPDATE `register_info` SET 
		`reg_fname` = '$aa_fname',
		`reg_lname` = '$aa_lname',
		`reg_address` = '$aa_address',
		`reg_contact` = '$aa_contact'
		 WHERE `register_info`.`user_ID` = $user_ID";
		$stmt = $conn->prepare($rsql);
		$stmt->execute();



		


		$zc = "SELECT user_Name FROM `user_accounts`  WHERE  user_ID = $user_ID";
		$statementzc = $conn->prepare($zc);
			
		$statementzc->execute();
		$resultxz = $statementzc->fetchAll();
		foreach($resultxz as $row)
		{
			$zuser_Name = $row['user_Name'];
		}


		$msg = $_SESSION['user_Name']." Update User ".$zuser_Name;
		$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
		$smentry = $conn->prepare($mentry);
		$rmentry = $smentry->execute();
		
			//DEACTIVATE 
		if ($level == "0") {
				$sql2 = "INSERT INTO `notification` (
			`notif_ID`,
			 `user_ID`,
			  `notif_Msg`,
			   `notif_Date`,
			    `notif_Type`,
			     `notif_State`) 
			VALUES (
			NULL,
			 $login_ID,
			  '$zuser_Name Account Deactivated', CURRENT_TIMESTAMP, 1, NULL);";

			$statement2 = $conn->prepare($sql2);
			
			$result2 = $statement2->execute();
			
		}
		//ACTIVATED 
		if ($level == "1") {
				$sql1 = "INSERT INTO `notification` (
			`notif_ID`,
			 `user_ID`,
			  `notif_Msg`,
			   `notif_Date`,
			    `notif_Type`,
			     `notif_State`) 
			VALUES (
			NULL,
			 $login_ID,
			  '$zuser_Name Account Activated', CURRENT_TIMESTAMP, 1, NULL);";

			$statement1 = $conn->prepare($sql1);
			
			$result1 = $statement1->execute();
		}
	


		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}
?>
