 <?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Dashboard";
    $username = $_SESSION['login_user'];
    $user_img = "../assets/images/user.png";
    $user_email = "mail@gmail.com";
    $script_for_specific_page = "index";
    if(isset($_SESSION['login_level']) )
    {      
     $login_level = $_SESSION['login_level'];
       
         
    }


    if (empty($_REQUEST['page'])) {
        $page = "";
    }
    else{
        $page = $_REQUEST['page'];
    }
?>
<!DOCTYPE html>
<html>
 <?php
    include("dash-head.php");
    ?>
<body class="theme-green ">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    
    <?php 
        include('dash-topnav.php');
    ?>
    <section>
        <?php 
        include("dash-sidenav-left.php");
        ?>

    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="javascript:void(0);"><i class="material-icons">home</i> Home</a></li>
            </ol>

            <?php
            $sql = "SELECT * FROM `user_accounts` WHERE level_ID = 1";
            $result = mysqli_query($conn, $sql);
            $researcher_count = mysqli_num_rows($result) ;
            $sql = "SELECT * FROM `user_accounts` WHERE level_ID = 2";
            $result = mysqli_query($conn, $sql);
            $admin_count = mysqli_num_rows($result) ;
            $sql = "SELECT * FROM `locations` WHERE location_status = 1";
            $result = mysqli_query($conn, $sql);
            $biogas_count = mysqli_num_rows($result) ;
             ?>
           
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 

                <div class="col-sm-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">RESEARCHER</div>
                      <div class="panel-body">
                        <h3><?php echo $researcher_count?></h3>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     
                    <div class="panel panel-default">
                      <div class="panel-heading">ADMIN</div>
                      <div class="panel-body">
                        <h3><?php echo $admin_count?></h3>
                      </div>
                    </div>
                </div>
                <div class="col-sm-4">
                     
                    <div class="panel panel-default">
                      <div class="panel-heading">BIOGAS</div>
                      <div class="panel-body">
                        <h3><?php echo $biogas_count?></h3>
                      </div>
                    </div>
                </div>
               </div>
                     <div class="row">
                <div class="col-sm-12 text-center " style="min-height: 100px;">
                     <img src="../assets/images/logo.png" height="80" style="margin-left: -450px;"> <H3 style="margin-top: -50px;">CAVITE STATE UNIVERSITY</H3>
                </div>
            </div>
                <div class="col-sm-6">
                     <div class="panel bg-green"  style="min-height: 250px">
                         <div class="panel-heading  text-center" style=" border-bottom: 5px solid ;"><strong>UNIVERSITY MISSION</strong></div>
                         <div class="panel-body text-center">
                           CAVITE STATE UNIVERSITY shall provide
                            <br>excellent equitable and relevant educational
                             <br>opportunities in the arts, sciences
                              <br>and technology through quality instruction
                               <br>and responsive research 
                               <br>and development activitis. 
<br>It shall produce professional,skilled 
<br>and morally upright individuals for 
<br>global competitiveness
                         </div>
                     </div>
                 </div>
                 <div class="col-sm-6">
                     <div class="panel bg-green"  style="min-height: 250px">
                         <div class="panel-heading text-center" style="border-bottom: 5px solid ;"><strong>UNIVERSITY VISION</strong></div>
                         <div class="panel-body text-center">
                           The Premier University in historic Cavite recognized
                           <br>for excellence in the development of globally 
                           <br>competitive and morally upright individuals.
                         </div>
                     </div>
                 </div>
         
           </div>
        </div>
    </section>
    <!-- Modal -->
<div id="report_project_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Project Report</h4>
      </div>
      <div class="modal-body">
        <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="loc_stat">Status</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                             <select class="form-control"  id="fil_status">
                             <option value="null">~~SELECT~~</option>
                             <?php 
                             $query = "SELECT * FROM `status` ";
                            $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_array($result))
                             {
                              echo '<option value="'.$row["status_ID"].'">'.$row["status_Name"].'</option>';
                             }
                             ?>
                           </select>
                    </div>
                </div>
            </div>
        </div> 

           <div class="row clearfix">
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                <label for="loc_stat">Location</label>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                <div class="form-group">
                    <div class="form-line">
                             <select class="form-control" id="fil_location">
                             <option value="null">~~SELECT~~</option>
                             <?php 
                             $query = "SELECT DISTINCT(proj_Location) FROM `project_monitoring`";
                            $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_array($result))
                             {
                              echo '<option value="'.$row["proj_Location"].'">'.$row["proj_Location"].'</option>';
                             }
                             ?>
                           </select>
                    </div>
                </div>
            </div>
        </div> 
        <div class="text-center">
            <button type="button" class="btn btn-primary" onclick="print_project();">PRINT</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <?php 
        include("dash-js.php");
    ?>
    
   
    <script type="text/javascript">
    
$(document).on('change', '#fil_location', function(){
  var fil_location = $(this).val();

 });
$(document).on('change', '#fil_status', function(){
  var fil_status = $(this).val();

 });
function print_project(){
     var fil_location = $('#fil_location').val();
      var fil_status = $('#fil_status').val();
     window.open('../assets/fpdf181/index.php?report=project&location='+fil_location+'&status='+fil_status);
}
</script>

</body>

</html>
