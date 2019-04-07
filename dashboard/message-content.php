
<?php 
	// include('../dbconfig.php');
	include('../session.php');
	$login_id = $_SESSION['login_id'];

if (isset($_POST['research_ID']) || isset($_REQUEST['research_ID']) ) {
	
	
	if (isset($_POST['research_ID'])) {
		$research_ID = $_POST['research_ID'];
	} else {
		$research_ID = $_REQUEST['research_ID'];
	}
	
	$sql = "SELECT * FROM `message`  `msg`
			INNER JOIN `user_accounts` `ua` ON `msg`.user_ID = `ua`.user_ID
			WHERE `research_ID` =$research_ID;";
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
        	$message_Sender = $row['user_ID'];
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

<input type="hidden" name="conversation_ID" id="conversation_ID" value="<?php echo $research_ID;?>">