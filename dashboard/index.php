<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Dashboard";
    $username = $_SESSION['user_Name'];
    $script_for_specific_page = "";
    $user_img = "../assets/images/user.png";
    $user_email = "mail@gmail.com";
    if(isset($_SESSION['login_level']) )
    {      
        $login_level = $_SESSION['login_level'];
        //if the user is not admin go to 404
        if ($login_level != 2) {
         
          // header('location: error404.php');
        }
         
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



 

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
    <script type="text/javascript">
      $(document).on('click', '#notif_seen', function(){
   
       
        $.ajax({
          url:"notif_seen.php",
          method:"POST",
          success:function(data)
          {
            $('#label_count').html('0');
          }
        });
    
  
  });
    </script>

</body>

</html>
