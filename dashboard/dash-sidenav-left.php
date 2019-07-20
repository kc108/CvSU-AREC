<?php 
// session_start();
$login_id = $_SESSION['login_id'];
function notif_label_count($count,$icon){

  if ($count == 0) {
    $ntip ="";
    $ntipc ="";
  
  }
  else{

    $ntip = '<span class="label-count $icon" id="label_count" style="right: 256px !important;     color:white;">'.$count.'</span>';
    $ntipc = 'style="color: red;" ';
  }
  echo $ntip;
  ?>
     
     <i class="material-icons" <?php echo $ntipc?>><?php echo $icon?> </i>
  <?php
}



function side_dashboard(){
    ?>
    <li
    <?php if ($GLOBALS["pagename"] == "Dashboard"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    
    >
        <a href="index">

           <?php notif_label_count(0,"home")?>
            
            <span>Dashboard</span>
        </a>
    </li>
    <?php
}
function side_account($conn,$login_level){

    if ($login_level == 2) {
      $acc_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 1 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $acc_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE `ua`.level_ID = 1  AND notif_Type = 1  AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $acc_nresult = mysqli_query($conn, $acc_sql);
    $acc_ncount = mysqli_num_rows($acc_nresult);
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "Account Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <!-- <a href="account" id="cl_acc">
          <?php notif_label_count($acc_ncount,"account_box")?>
            <span>Account</span>
        </a> -->
        <a href="javascript:void(0);" class="menu-toggle" id="cl_acc">
           <?php notif_label_count($acc_ncount,"account_box")?>
            <span>Reports</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="account" class=" waves-effect waves-block" >LIST OF ACCOUNT</a>
            </li>
            <li>
                <a href="user_info" class=" waves-effect waves-block" >LIST OF USER INFORMATION</a>
            </li>
        </ul>
    </li>
    <?php
}
function side_news($conn,$login_level){
     if ($login_level == 2) {
      $news_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $news_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $news_nresult = mysqli_query($conn, $news_sql);
    $news_ncount = mysqli_num_rows($news_nresult);
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "News Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <a href="news" id="cl_news">
            <?php notif_label_count($news_ncount,"speaker_notes")?>
            <span>News</span>
        </a>
    </li>
    <?php
}
function side_suggestion($conn,$login_level){
       if ($login_level == 2) {
      $suggest_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 3 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $suggest_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $suggest_nresult = mysqli_query($conn, $suggest_sql);
    $suggest_ncount = mysqli_num_rows($suggest_nresult);
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "Suggestion Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <a href="suggestion" id="cl_sugg">
          <?php notif_label_count($suggest_ncount,"info")?>
            <span>Suggestion</span>
        </a>
    </li>
    <?php
}
function side_researcher($conn,$login_level,$login_id){
   if ($login_level == 2) {
      $research_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 4 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $research_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND `ua`.user_ID = ".$login_id." AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $research_nresult = mysqli_query($conn, $research_sql);
    $research_ncount = mysqli_num_rows($research_nresult);
    ?>
  <li
  <?php if ($GLOBALS["pagename"]  == "Research"): ?>
      class="active"
  <?php else: ?>
      
  <?php endif ?>
  >
      <a href="research" id="cl_res">
          
        <?php notif_label_count($research_ncount,"search")?>
          <span>Research</span>
      </a>
  </li>
    <?php
}
function side_projectmonitoring($conn,$login_level){
     if ($login_level == 2) {
      $proj_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 5 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $proj_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $proj_nresult = mysqli_query($conn, $proj_sql);
    $proj_ncount = mysqli_num_rows($proj_nresult);
    ?>
  <li
  <?php if ($GLOBALS["pagename"]  == "Project Monitoring"): ?>
      class="active"
  <?php else: ?>
      
  <?php endif ?>
  >
      <a href="projectmonitoring" id="cl_proj">
          <?php notif_label_count($proj_ncount,"personal_video")?>
          <span>Project Monitoring</span>
      </a>
  </li>
    <?php
}

function side_biogas($conn,$login_level){
  if ($login_level == 2) {
      $bio_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 6 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $bio_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $bio_nresult = mysqli_query($conn, $bio_sql);
    $bio_ncount = mysqli_num_rows($bio_nresult);
    ?>
 <li
 <?php if ($GLOBALS["pagename"] == "Biogas Mapper"): ?>
     class="active"
 <?php else: ?>
     
 <?php endif ?>
  >
      <a href="mapper" id="cl_bio">
          <?php notif_label_count($bio_ncount,"map")?>
         <span>Biogas Mapper</span>
     </a>
 </li>
    <?php
}

function side_monitorentry($conn,$login_level){
     if ($login_level == 2) {
      $bio_sql = "SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 6 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    else{
      $bio_sql="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
      LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
      WHERE ua.level_ID = 2  AND notif_Type = 2 AND notif_State is null
      ORDER BY `notf`.`notif_Date` DESC";
    }
    $bio_nresult = mysqli_query($conn, $bio_sql);
    $bio_ncount = mysqli_num_rows($bio_nresult);
    ?>
    <li
       <?php if ($GLOBALS["pagename"] == "Monitor Entry"): ?>
           class="active"
       <?php else: ?>
           
       <?php endif ?>
        >
            <a href="monitorentry" id="cl_bio">
                <?php notif_label_count($bio_ncount,"collections_bookmark")?>
               <span>Monitor Entry</span>
           </a>
       </li>
    <?php
}
function side_report($conn,$login_level){
    ?>
    <li
    <?php if ($GLOBALS["pagename"] == "Reports"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
     >
        <a href="javascript:void(0);" class="menu-toggle">
            <i class="material-icons">collections_bookmark</i>
            <span>Reports</span>
        </a>
        <ul class="ml-menu">
            <li>
                <a href="#" class=" waves-effect waves-block" data-toggle="modal" data-target="#report_project_modal">Project</a>

            </li>
            <li>
                <a href="../assets/fpdf181/index.php?report=Accountlist" class=" waves-effect waves-block" target="_BLANK">List of account</a>
            </li>
        </ul>
    </li>
    <?php
}
?>

<!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $user_img?>" width="48" height="48" alt="User" id="r_img"/>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username?></div>
                    <div class="email"><?php echo $user_email?></div>
                    
                </div>
            </div>

            <!-- Menu -->
            <div class="menu">
                 
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <?php
                    side_dashboard();
                    //researcher
                    if ($login_level == 1) {
                       
                        side_researcher($conn,$login_level,$login_id);
                       
                    } 
                    //admin
                    else if ($login_level == 2){
                        side_account($conn,$login_level);
                        side_news($conn,$login_level);
                        side_suggestion($conn,$login_level);
                        side_researcher($conn,$login_level,$login_id);
                        side_projectmonitoring($conn,$login_level);
                        side_biogas($conn,$login_level);
                        side_monitorentry($conn,$login_level);
                        // side_report();
                    }
                    else {
                        # code...
                    }
                    
                    ?>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    <a href="javascript:void(0);">Management Info - System <br>CvSU AREC</a>  &copy; <?php auto_copyright("2019"); ?> 
                </div>
                <!-- <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->