<?php 
function side_dashboard(){
    ?>
    <li
    <?php if ($GLOBALS["pagename"] == "Dashboard"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    
    >
        <a href="index">
            <i class="material-icons">home</i>
            <span>Dashboard</span>
        </a>
    </li>
    <?php
}
function side_account(){
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "Account Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <a href="account">
            <i class="material-icons">account_box</i>
            <span>Account</span>
        </a>
    </li>
    <?php
}
function side_news(){
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "News Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <a href="news">
            <i class="material-icons">speaker_notes</i>
            <span>News</span>
        </a>
    </li>
    <?php
}
function side_suggestion(){
    ?>
     <li
    <?php if ($GLOBALS["pagename"] == "Suggestion Management"): ?>
        class="active"
    <?php else: ?>
        
    <?php endif ?>
    >
        <a href="suggestion">
            <i class="material-icons">info</i>
            <span>Suggestion</span>
        </a>
    </li>
    <?php
}
function side_researcher(){
    ?>
  <li
  <?php if ($GLOBALS["pagename"]  == "Research"): ?>
      class="active"
  <?php else: ?>
      
  <?php endif ?>
  >
      <a href="research">
          <i class="material-icons">search</i>
          <span>Research</span>
      </a>
  </li>
    <?php
}
function side_projectmonitoring(){
    ?>
  <li
  <?php if ($GLOBALS["pagename"]  == "Project Monitoring"): ?>
      class="active"
  <?php else: ?>
      
  <?php endif ?>
  >
      <a href="projectmonitoring">
          <i class="material-icons">personal_video</i>
          <span>Project Monitoring</span>
      </a>
  </li>
    <?php
}

function side_biogas(){
    ?>
 <li
 <?php if ($GLOBALS["pagename"] == "Biogas Mapper"): ?>
     class="active"
 <?php else: ?>
     
 <?php endif ?>
  >
      <a href="mapper">
         <i class="material-icons">map</i>
         <span>Biogas Mapper</span>
     </a>
 </li>
    <?php
}
function side_report(){
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
                <a href="#" class=" waves-effect waves-block" data-toggle="modal" data-target="#myModal">Project</a>

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
                        
                        side_researcher();
                       
                    } 
                    //admin
                    else if ($login_level == 2){
                        side_account();
                        side_news();
                        side_suggestion();
                        side_researcher();
                        side_projectmonitoring();
                        side_biogas();
                        side_report();
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
                     &copy; <?php auto_copyright("2019"); ?> <a href="javascript:void(0);">CvSU AREC</a>
                </div>
                <!-- <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->