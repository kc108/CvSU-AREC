<?php
/**
 * @package    DEVELOPMENT OF MANAGEMENT INFORMATION SYSTEM FOR CAVITE STATE UNIVERSITY-AFFILIATED RENEWABLE ENERGY CENTER FOR REGION IV (CvSU-AREC IV)
 *
 * @copyright  Copyright (C) 2019, All rights reserved.
 * @license    MIT License version or later; see licensing/LICENSE.txt
 */
session_start();
if(isset($_SESSION['login_user']))
{      
     header('location: dashboard');
}
?>
<!DOCTYPE html>
<html>
<?php 
include("inc/main-head.php");
?>

<body class="login-page">
    <div class="login-box" style="background-color: #408c40;">
        <div class="text-center logo" >
            <div style="height: 5px;"></div>
            <h3 style="margin-top: 25px; color: white;">Login</h3>
        </div>
        <div class="card">
            <div class="body">
                <div id="sign_in" >
                    <div class="text-center msg">
                        
                        <img src="assets/images/cvsu_arec.png" alt="CvSU Logo" style="width: 100px;">
                        <h5>Cavite State Univeristy AREC</h5>
                        <h3>Management Information System</h3>
                        <small>Login here using your username and password</small>
                    </div>
                    <div class="tab-content">
                     <div id="researcher" class="tab-pane fade in active">
                        <form action="data-login.php" method="POST"  role="form">
                            
                        
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                 <a class="btn btn-block bg-red waves-effect" data-toggle="tab" href="#register">REGISTER</a>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-block bg-blue waves-effect" type="submit" name="submit_login">SIGN IN</button>
                            </div>
                        </div>
                        </form>
                      </div>
                      <div id="register" class="tab-pane">
                        <form action="data-login.php" method="POST"  role="form">
                            
                        
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="r_username" placeholder="Username" id="r_username" required autofocus>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="r_password" id="r_password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="r_cpassword" id="r_cpassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            <div class="form-line">
                                <input type="email" class="form-control" name="r_email" placeholder="Email" id="r_email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                 <a class="btn btn-block bg-red waves-effect" data-toggle="tab" href="#researcher">SIGN IN</a>
                            </div>

                            <div class="col-xs-6">
                                <button class="btn btn-block bg-blue waves-effect" type="submit" name="submit_register">REGISTER</button>
                            </div>
                        </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("inc/main-js.php");
    ?>
</body>

</html>