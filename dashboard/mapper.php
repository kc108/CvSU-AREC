 <?php 
    include('../session.php');
    include('dash-global-function.php');

   
    $pagename = "Biogas Mapper";
    $username = $_SESSION['user_Name'];
    $script_for_specific_page = "jquery";
    $user_img = "../assets/images/user.png";
    $user_email = "mail@gmail.com";
    if(isset($_SESSION['login_level']) )
    {      
        $login_level = $_SESSION['login_level'];
        if ($login_level != 3) {
         
          header('location: error404.php');
        }
         
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
<body class="theme-green ls-closed">
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
                    Biogas Data Mapper
                    
                </h2>
            </div>
            
             <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="card">
                        <h2>List of Biogas</h2>
                        <table  class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Visible</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $sql =  mysqli_query($conn,"SELECT * FROM `locations`");
                                   while ($row = mysqli_fetch_array($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['title']?></td>
                                        <td><?php 
                                        if ($row['location_status'] == 0) {
                                            echo "Hidden";
                                        }
                                        else{
                                            echo "Visible";
                                        }
                                         ?></td>
                                        <td>
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary">Action</button>
                                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Hide</a></li>
                                                <?php 
                                                if ($row['location_status'] == 0) {
                                                    echo '<li><a href="#">Hide</a></li>';
                                                }
                                                else{
                                                    echo '<li><a href="#">Show</a></li>';
                                                }
                                                ?>
                                                <li><a href="#">Update</a></li>
                                                <li><a href="#">Delete</a></li>
                                              </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                   }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <div class="card">
                        <iframe src="map/user-map.php" style=" display:block; width:100%; height: 800px;"></iframe>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            
        </div>
    </section>

    <?php 
        include("dash-js.php");
    ?>

</body>

</html>
