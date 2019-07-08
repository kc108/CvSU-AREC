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
          
          <div class="col-11 col-xl-3 site-logo">
            <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">CvSU AREC</a></h1>
          </div>
          <div class="col-12 col-md-9 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="#section-home" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#section-about" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#section-instroduction" class="nav-link">Introduction</a></li>
                    <li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
                    <li><a href="#section-our-team" class="nav-link">Our Team</a></li>
                  </ul>
                </li>
                <li><a href="#section-industries" class="nav-link">Images</a></li>
                <li><a href="#section-blog" class="nav-link">News</a></li>
                <li><a href="biogas.php" class="nav-link">Biogas</a></li>
                <li><a href="projects.php" class="nav-link">Projects</a></li>
                <li><a href="#section-contact" class="nav-link">Contact</a></li>
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
            <p data-aos="fade-up" data-aos-delay="200"><a href="#section-about" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/image-gallery/pic5.jpg" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-4">
              <h2 class="text-primary">About Us</h2>
            </div>
            <p style="text-align: justify;">AREC formerly known as Affiliated Nonconventional Energy Center (ANEC) is a center which serves as the extension arm of the Department of Energy – Renewable Energy Management Division (DOE-REMD) to the rural areas to promote the use of new and renewable energy resources and technologies.
            As part of DOE’s extension services and effective   information dissemination program, its former Nonconventional Energy Division (NCED) had established ANECs in strategically located colleges and universities in various regions in the country. For Southern Tagalog, ANEC was established at Cavite State University (Formerly Don Severino Agricultural College), Indang, Cavites, Philippines in 1988.
            </p>
          </div>
          
        </div>
      </div>
    </div>
     <div class="site-section" id="section-instroduction">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary">Introduction</h2>
            </div>
            <p  style="text-align: justify;">The Philippines has 13.46 million pigs and 135.64 million chickens (BAS, 2007). Of the 13 million pigs, 9 million are found in the small hold raisers because livestock raising is secondary to crop production in terms of agriculture livelihood. The average number of pigs raised in the small hold sector is about 8 heads where households in the villages augment family income from the sale of pigs. With this number of heads, the total manure production reached to more than 30 thousand tons per day. The volume is quite tremendous and if not properly managed will become the major pollutant of air and water.
    Management of animal wastes is a big problem in the animal producing areas since very few raisers have biogas digesters. Wastes are allowed to flow freely to open fields, thus emitting foul odors and contaminating surface and underground water.</p>
<p>
  Agriculture (livestock and crop production) contributed 32% of the total greenhouse gases emissions (1994 Philippine GHG Inventory). These greenhouse gases consist of carbon dioxide (CO2), methane (CH4), nitrous oxide (N2O) and other gases which came mainly from livestock wastes.
</p>

<h2>Why Biogas Technology?</h2>
<ul>
<li>There is a need for low cost waste treatment facility due to the growing animal industry. </li>
<li>Waste treatment plus energy generation technology </li>
<li>Waste utilization </li>
<li>Environment-friendly alternative </li>
  
</ul>

<p>Biogas technology provides solution to pollution problem being a “waste-treatment facility” and at the same time an “energy-generating device”.

</p>
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
            <p class="mb-0"><a href="learn.php" class="btn btn-primary py-3 px-5 text-white">Learn More</a></p>
          </div>
        </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section bg-image overlay" style="background-image: url('assets/images/image-gallery/pic2.jpg');" id="section-how-it-works">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="how-it-work-item">
              <span class="number">1</span>
              <div class="how-it-work-body">
                <h2>BIOGAS TECHNOLOGY</h2>
                <p class="mb-5"  style="text-align: justify;">This utilizes anaerobic fermentation of organic matter to produce methane gas that can be used as a fuel for cooking, lighting and other applications. This also produces organic fertilizer and feeds. The system also serves as an anti-pollution device.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="how-it-work-item">
              <span class="number">2</span>
              <div class="how-it-work-body">
                <h2>SOLAR ENERGY TECHNOLOGY</h2>
                <p class="mb-5"  style="text-align: justify;">The radiation coming from the sun is an enormous energy resource which can be utilized into two ways: solar heating and electricity generation.
                SOLAR HOME SYSTEM-PV STREETLIGHT
                This utilizes and converts solar radiation into DC electricity with the use of solar cells. The electricity generated is used for lighting and to power other home appliances.
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="how-it-work-item">
              <span class="number">3</span>
              <div class="how-it-work-body">
                <h2>HYDRO POWER TECHNOLOGY</h2>
                <p class="mb-5"  style="text-align: justify;">Flowing water creates energy that can be captured and turned into electricity. This is called hydropower. The most common type of hydropower plant uses a dam on a river to store water in a reservoir. Water released from the reservoir flows through a turbine, spinning it, which in turn, activates a generator to produce electricity.
                Hydropower utilization makes use of potential and kinetic energy which may either be used immediately for motive power or be transformed into electricity for distribution to distant end-user.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section border-bottom" id="section-our-team">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade">Dev Team</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person">
              <img src="front/images/person_1.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
              <h3>Arvin Francis Dillo</h3>
              <!-- <p class="position text-muted">Co-Founder, President</p> -->
              <p class="mb-4" style="text-align: justify;">Arvin Francis Dillo was born on October 04, 1998 in Brgy. Anuling Mendez, Cavite. He is the third son of Mrs. Josephine G. Dillo and Mr. Vicente S. Dillo. He presently resides in Brgy. Anuling Mendez, Cavite.
				He obtained his primary education at Anuling Elementary School in march 2011. He finished his secondary education at Tagaytay City National High School in the year 2015.
				In the same year, he enrolled at Cavite State University – Don Severino de las Alas Campus (Main-Campus) with the degree of Bachelor of Science in Information Technology.
				</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person">
              <img src="front/images/person_2.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
              <h3>Lalaine Quijano</h3>
              <!-- <p class="position text-muted">Co-Founder, COO</p> -->
              <p class="mb-4" style="text-align: justify;">Lalaine P. Quijano was born on July 30, 1999 in Sta.Elena, Camarines Norte. She is the bread winner of her family, daughter of Mr. Ricardo V. Quijano and Lerma P. Quijano. She presently resides in Brgy. Inocencio, Trece Martirez City,Cavite.
				She obtained her primary education at Southville Elementary School in March 2011. She finished her secondary education at Luis Aguado National High School in the year 2015.
				In the same year, she enrolled at Cavite State University – Don Severino de las Alas Campus (Main-Campus) with the degree of Bachelor of Science in Information Technology.
				</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person">
              <img src="front/images/person_4.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
              <h3>Kendramae Sahaji Consigo</h3>
              <!-- <p class="position text-muted">Marketing</p> -->
              <p class="mb-4" style="text-align: justify;">Kendra Mae S. Consigo was born on July 5,1998 in Brgy. Cogunan, Nasugbu, Batangas. She , daughter of Mr. Ariel C. Consigo and Anna S. Consigo. She presently resides in Brgy. Cogunan, Nasugbu, Batangas 
				She obtained her primary education at Cogonan Elementary School in March 2011. She finished her secondary education at Bilaran  National High School in the year 2015.
				In the same year, he enrolled at Cavite State University – Don Severino de las Alas Campus (Main-Campus) with the degree of Bachelor of Science in Information Technology.
				</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
  .grow {transition: all .2s ease-in-out;}
