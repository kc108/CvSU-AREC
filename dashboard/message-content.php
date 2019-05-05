
<?php 
	// include('../dbconfig.php');
	include('../session.php');
	$login_id = $_SESSION['login_id'];

if (isset($_POST['receiver_ID']) || isset($_REQUEST['receiver_ID']) || isset($_GET['receiver_ID']) ) {
	
	
	if (isset($_POST['receiver_ID'])) {
		$receiver_ID = $_POST['receiver_ID'];
	} else {
		$receiver_ID = $_REQUEST['receiver_ID'];
	}
	

	// if ($_SESSION['login_level'] == 2) {
		$sql = "




SELECT  
       sender.user_Name AS sender_user_name
       ,recipient.user_Name AS recipient_user_name
        ,sender_ID
        ,receiver_ID
       ,message_Date
       ,message_Content

FROM    
       cvsu_arec.message 

       INNER JOIN cvsu_arec.user_accounts AS sender 
       ON sender.user_ID = sender_ID

       INNER JOIN cvsu_arec.user_accounts AS recipient 
       ON recipient.user_ID = receiver_ID

WHERE   
       sender_ID = $login_id AND  receiver_ID = $receiver_ID
       OR receiver_ID = $login_id AND sender_ID = $receiver_ID 

ORDER BY
       message_Date ASC

";
// 	}
// 	if ($_SESSION['login_level'] == 1) {

// 	$sql = "SELECT * FROM `message`  `msg`
// LEFT JOIN `user_accounts` `ua` ON `msg`.sender_ID = `ua`.user_ID
// WHERE sender_ID = $receiver_ID or sender_ID = $login_id  AND receiver_ID = $login_id or receiver_ID = $receiver_ID;";
// 	}
	 $result = mysqli_query($conn, $sql);
	 if (mysqli_num_rows($result) > 0) {
         // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

        	if (!empty($row['user_img'])) {
			 $message_sender_image= 'data:image/jpeg;base64,'.base64_encode($row['user_img']);
			}
			else{
			  $message_sender_image = "../assets/images/user-profile.png";
			}        	
        	$message_Sender = $row['sender_ID'];
        	$message_Content = $row['message_Content'];
        	$message_Date = $row['message_Date'];
            $message_Date = date_create($message_Date);
            if ($login_id == $message_Sender) {
            ?>
            <div class="outgoing_msg">
			  <div class="sent_msg">
			    <p><?php echo $message_Content;?></p>
			    <span class="time_date"><?php echo date_format($message_Date,"H:i:s");;?>  |<?php echo date_format($message_Date,"m/d");;?></span> </div>
			</div>
            <?php
            } 
            else {
            ?>
            <div class="incoming_msg">
			  <div class="incoming_msg_img"> <img src="<?php echo $message_sender_image;?>" alt="sunil"> </div>
			  <div class="received_msg">
			    <div class="received_withd_msg">
			      <p><?php echo $message_Content;?> </p>
			      <span class="time_date"> <?php echo date_format($message_Date,"H:i:s");;?>  |<?php echo date_format($message_Date,"m/d");;?></span></div>
			  </div>
			</div>
            <?php
            }
        }
    }
    else{
    	?>
	No Conversation Available
	<?php
    }
} else {

}

	
?>

<input type="hidden" name="conversation_ID" id="conversation_ID" value="<?php echo $receiver_ID;?>">