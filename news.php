<?php 
session_start();
include('dbconfig.php');
if(isset($_SESSION['login_user']))
{      
    $authentication_nav = '<a href="dashboard" class="nav-link">Dashboard</a>';
}
else{
   $authentication_nav = '<a href="authentication" class="nav-link">Login</a>';
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CvSU AREC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="icon" href="assets/images/logo.ico" type="image/x-icon">

    <!-- 
    //////////////////////////////////////////////////////

    FREE TEMPLATE 
    DESIGNED & DEVELOPED by free-template.co
      
    Website:    https://free-template.co
    Facebook:   https://www.facebook.com/FreeDashTemplate.co
    Twitter:    https://twitter.com/Free_Templateco

    //////////////////////////////////////////////////////
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="front/fonts/icomoon/style.css">

    <link rel="stylesheet" href="front/css/bootstrap.min.css">
    <link rel="stylesheet" href="front/css/magnific-popup.css">
    <link rel="stylesheet" href="front/css/jquery-ui.css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="front/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="front/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="front/fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="front/css/aos.css">

    <link rel="stylesheet" href="front/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  
  <!-- <div class="site-wrap"> -->

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4 site-logo">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">CvSU AREC</a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#section-about" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#section-instroduction" class="nav-link">Introduction</a></li>
                    <li><a href="index.php" class="nav-link">How It Works</a></li>
                    <li><a href="index.php" class="nav-link">Our Team</a></li>
                  </ul>
                </li>
                <li><a href="index.php" class="nav-link">Services</a></li>
                <li><a href="index.php" class="nav-link">Images</a></li>
                <li><a href="index.php" class="nav-link">News</a></li>
                <li><a href="biogas.php" class="nav-link">Biogas</a></li>
                <li><a href="index.php" class="nav-link">Contact</a></li>
                <li><?php echo $authentication_nav?></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

    <div class="site-blocks-cover overlay" style="background-image: url(front/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">CvSU-AREC IV</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">CAVITE STATE UNIVERSITY-AFFILIATED RENEWABLE ENERGY CENTER FOR REGION IV</p>
            <p data-aos="fade-up" data-aos-delay="200"><a href="#section-instroduction" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

          </div>
        </div>
      </div>
    </div> 
     <div class="site-section" id="section-instroduction">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
       <?php 
       if (isset($_REQUEST["news_ID"])) {
        $r_news_ID = $_REQUEST["news_ID"];
        $sql = "SELECT * FROM `news` WHERE  news_ID = $r_news_ID
                ORDER BY `news`.`news_Pub` DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $news_ID = $row["news_ID"];
              $news_Title = $row["news_Title"];
              $news_Content = $row["news_Content"];
           
              $news_Pub = $row["news_Pub"];
              $news_Pub = strtotime($news_Pub);
              $news_Pub = date("Y-m-d h:i:sa",$news_Pub);
                ?>
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary"><?php echo $news_Title?></h2>
            </div>
                <div class="" data-aos="fade-up">
              <div class="h-entry">
                <div class="meta mb-4">&bullet; <?php echo $news_Pub?> <span class="mx-2">&bullet;</span></div>
                <p><?php echo $news_Content?></p>
              </div> 
      
            </div>
                <?php
            }
        } else {
            
        }
       }
       else{


                ?>
              <div class="table-responsive" style="overflow-x: hidden;">
              <table id="news_data" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th  >News Title</th>
                    <th width="20%" >Date</th>
                    <th width="10%" >News Title</th>
                  </tr>
                </thead>
            
              </table>               
              </div>
                <?php
       }

   
      ?>
          </div>
          
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure deserunt ut architecto dolores quo beatae laborum aliquam ipsam rem impedit obcaecati ea consequatur.</p>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <small class="block">&copy; <script>document.write(new Date().getFullYear());</script> CvSU AREC. All Rights Reserved. <br></small> 
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  <!-- </div> -->

  <script src="front/js/jquery-3.3.1.min.js"></script>
  <script src="front/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="front/js/jquery-ui.js"></script>
  <script src="front/js/jquery.easing.1.3.js"></script>
  <script src="front/js/popper.min.js"></script>
  <script src="front/js/bootstrap.min.js"></script>
  <script src="front/js/owl.carousel.min.js"></script>
  <script src="front/js/jquery.stellar.min.js"></script>
  <script src="front/js/jquery.countdown.min.js"></script>
  <script src="front/js/jquery.magnific-popup.min.js"></script>
  <script src="front/js/bootstrap-datepicker.min.js"></script>
  <script src="front/js/aos.js"></script>

  <script src="front/js/main.js"></script>
   <!-- Jquery DataTable Plugin Js -->
    <script src="assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
<!--     <script src="assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script> -->
<!--     <script src="assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script> -->

    <!-- Custom Js -->
    <!-- <script src="assets/js/pages/tables/jquery-datatable.js"></script> -->
 
   <script type="text/javascript">
      
$(document).ready(function() {


        var dataTable = $('#news_data').DataTable({
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":{
            url:"dashboard/datatable/news/fetch.php",
            type:"POST"
        },
        "columnDefs":[
            {
                "targets":[0],
                "orderable":false,
            },
        ],

    });
} );
    </script>
  </body>
</html>