.grow:hover {transform: scale(1.1);}
 .owl-stage-outer {padding: 10px;}
    </style>

    <div class="site-section block-13" id="section-industries">

      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="mb-0 text-primary">Images</h2>
            <p class="color-black-opacity-5">CvSU AREC Projects </p>
          </div>
        </div>
      </div>

      <div id="owl-demo_images" class="owl-carousel nonloop-block-13 ">
        <div class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic1.jpg" alt="Image" class="img-fluid " >
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 1</h3>
            </div>
          </a>
        </div>

        <div   class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic2.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 2</h3>
            </div>
          </a>
        </div>

        <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic3.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 3</h3>
            </div>
          </a>
        </div>

        <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic4.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 4</h3>
            </div>
          </a>
        </div>

        <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic5.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 5</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic6.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 6</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic7.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 7</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic8.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 8</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic11.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 9</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic15.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 10</h3>
            </div>
          </a>
        </div>
         <div  class="grow">
          <a href="#" class="unit-1 text-center">
            <img src="assets/images/image-gallery/pic16.jpg" alt="Image" class="img-fluid">
            <div class="unit-1-text">
              <h3 class="unit-1-heading">Picture 11</h3>
            </div>
          </a>
        </div>


      </div>
    </div>

    <div class="site-section" id="section-blog">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">News</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row mb-5 align-items-stretch">
          
      <?php 
      $sql = "SELECT * FROM `news`  
ORDER BY `news`.`news_Pub` DESC LIMIT 3";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            $news_ID = $row["news_ID"];
            $news_Title = $row["news_Title"];
            $news_Content = $row["news_Content"];
            $news_Content = substr($news_Content,0,250);
            $news_Pub = $row["news_Pub"];
            $news_Pub = strtotime($news_Pub);
            $news_Pub = date("Y-m-d h:i:sa",$news_Pub);
            
              ?>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="h-entry">
              <h2 class="font-size-regular"><a href="#"><?php echo $news_Title?></a></h2>
              <div class="meta mb-4">&bullet; <?php echo $news_Pub?> <span class="mx-2">&bullet;</span></div>
              <p><?php echo $news_Content?></p>
            </div> 
            <!-- <p class="mb-0"><a href="news?news_ID=<?php echo $news_ID?>" class="btn btn-primary btn-sm text-white">Read Me</a></p> -->
          </div>
              <?php
          }
      } else {
          
      }
      ?>
        </div>
        <div class="row">
          <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
            <p class="mb-0"><a href="news" class="btn btn-primary py-3 px-5 text-white">View All News</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Contact Us</h2>
            <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="action-suggestion_box.php" class="p-5 bg-white" method="POST">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control" name="fname">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname" >Last Name</label>
                  <input type="text" id="lname" class="form-control" name="lname">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control" name="email">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control" name="subject">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="submit" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4"> Cavite State University | Indang, Cavite, Philippines</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+63 955-307-5888</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">cvsu@edu.ph</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>The Department of Energy (DOE) settled an effective information dissemination program to establish Affiliated Nonconventional Energy Centre’s (ANEC) that is strategically located every colleges and universities to promote the widespread use of renewable energy (RE).</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">HOMEPAGE</a></p>
            </div>

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
                <p>AREC formerly known as Affiliated Nonconventional Energy Center (ANEC) is a center which serves as the extension arm of the Department of Energy – Renewable Energy Management Division (DOE-REMD) to the rural areas to promote the use of new and renewable energy resources and technologies.</p>
              </div>
              
            <!--   <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div> -->
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
        <!--   <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div> -->
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
    <script type="text/javascript">
      $(document).ready(function() {
        $('#owl-demo_images').owlCarousel({
            items : 4,
            autoPlay: 3000, //Set AutoPlay to 3 seconds
          navigation : false, // Show next and prev buttons
          stopOnHover : true,
          pagination : false,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]
        });
     
  }); 

    </script>
  </body>
</html>