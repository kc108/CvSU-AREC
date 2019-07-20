<!-- Message -->
<li class="dropdown">
    <a href="message" class="dropdown-toggle" >
        <i class="material-icons">message</i>
        <!-- <span class="label-count">7</span> -->
    </a>
</li>
<!-- #END# Message -->
<?php 
	$login_id = $_SESSION['login_id'];
	

    
    if ($login_level == 2) {
        $sql ="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
WHERE ua.level_ID = 2  AND notif_State is null
ORDER BY `notf`.`notif_Date` DESC limit 25";
    }

    else{
        $sql ="SELECT * FROM `notification` WHERE user_ID = $login_id AND notif_Type = 2 AND notif_State is null lIMIT 25";
    }
    $result = mysqli_query($conn, $sql);
    $notif_unseen_count = mysqli_num_rows($result) ;


function get_timeago( $ptime )
{
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'less than 1 second ago';
    }

    $condition = array( 
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}
	function notif_li($label,$time,$notif_Type){
		
        if ($notif_Type == "1") {
           $iconz = "person";
        }
        if ($notif_Type == "2") {
            $iconz = "speaker_notes";
        }
        if ($notif_Type == "3") {
             $iconz = "info";
        }
        if ($notif_Type == "4") {
             $iconz = "search";
        }
        if ($notif_Type == "5") {
             $iconz = "personal_video";
        }
        if ($notif_Type == "6") {
             $iconz = "map";
        }
    	?>
    	<li>
	        <a href="javascript:void(0);">
	            <div class="icon-circle bg-light-green">
	                <i class="material-icons"><?php echo $iconz?></i>
	            </div>
	            <div class="menu-info">
	                <h4><?php echo $label?></h4>
	                <p>
	                    <i class="material-icons">access_time</i> <?php echo get_timeago(strtotime($time));?>
	                </p>
	            </div>
	        </a>
	    </li>
    	<?php
    }

?>
<!-- Notifications -->
<li class="dropdown">
    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" id="notif_seen">
        <i class="material-icons">notifications</i>
        <span class="label-count" id="label_count"><?php echo $notif_unseen_count?></span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">NOTIFICATIONS</li>
        <li class="body">
            <ul class="menu">
             
                <?php

					$sql =" SELECT * FROM `notification` WHERE user_ID = $login_id ORDER BY `notification`.`notif_Date` DESC LIMIT 10";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)) {

                        $notif_Msg = $row['notif_Msg'];
                        $notif_Date = $row['notif_Date'];
                        $notif_Type = $row['notif_Type'];
                        notif_li($notif_Msg,$notif_Date,$notif_Type);
                    }
              
                ?>
            </ul>
        </li>
        <li class="footer">
            <a href="notification">View All Notifications</a>
        </li>
    </ul>
</li>
<!-- #END# Notifications -->
