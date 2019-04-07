 <?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Profile";
    $username = $_SESSION['user_Name'];
    $script_for_specific_page = "index";
    $user_img = "../assets/images/user.png";
    $user_email = $_SESSION['user_Email'];
    if(isset($_SESSION['login_level']) )
    {      
        $login_level = $_SESSION['login_level'];
        // if ($login_level != 2) {
         
        //   header('location: error404.php');
        // }
         
    }

   
?>

<!DOCTYPE html>
<html>
 <?php
    include("dash-head.php");
    ?>
<body class="theme-green">
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
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="../assets/images/user.png" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?php echo $username?></h3>
                                <!-- <p>Administrator</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"  class="active"><a href="#profile" aria-controls="settings" role="tab" data-toggle="tab">Profile</a></li>
                                    
                                </ul>

                                <div class="tab-content ">
                                    <div role="tabpanel" class="tab-pane fade in active" id="profile">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $user_email?>" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a  class="btn btn-primary" data-toggle="modal" data-target="#change_email">Change</a>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="Email" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-8">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" id="Email" name="Email" placeholder="Email" value="****" disabled="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#change_password">Change</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="change_email">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Change Account Password</h4>
          </div>
          
          <form class="form-horizontal" action="action.php" method="POST" id="research_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="OldEmail">Email</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="OldEmail" name="OldEmail" placeholder="Old Email">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
          <input type="hidden" name="operation" id="operation" value="change_email" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->
<!-- add modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="change_password">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> Change Account Password</h4>
          </div>
          
          <form class="form-horizontal" action="action.php" method="POST" id="research_form" enctype="multipart/form-data">

          <div class="modal-body">
              <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="OldPassword">Old password</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="OldPassword" name="OldPassword" placeholder="Old Password">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
               <div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="NewPassword">New Password</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password">
                          </div>
                      </div>
                  </div>
              </div>
              <br><div class="row clearfix">
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                      <label for="NewPasswordConfirm">New Password (Confirm)</label>
                  </div>
                  <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                      <div class="form-group">
                          <div class="form-line">
                              <input type="text" class="form-control" id="NewPasswordConfirm" name="NewPasswordConfirm" placeholder="New Password (Confirm)">
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              
          </div>
          <div class="modal-footer">
          <input type="hidden" name="operation" id="operation" value="change_password" />
          <input type="submit" name="action" id="action" class="btn btn-success" value="Submit" />
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form> 
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /add modal -->

    <?php 
        include("dash-js.php");
    ?>
</body>

</html>
