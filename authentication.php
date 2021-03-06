﻿<?php
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
                        
                        <h3>Management Information System</h3>
                        <h5>CvSU</h5>
                        <img src="assets/images/cvsu_arec.png" alt="CvSU Logo" style="width: 100px;"><br><br>
                        
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
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="r_fname" placeholder="First Name" id="r_fname" required autofocus>
                            </div>
                            <span class="input-group-addon">
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="r_lname" placeholder="Lastname" id="r_lname" required autofocus>
                            </div>
                        </div>
                         <div class="input-group">
                            <span class="input-group-addon">
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="r_address" placeholder="Address" id="r_address" required autofocus>
                            </div>
                        </div>
                          <div class="input-group">
                            <span class="input-group-addon">
                            </span>
                            <div class="form-line">
                                <input type="text" class="form-control" name="r_contact" placeholder="Contact" id="r_contact"  required autofocus onkeyup="allowedChar(this);" maxlength="11">
                            </div>
                        </div>
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
                                <input type="password" class="form-control" name="r_password" id="r_password" placeholder="Password" minlength="6" required>
                            </div>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                <input type="password" class="form-control" name="r_cpassword" id="r_cpassword" placeholder="Confirm Password"  min="6"  required>
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
    <script type="text/javascript">
        function allowedChar(elem) {
                var validChars = /[0-9]/;
                var strIn = elem.value;
                var strOut = '';
                for(var i=0; i < strIn.length; i++) {
                  strOut += (validChars.test(strIn.charAt(i)))? strIn.charAt(i) : '';
                }
                elem.value = strOut;
            }
    </script>
</body>

</html>