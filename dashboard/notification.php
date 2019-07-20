<?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Notification";
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
                <h2>
                </h2>
            </div>

            <ol class="breadcrumb breadcrumb-bg-green">
                <li><a href="index"><i class="material-icons">home</i> Home</a></li>
                <li  class="active"><a href="javascript:void(0);"><i class="material-icons ">account_box</i> Notification</a></li>
            </ol>
            <div class="row clearfix">
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="card">
                               <div class="header">
                                   <h2>NOTIFICATION</h2>
                                    
                               </div>
                               <div class="body">
                                   <div class="table-responsive" style="overflow-x: hidden;">
                                          <table id="account_data" class="table table-bordered table-striped">
                                            <thead>
                                              <tr>
                                                <th  colspan="12" >Notification</th>
                                              </tr>
<style type="text/css">
  #nl:hover{
      background-color: grey;

  }
  #nl a:hover{
      color: white;
     
  }
</style>
                <?php
  function notif_tr($label,$time){
    
      ?>
      <tr>
        <td id="nl">
          <a href="javascript:void(0);">
              <div class="menu-info">
                  <h4><?php echo $label?></h4>
                  <p>
                      <i class="material-icons">access_time</i> <?php echo get_timeago(strtotime($time));?>
                  </p>
              </div>
          </a>
        </td>
      </tr>
      <?php
    }
          if ($login_level == 2) {
            $sql ="SELECT notf.*,ua.level_ID FROM `notification`  `notf`
LEFT JOIN user_accounts `ua` ON `ua`.user_ID = `notf`.user_ID
WHERE ua.level_ID = 2 
ORDER BY `notf`.`notif_Date` DESC";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)) {

                $notif_Msg = $row['notif_Msg'];
                $notif_Date = $row['notif_Date'];
                notif_tr($notif_Msg,$notif_Date);
              }
            ?>
            
            <?php
          }
          else{
            $sql ="SELECT * FROM `notification` WHERE user_ID = $login_id AND notif_Type = 2 ORDER BY `notification`.`notif_Date` DESC";
                      $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_assoc($result)) {

                          $notif_Msg = $row['notif_Msg'];
                          $notif_Date = $row['notif_Date'];
                          notif_tr($notif_Msg,$notif_Date);
                      }
                      ?>
                      
                      <?php
          }
                  ?>
                                            </thead>
                                          </table>
                                       
                                   </div>
                               </div>
                           </div>
                    </div>
            </div>   
          <!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <iframe src="map/user-map.php" style=" display:block; width:100%; height: 800px;"></iframe>
                    </div>
                </div> -->
          
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
    <script type="text/javascript" language="javascript" >

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
