<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{

	if($_POST["operation"] == "Add")
	{
		
		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];

			$sql = "INSERT INTO `news` (`news_ID`, `news_Title`, `news_Content`, `news_Pub`) VALUES (NULL, :news_title, :news_content, CURRENT_TIMESTAMP);";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':news_title'			=>	$news_title,
					':news_content'		=>	$news_content
				)
			);

			$news = "SELECT user_ID FROM `user_accounts`";
			$statementnews = $conn->prepare($news);
				
			$statementnews->execute();
			$resultnews = $statementnews->fetchAll();
			foreach($resultnews as $row)
			{
				$r_user_ID = $row['user_ID'];

				$news1 = "INSERT INTO `notification` (`notif_ID`, `user_ID`, `notif_Msg`, `notif_Date`, `notif_Type`, `notif_State`) 
					VALUES (NULL, $r_user_ID, News '$news_title', CURRENT_TIMESTAMP, 2, NULL);";
				$statementnews1 = $conn->prepare($news1);
					
				$statementnews1->execute();

			}

			if(!empty($result))
			{
				session_start();
				$msg = $_SESSION['user_Name']." Add News ".$news_title;
				$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
				$smentry = $conn->prepare($mentry);
				$rmentry = $smentry->execute();
				echo 'Successfully News Added';
			}

		

	
	}

	if($_POST["operation"] == "Edit")
	{
		
		$news_ID = $_POST["news_ID"];

		$news_title = $_POST["news_title"];
		$news_content = $_POST["news_content"];

			$sql = "UPDATE `news` SET `news_Title` = :news_title,`news_Content` = :news_content WHERE `news`.`news_ID` = :news_ID;";
			$statement = $conn->prepare($sql);
			
			$result = $statement->execute(
				array(
					':news_ID'		=>	$news_ID,
					':news_title'		=>	$news_title,
					':news_content'		=>	$news_content
				)
			);

			if(!empty($result))
			{
				session_start();
				$msg = $_SESSION['user_Name']." Edit News: ".$news_title;
				$mentry = "INSERT INTO `monitor_entry` (`mentry_ID`, `mentry_Msg`, `mentry_Date`) VALUES (NULL, '$msg', CURRENT_TIMESTAMP)";
				$smentry = $conn->prepare($mentry);
				$rmentry = $smentry->execute();
				echo 'Successfully News Update';
			}

	}
}
?>
