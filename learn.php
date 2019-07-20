<?php 
session_start();

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
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">CvSU AREC</a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#section-about" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#section-introduction" class="nav-link">Introduction</a></li>
                    <li><a href="index.php" class="nav-link">How It Works</a></li>
                    <li><a href="index.php" class="nav-link">Our Team</a></li>
                  </ul>
                </li>
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
    <style type="text/css">
      #anothernav_li li a {
          color: #fff !important;
      }
      #anothernav_li li a:hover {
          color: #f16821 !important;
      }
         #anothernav_li1 li a {
          color: #343a40 !important;
          width: 400px;
      }
          #anothernav_li1 li a:hover {
          color: #f16821 !important;
         
      }
  #myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #f16821; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
}

#myBtn:hover {
    background-color: #343a40; /* Add a dark-grey background on hover */
}
    </style>
      <div class="container anothernav" style="background-color: #607d8b; border-radius: 5px 5px 0px 0px; ">
        <div class="row align-items-center">
       
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-center" role="navigation" id="anothernav_li">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="#section-introduction" class="nav-link">INTRODUCTION</a></li>
                <li class="has-children">
                  <a href="#section-ch1_1" class="nav-link" >Chapter 1</a>
                  <ul class="dropdown" id="anothernav_li1">
                   
                    <li><a href="#section-ch1_1" class="nav-link">(HISTORICAL DEVELOPMENT OF BIOGAS TECHNOLOGY)</a></li>
                    <li><a href="#section-ch1_1" class="nav-link"> History of Biogas Technology in the Philippines</a></li>
                    <li><a href="#section-ch1_2" class="nav-link">CvSU-AREC: Revitalize Biogas Technology</a></li>
                    <li><a href="#section-ch1_3" class="nav-link">BAI Experience in the Promotion of Biogas Technology</a></li>
                    <li><a href="#section-ch1_4" class="nav-link">PhilBIO and Biogas Technology</a></li>
                    <li><a href="#section-ch1_5" class="nav-link">Status of Biogas Technology in the Philippines</a></li>
                  </ul>
                </li>
                 <li class="has-children">
                  <a href="#section-ch2_1" class="nav-link" >Chapter 2</a>
                  <ul class="dropdown"  id="anothernav_li1">
                    <li><a href="#section-ch2_1" class="nav-link">(BIOGAS TECHNOLOGICAL PROCESS)</a></li>
                    <li><a href="#section-ch2_1" class="nav-link">What is Biogas?</a></li>
                    <li><a href="#section-ch2_2" class="nav-link">Biogas Technological Process</a></li>
                    <li><a href="#section-ch2_3" class="nav-link">Stages of Biogas Fermentation</a></li>
                    <li><a href="#section-ch2_4" class="nav-link">Classification of Biogas Fermentation Process</a></li>
                    <li><a href="#section-ch2_5" class="nav-link">Factors that Influence Biogas Production</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#section-chv_1" class="nav-link" >CHAPTER V</a>
                  <ul class="dropdown" id="anothernav_li1">
                     <li><a href="#section-chv_1" class="nav-link">(DSAC-MODEL BIOGAS DIGESTER)</a></li>
                    <li><a href="#section-chv_2" class="nav-link">Components of DSAC-Model Biogas Disaster</a></li>
                    <li><a href="#section-chv_3" class="nav-link">Principles of Operation</a></li>
                    <li><a href="#section-chv_4" class="nav-link">Design Formulas</a></li>
                    <li><a href="#section-chv_5" class="nav-link">Sizing of Biogas Digester</a></li>
                    <li><a href="#section-chv_6" class="nav-link">Pre-Construction Consideration</a></li>
                    <li><a href="#section-chv_7" class="nav-link">Site Consideration</a></li>
                    <li><a href="#section-chv_8" class="nav-link">Construction Techniques (DSAC-Model Rectangular-Fix Dome Register)</a></li>
                     
                     


                  </ul>
                </li>
                <li class="has-children">
                  <a href="#section-chviii_1" class="nav-link" >Chapter VIII</a>
                  <ul class="dropdown"id="anothernav_li1">
                    <li><a href="#section-chviii_1" class="nav-link">(OPERATION AND MAINTENANCE OF BIOGAS DIGESTER)</a></li>
                    <li><a href="#section-chviii_1" class="nav-link">Initial Loading</a></li>
                    <li><a href="#section-chviii_2" class="nav-link">Regular Loading</a></li>
                    <li><a href="#section-chviii_3" class="nav-link">Stirring/Agitation of Slurry</a></li>
                    <li><a href="#section-chviii_4" class="nav-link">Condensate Removal</a></li>
                    <li><a href="#section-chviii_5" class="nav-link">Servicing Scum Problem</a></li>
                    <li><a href="#section-chviii_6" class="nav-link">Periodic Maintenance of the Digester</a></li>

                  </ul>
                </li>


                     
                    
                
             
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      
    </header>


  

    <div class="site-blocks-cover overlay" style="background-image: url(front/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

            <h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">CvSU-AREC IV</h1>
            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">CAVITE STATE UNIVERSITY-AFFILIATED RENEWABLE ENERGY CENTER FOR REGION IV</p>
            <p data-aos="fade-up" data-aos-delay="200"><a href="#section-introduction" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

          </div>
        </div>
      </div>
    </div> 
    <div class="site-section" id="section-introduction">
      <div class="container">
        <div class="row mb-5">
          
          
            <p>&nbsp;</p>
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary">introduction</h2>
            </div>
            <p>&nbsp;</p>

            <p style="text-align: justify; "><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The Philippines has 13.46 million pigs and 135.64 million chickens (BAS, 2007). Of the 13 million pigs, 9 million are found in the small hold raisers because livestock raising is secondary to crop production in terms of agriculture livelihood. The average number of pigs raised in the small hold sector is about 8 heads where households in the villages augment family income from the sale of pigs. With this number of heads, the total manure production reached to more than 30 thousand tons per day. The volume is quite tremendous and if not properly managed will become the major pollutant of air and water.</span></span></p>

            <p style="text-align: justify; "><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Management of animal wastes is a big problem in the animal producing areas since very few raisers have biogas digesters. Wastes are allowed to flow freely to open fields, thus emitting foul odors and contaminating surface and underground water.</span></span></p>

            <p>&nbsp;</p>

            <p style="text-align: justify; "><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agriculture (livestock and crop production) contributed 32% of the total greenhouse gases emissions (1994 Philippine GHG Inventory). These greenhouse gases consist of carbon dioxide (CO2), methane (CH4), nitrous oxide (N2O) and other gases which came mainly from livestock wastes.</span></span></p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <h3 class="text-primary">Why Biogas Technology?</h3>



            <ul>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">There is a need for low cost waste treatment facility due to the growing animal industry.</span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Waste treatment plus energy generation technology</span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Waste utilization</span></span></li>
              <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Environment-friendly alternative</span></span></li>
            </ul>

            <p>&nbsp;</p>

            <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Biogas technology provides solution to pollution problem being a &ldquo;waste-treatment facility&rdquo; and at the same time an &ldquo;energy-generating device&rdquo;.</span></span></p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

            <p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section" id="section-ch1_1">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h3 class="text-primary">Chapter 1</h3>
            </div>
          <div class="text-left pb-1 border-primary mb-12">
            <h2 class="text-primary">HISTORICAL DEVELOPMENT OF BIOGAS TECHNOLOGY</h2>
          </div>
          <h3 class="text-primary">History of Biogas Technology in the Philippines</h3>


          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Interest in biogas development grew with the encouraging reports from the official mission of the Philippine Coconut Administration after its return from a European tour in 1965. The main interest in biogas stemmed from its pollution prevention and public health aspects rather than from its fuel energy generation potential, as firewood was abundantly available then.</span></span></span></p>

          <p>&nbsp;</p>

          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">In the early 70s, Dr. Felix D. Maramba, an Agricultural Engineer by the profession of Araneta University Foundation, pioneered the development of Biogas Technology at Maya Farms, an integrated livestock farm, meat processing and canning operation in the Antipolo Hills of Rizal Province. Demonstration models of Indian, Chinese and European types were set up by the farm in order to obtain the necessary experience and to assess the suitability of different types of plants. The models were later modified and used as pilot plants. Biogas produced at the farm supplies 40% of the total power requirement of the farm and was used for domestic applications, cooking vats in the canning plant, fuel of burners for heating and gasoline engines running a feed mill, operating a 60-KVA electric generator and running farm vehicles.</span></span></span></p>

          <p style="text-align:justify">&nbsp;</p>

          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">The late President Ferdinand E. Marcos directed the Energy Development Board (now Department of Energy) in the later part of 1976 to embark in a crash program to use biogas as substitute fuel. He instructed the establishment of model biogas plants in stock farms in every province and towns where there are breeding stations. In the early 80&rsquo;s, as part of the &ldquo;carsh programme&rdquo;, the Bureau of Animal Industry and the EDB, launched a program on &ldquo;Biogas ng Barangay&rdquo; (Village Biogas Project). Loans were made available to livestock owners through financial institutions. Demonstration projects at the regional and provincial level were established; 340 units of concrete biogas plant, 321 units in Luzon, 18 in Visayas and 1 in Mindanao. Available fresh pig in manure per year was estimated at 8.9 million tons, indicating a biogas production potential of 502 million cubic meters per year. The Indian design with a floating gas holder was more popular. The model did not last long because of the maintenance problem. Due to lack of government support on the technology and the series of reorganization in the government, the continuity and prioritization of the project became less important. Other organizations engaged in extension of biogas technology were the National Housing Authority, the Engineering Battalion of the military, and the Department of Community Development. The Development Bank of the Philippines granted loans to farmers at low interest rates for the biogas projects.</span></span></span></p>

          <p>&nbsp;</p>

          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Philippine Rural Life Center (PRLC), a non-government organization promoted a culvert model biogas system in the early 80s. The PRLC trained people from the government as well as the private sectors in the field of animal production and biogas technology. Many units of the model were copied and installed in same selected villages but the continuity ceased because the PRLC project was also terminated in the late 80s.</span></span></span></p>

          <p>&nbsp;</p>

          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Also in the late 80&rsquo;s, the Affiliated Renewable Energy Centers (ARECs &ndash; formerly ANEC) were established at different state colleges and universities nationwide to serve as extension arm of the Department of Energy (DOE) in promoting renewable energy in the rural areas.</span></span></span></p>

          <p style="text-align:justify">&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">The Cavite State University (CvSU), formerly Don Severino Agricultural College (DSAC) was very active in the development of the design especially for semi-commercial pig raisers.</span></span></span></p>

          <p>&nbsp;</p>
          </div>
    
        </div>
      </div>
    </div>
    <div class="site-section" id="section-ch1_2">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
             
            </div>

<p>&nbsp;</p>
<h3 class="text-primary">CvSU-AREC: Revitalize Biogas Technology</h3>
<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cavite State University &ndash; Affiliated Renewable Energy Center (CvSU-AREC) was established in 1989 by the Department of Energy (DOE) in its effort to promote the use of Renewable Energy Technologies (RETs) in Region IV. There were other ARECs established in several strategically located colleges and universities (both private and public) in other regions of the country to serve as DOE&rsquo;s extension arm to the rural areas.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; During the first few years of the project, information awareness campaigns were conducted to promote the use of Renewable Energy resources such as wind, hydro, solar and biomass. The center was successful in arousing the interest of the people in the livestock sector but not that so successful in convincing them to invest in any of these technologies mainly because of the availability of grid electricity in their area and most clients lack needed capital and they were used to receiving dole out projects from the government.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In the 90&rsquo;s, pig production in the Philippines rapidly grew, but gained negative impact due to significant environmental problems brought by the industry. Being aware of these, the CvSU-AREC team reassessed its position and focused its thrust on BIOGAS TECHNOLOGY, a decade old technology which offers energy generation and environmental protection. Seminars and trainings on biogas technology were attended by AREC staff and a number of working models were constructed to obtain an in-depth knowledge of the technology.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A major opportunity for additional knowledge came in September 1991 when STET, an NGO from japan, sponsored the three-month hands-on training on biogas technology at the Biogas Research and Training Center for Asia and the Pacific (BRTC) in Chengdu, People&rsquo;s Republic of China, which was participated in by Prof. Jaimee Q. Dilidili, head of the Technology Development Division of the CvSU-AREC. This was followed in November 1991 by a 45-day hands-on training sponsored by the International Institute for Rural Reconstruction (IIRR) with Indian technician as trainors. Since then, the center&rsquo;s capability was strengthened and enhanced. These trainings enabled the AREC staff to fully understand the principles and processes of Biogas Technology, which eventually facilitated the transfer of knowledge and expertise to more than a hundred clienteles.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In 1993, the First National Training Course on Biogas Technology was conducted at the Don Severino Agricultural College with the primary objectives of promoting the technology and producing skilled biogas technician to construct and supervise the construction of a biogas plant.</span></span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 1. Participants of the First National Training Course on Biogas Technology</span></span></span></p>

<p>&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A Chinese Biogas Digester Model was also designed and constructed at the CvSU main campus for validation purposes. In the course of evaluation, its performance was subjected to necessary adjustments to make it an effective working model. Difficulties were encountered in the replication of the same model and the transfer of the technology in the absence of the highly specialized skills for that purpose. It was at this point that the Center designed a simple model which is adoptable to Filipino masonry skills, easy to construct and readily operational. Thus, the birth of DSAC-Biogas Digester Model which was awarded by the Intellectual Property Office (IPO) a Utility Model Registration Number UM 2-1997-15098 on April 9, 2002.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The National Biogas Technology Extension Program in Key Livestock Areas was implemented in 1996 in cooperation with the Department of Energy and the Department of Agriculture wherein CvSU was designated as the National Biogas Demo and Training Center. Since then, a number of local regional and national fora, seminars, hands-on trainings and workshops were conducted to promote the technology. Participants were from various sectors&nbsp;&nbsp; of the society: private individuals, companies, NGOs, agro-industry, government agencies and DOE including the 20 ARECs in the country. In the course of promoting the technology, the following were developed: training module, technoguide, a number of brochures and printed materials. The printed materials aimed to create awareness among the biogas enthusiasts. Linkages were established between DOE (represented by CvSU &ndash; AREC IV) and various government agencies such as the Department of Agriculture (DA), Department of Environment and Natural Resources (DENR) , Laguna Lake Development Authority (LLDA), Department of Science and Technology (DOST), and Provincial Government of Batangas to name a few.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Likewise, the technical expertise of the Center was sought by several non-government organizations (NGOs) such as Soro-soro Ibaba Development Cooperative, Inc. (Development Cooperative, Inc. (SIDCI) in Batangas City; Women&rsquo;s Ecology Center of St. Scholastica&rsquo;s College at Mendez, Cavite during the time when Sis. Maryjohn Manansan was the Directress; Center for Ecozoic Living and Learning (CELL) of the Columban Fathers at Silang, Cavite; Angels&rsquo; Hills Retreat Center at Tagaytay City and others.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">Hands-on trainings were conducted in Davao City, Cagayan De Oro City, Butuan City and Gingoog City catering mainly to the participants from Mindanao. Participants from the Visayas were trained in Cebu City, Bilar, Bohol and Dumaguete City, while that from Luzon were accommodated at the CvSU Main Campus in Indang, Cavite. The participants were asked to propagate and practice the new learned technology in their respective areas of coverage. To date, a number of CvSU Biogas Digester Model in varying sizes had been constructed nationwide, addressing the requirements of small-medium-large livestock producers, thus, helping the government in its effort to protect the environment and energy conversation.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">CvSU-AREC believes that it has done its share in promoting sustainable livestock industry development of the country and contributing to environmental protection. The center has earned recognition for its expert services in Biogas System as applied to Power Generation and Livestock Waste Management.</span></span></span></p>

<p>&nbsp;</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-ch1_3">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary"></h2>
            </div><p>&nbsp;</p>

            <h3 class="text-primary">BAI Experience in the Promotion of Biogas Technology</h3>
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In 1995, the low-cost Biogas Technology using Polyethylene tube was introduced in Philippines by the Bureau of Animal Industry (BAI). Modification of the plastic tube Biogas digester being introduced in Vietnam by Thomas R. Preston was done and applied by the research staff of BAI. With the advent of small and affordable unit (3 to 5 cu.m. at P6,500.00 &ndash; 13,000.00), BAI Tubular Polyethylene Digester (BAI-TPED) has gained popularity. The main breakthrough is the utilization of polyethylene plastic tube for the digester that is simple and easy to maintain.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In the same year, a program on the promotion of this low-cost biogas technology was launched to cater to the demands of increasing number of the small household pig raisers in the country. The project was conceived so that affordable, easy to install and adaptable biogas model will be available to small household pig production units. The promotional strategy was continued by the different regional offices and local government units under the Department of Agriculture. Some livestock cooperatives and NGOs were also tapped for the project and promoted biogas technology to their members.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The technology gained wider acceptance and continued to progress. There were about 254 units installed nationwide but some of these are not functioning already due to some problems i.e. damages caused by animals natural calamities, falling trees, flood etc. Monitoring the units installed at different places became a problem due to lack of funds for travels or staff.</span></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The biogas project gained small support from the Food and Agriculture Organizations. The farmers raising 10 to 20 pigs &amp; feeding sugarcane juice were tapped for the project &ldquo;Diversification of Sugarcane Juice&rdquo;. The project included the installation of biogas digesterto selected cooperators to manage the manure. The units installed served as demonstration or show window for other pig raisers in the locality. Through this project, other interested local government officials requested the BAI to conduct training for farmers and technicians in their respective localities. The project was coordinated with other regional offices where training was conducted. The project has trained 300 farmers, 25 key farmers and 200 agricultural technicians. Repair and maintenance of the digester became the major constraints due to the unavailability of materials and technicians to do the repair of the biogas system.</span></span></span></p>

<p>&nbsp;</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-ch1_4">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary"></h2>
            </div><p>&nbsp;</p>

            <h3 class="text-primary">PhilBIO and Biogas Technology </h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><span style="font-size:12.0pt">Philippine Bio-Sciences Co., Inc. or PhilBIO was established in 1998 with the goal of promoting biogas technology utilization in the country. A subsidiary of AsiaBioGas Co. Ltd, with headquarter in Thailand, PhilBIO&rsquo;s first waste-to-energy project was constructed at the Rocky Farm in the Province of Rizal. To date, it has completed 60 Covered In-Ground Anaerobic Reactor (CIGAR) Projects.These systems treat waste water effectively through proper cultivation of microbial sludge to remove significantly COD in wastewater, and capturing biogas for an on-site power use.</span></span></span></p>


          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-ch1_5">
      <div class="container">
        <div class="row mb-5">
          
          
          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary"></h2>
            </div>
            <p>&nbsp;</p>

            <h3 class="text-primary">Status of Biogas Technology in the Philippines</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In 2006-2008, CvSU-AREC conducted a research entitled &ldquo;Validation of Biogas Technology and its Utilization in the Philippines&rdquo; which was funded by the Philippine Council for Industry and Energy Research and Development (PCIERD). Result of the study showed that there are more than 900 units of biogas digesters installed throughout the country. The total capacity of these digesters is estimated at 662,457 cu.m. </span></span></span></p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Through the years, the country has also developed pool of experts on the technology.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;<strong>&nbsp;</strong></span></span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>



     <div class="site-section" id="section-ch2_1">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary">Chapter II</h2>
            </div>
<div class="text-left pb-1 border-primary mb-12">
  <h2 class="text-primary">BIOGAS TECHNOLOGICAL PROCESS</h2>
</div>
<h3 class="text-primary">What is Biogas?</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><span style="font-size:12.0pt">Biogas is a combustible gas that all organic matters (e.g. animal manures and crop residues) produce when fermented and decomposed by anaerobic bacteria under conditions of uniform humidity, constant temperature and full enclosure in a tank.</span></span></span></p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Biogas is a very common in nature and can easily be detected in the marshland, rice fields and domestic sewage canal. If you put bamboo stick into the black mud at the bottom of the pond, bubbles can be observed to come out. These bubbles are biogas. This gas produced by different kinds of bacteria under certain condition. These bacteria eat organic substances and biogas is a kind of excretion from them. The bacteria work well in the absence of air in the environment, so that full enclosure is necessary to enhance biogas production. </span></span></span></p>

<p style="text-align:justify">&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span style="font-size:12.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Biogas is composed of 60 to 70 percent methane (</span><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">CH</span></span></em><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">4</span></span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAUCAIAAADz4NHXAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAASRJREFUOE/tk7EVgyAQhjGzqEWeE+AEeWlSZQRss4eNtBkhVZrgBo5gI7uQuwMFjSa+p2WugrufDw5+ImMM2zUOu9IQ9ifqWhZ51EeeS+0uWUuX7lN14VRe498D3pqiqzhjXKiOJkrApKKxr7oiJVDAhBoEfsDs8EMAiVCP9XBO+88CDRG/1P2GK4FE/AkkwTTCSwmbB+Iq4Gg9rlgCGnB41zaMH5Plz4OCLI0HgX49Gn49+8RoKRCT40xPgah+3pm4nEbA0Q5YQYNZKwExTjPW3Mrauk9rWbiaZSAwbAFPOO1Jy7LN+nM5uwl/Ts7F4ET/Ju6pyWYYwT0qAQtAaVPOjzNOXZsCHhrdElVVbSVOjcU3E8N/ulfX/cfHC0ZmhHe5a7wBQOTIvIPoSfoAAAAASUVORK5CYII=" style="height:20px; width:27px" /></span></span><span style="font-size:12.0pt">), 30 TO 40 percent carbon dioxide (</span><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">CO</span></span></em><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAUCAIAAADz4NHXAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAQNJREFUOE/tk7EVgyAQhjG72DgCTJAuG6TDNk32wDXSBzdwhDSwCznuUEAx7/mkzFXCf37v4P9pnHOsal2q0jzsT7Tj0ItmLiEGm15yqoo+1zIzwGssozhjXGqDCy1hofB7q4beRF76fHJo4QlM6qjARlxuVOxP2xMkEnG+nYayuj7Dingc+OsPmLEu0EHCzWdivGt3Hk9Bte/XxOTtWv4DiG0Ht7hbG9UO98fE1ZOAdgyBi4GKRlNWjFEyC04wOqTKexhNhAujjGHcyFtKD1DinJzLPGrQPqugUWLXBewQlpDHUtOBPZhoCV8FIuBU8jbOEuN0Oox5johRXooO3nh3qtYXyN0IPwKRmuUAAAAASUVORK5CYII=" style="height:20px; width:27px" /></span></span><span style="font-size:12.0pt">) and traces of other compounds such as hydrogen sulfide (</span><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">H</span></span></em><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAUCAIAAAAP9fodAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAANJJREFUOE/VlMsRAiEMhsFaHE9WwJbg3RJiO2wb3hc72BK8QC8ICW90BG/mtMn8X57Mcmstm7fDPOKJf8LMunC0ZTU47eNGfgo0O3CbRNNSMAZKR98qcEpQya8+WPS8qhSFNO8pG7E5KmKYuzUhc8tNVarmqUrUBRqMzq2fOzufjqmc2e67uF5yoOvEp/k2mFZAMwgIffsmPVW2iIPmgHPJcXTcNsvLCOvHe2HqbiNOG0Tpbh8OVIS1hHTYUcwxsngxQ1iuo0LBAax+CtQn/+2n8ALVixnig4a7zgAAAABJRU5ErkJggg==" style="height:20px; width:18px" /></span></span><span style="font-size:12.0pt">S), nitrogen gas (</span><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">N</span></span></em><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAUCAIAAAAP9fodAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAOlJREFUOE/VlLERwjAMRRVmCRQcEzgTcDRUjKB5nDXoyQiZgKPA2cVIsuzYB+EcOlwkZ8VfT/8nl8Z7D+vXZr2EFf8km/qu4dX1k5p9rxQpUJKynDVcN9bllWwby3JPkbjHiIgwXm+Rx00up/Zz1NpkQMDB0TXxCL/ESrTpeTf7bXs8zzzCH3YLLIBoTDszj7jeC77wk29ExnHEMxINzfttRPoeWVZ0DjrMjZFniRkMatAsI1VuXl9FGjGBJbFQBj1UCOfHpTk6q81CJFXLWUwT1MpIY7Ngq2QzZ1BghSy6D19ZmLP57afwAmWrARFkO3XXAAAAAElFTkSuQmCC" style="height:20px; width:18px" /></span></span><span style="font-size:12.0pt">), hydrogen gas (</span><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">H</span></span></em><em><span style="font-size:12.0pt"><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAUCAIAAAAP9fodAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAANJJREFUOE/VlMsRAiEMhsFaHE9WwJbg3RJiO2wb3hc72BK8QC8ICW90BG/mtMn8X57Mcmstm7fDPOKJf8LMunC0ZTU47eNGfgo0O3CbRNNSMAZKR98qcEpQya8+WPS8qhSFNO8pG7E5KmKYuzUhc8tNVarmqUrUBRqMzq2fOzufjqmc2e67uF5yoOvEp/k2mFZAMwgIffsmPVW2iIPmgHPJcXTcNsvLCOvHe2HqbiNOG0Tpbh8OVIS1hHTYUcwxsngxQ1iuo0LBAax+CtQn/+2n8ALVixnig4a7zgAAAABJRU5ErkJggg==" style="height:20px; width:18px" /></span></span><span style="font-size:12.0pt">), carbon monoxide (CO) and other hydrocarbon compounds. It is about 20 percent lighter than air and has ignition temperature in the range of 650</span><span style="font-size:12.0pt">&deg;</span><span style="font-size:12.0pt">C to 750 </span><span style="font-size:12.0pt">&deg;</span><span style="font-size:12.0pt">C. Methane itself is odorless, colorless and tasteless, but the other gases contained in biogas give it a slight smell of rotten egg. The gas burns with clear blue flame similar to that LPG. Upon complete combustion , one cubic meter of methane can reach a temperature of 1400</span><span style="font-size:12.0pt">&deg;</span><span style="font-size:12.0pt">C&nbsp; and release 8,562 to 9,500 kcal heat (1kcal of heat will raise the temperature of 1 kg of water by 1</span><span style="font-size:12.0pt">&deg;</span><span style="font-size:12.0pt">C.</span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">One complete combustion of one cubic meter of biogas can release 5,500 to 6,500 kcal of heat.</span></span></p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
     <div class="site-section" id="section-ch2_2">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
             
            </div>
             <h3 class="text-primary">Biogas Technological Process</h3>
          <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The biogas technological process (Figure9) is accomplished by means of fermentation/digestion of organic materials (such as crop residues, human and animal wastes, distillery wastes) through the actions of a number of microorganisms under anaerobic condition to produce Biogas and sludge. Anaerobic condition is provided by a simple known as &ldquo;biogas digester&rdquo; (further discussion in Chapter IV)</span></span></p>

          <p>&nbsp;</p>

          <table align="left" style="border:undefined">
            <tbody>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p>&nbsp;</p>

          <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 9. The biogas technological process</span></span></p>

          </div>

          
        </div>
      </div>
    </div>
     <div class="site-section" id="section-ch2_3">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
            </div>
<p>&nbsp;</p>

          <h3 class="text-primary">Stages of Biogas Fermentation</h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">There are three important stages in biogas fermentation process: (1) liquefaction stage; (2) acid production stage; and (3) methane production stage (Figures 10 and 11). </span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 10. Stages of biogas fermentation </span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 11. The three stages of fermentation </span></span></p>

<p>&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">In the first stage, liquefaction stage, a group of facultative bacteria (fermenting bacteria) acts upon the organic substrate. By enzymatic hydrolysis, the polymers are converted into soluble monomers that become the substrate for the next stage.</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">In the second stage, acid-production stage, the soluble substrate from the first stage is acted upon by acetogenic bacteria to yield hydrogen, acetic acid and others such as propanic, butyric, lactic and formic acids. This become the substrate for the last stage. Studies showed that 70% of the methane produced come from acetic acid, thus, making it the single most important substance for methane production.</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">In the third stage, methane production stage, then methane producing(methanogenic) bacteria utilize as substrate the simple compounds such as acetic acid, hydrogen, formic acid and CO2 to form methane and carbon dioxide.</span></span></p>

<p style="text-align:justify">&nbsp;</p>
          </div> 


          
        </div>
      </div>
    </div>
     <div class="site-section" id="section-ch2_4">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div><h3 class="text-primary">Classification of Biogas Fermentation Process </h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">There are many processes which could be adopted for the fermentation of different wastes for various purposes. They can be divided according to the following:</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. <strong>Method of feeding</strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp; </strong>a. Continuous Feeding</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The manure is fed continuously into the digester everyday. The digester collection system/mixing&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tank is directly connected to the wastes canal system of the livestock project. The effluent is discharged simultaneously in the same amount of the influent. Thus, the fermentation in the digester goes on continuously. This process is characterized by constant fermentation, uniform gas production and easy control. This method is widely used in medium and large size digesters.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; b. Semi-Continuous Feeding </span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">A large quantity of feedstock is put into the digester in the first feeding. Whes yield gradually drops down, fresh raw material is introduced and the same amount of effluent is being discharged regularly.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; c. Batch Feeding </span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Digester is charged with feedstock manually by batch. When gas yield drops down to a low level after a period of fermentation, the digester can be emptied and fed once again.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>2. Temperature</strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; a. Thermophilic Process </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Thermophilic fermentation can be accomplished with a temperature ranging from 45-60 degrees centigrade. This is characterized by rapid fermentation, high gas yield (2&deg;C gas/<em><span style="font-family:&quot;Cambria Math&quot;,serif">m</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">3</span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAIAAAD9MqGbAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAO5JREFUOE/FkrsRgzAMhuXMglNwTGA2ID0jmHWgzQj0mA2YIEcRexdHks2FR1KYIlH1n86/Hp8svPdwKi6nXGT6hdN1ZSk4yqZzKT3tDLVFKt4U935AK+mUsKbV2mCJpD3HRghZ9ZDLDEAkX8WNjazAUE9cndbGrTHJshkp+9Z0BAJEYCCTueJTGpratgo0Bs1vNGy1CRis0cEBSlMqEKLXqmVye72kDxTZyS2X0iuNBb8ama0b+knlkifZ6OcDiiti/BjktPOk6lt4sdKxCKJiMoeISOKsjCdq3BiRKB333y+afs+ld9If2gz8D+cLMLQhmcWQwpcAAAAASUVORK5CYII=" style="height:19px; width:19px" /></span></span>&nbsp;digester/day) and short retention time. This system is appropriate in fermenting wastes from distilleries, wine and sugar refineries where high temperature feedstock is available.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; b. Mesophilic Process</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The temperature of mesophilic fermentation ranges from 30&deg;C to 45&deg;C. This process feature low gas production (1<em><span style="font-family:&quot;Cambria Math&quot;,serif">m</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">3</span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAIAAAD9MqGbAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAO5JREFUOE/FkrsRgzAMhuXMglNwTGA2ID0jmHWgzQj0mA2YIEcRexdHks2FR1KYIlH1n86/Hp8svPdwKi6nXGT6hdN1ZSk4yqZzKT3tDLVFKt4U935AK+mUsKbV2mCJpD3HRghZ9ZDLDEAkX8WNjazAUE9cndbGrTHJshkp+9Z0BAJEYCCTueJTGpratgo0Bs1vNGy1CRis0cEBSlMqEKLXqmVye72kDxTZyS2X0iuNBb8ama0b+knlkifZ6OcDiiti/BjktPOk6lt4sdKxCKJiMoeISOKsjCdq3BiRKB333y+afs+ld9If2gz8D+cLMLQhmcWQwpcAAAAASUVORK5CYII=" style="height:19px; width:19px" /></span></span>biogas/<em><span style="font-family:&quot;Cambria Math&quot;,serif">m</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">3</span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAIAAAD9MqGbAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAO5JREFUOE/FkrsRgzAMhuXMglNwTGA2ID0jmHWgzQj0mA2YIEcRexdHks2FR1KYIlH1n86/Hp8svPdwKi6nXGT6hdN1ZSk4yqZzKT3tDLVFKt4U935AK+mUsKbV2mCJpD3HRghZ9ZDLDEAkX8WNjazAUE9cndbGrTHJshkp+9Z0BAJEYCCTueJTGpratgo0Bs1vNGy1CRis0cEBSlMqEKLXqmVye72kDxTZyS2X0iuNBb8ama0b+knlkifZ6OcDiiti/BjktPOk6lt4sdKxCKJiMoeISOKsjCdq3BiRKB333y+afs+ld9If2gz8D+cLMLQhmcWQwpcAAAAASUVORK5CYII=" style="height:19px; width:19px" /></span></span>&nbsp;digester/day), simple operation, low initial cost, and is suitable for low temperature industrial wastewater treatment.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; c. Ambient Temperature Process </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The operating temperature for this process rangers from 18&deg;C to 30&deg;C. The fermentation of this process is much influenced by earth and atmospheric temperature. Its main features include: suitable for rural areas, low cost, gas production is dependent of temperature (0.25 to 0.5 m3 gas/<em><span style="font-family:&quot;Cambria Math&quot;,serif">m</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">3</span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAIAAAD9MqGbAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAO5JREFUOE/FkrsRgzAMhuXMglNwTGA2ID0jmHWgzQj0mA2YIEcRexdHks2FR1KYIlH1n86/Hp8svPdwKi6nXGT6hdN1ZSk4yqZzKT3tDLVFKt4U935AK+mUsKbV2mCJpD3HRghZ9ZDLDEAkX8WNjazAUE9cndbGrTHJshkp+9Z0BAJEYCCTueJTGpratgo0Bs1vNGy1CRis0cEBSlMqEKLXqmVye72kDxTZyS2X0iuNBb8ama0b+knlkifZ6OcDiiti/BjktPOk6lt4sdKxCKJiMoeISOKsjCdq3BiRKB333y+afs+ld9If2gz8D+cLMLQhmcWQwpcAAAAASUVORK5CYII=" style="height:19px; width:19px" /></span></span>&nbsp;digester/day), and simple construction. Below 10&deg;C, bacterial activity ceases, thus, gas production stops.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>3. Fermentation Stage</strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; a. Single-Stage Fermentation </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The three stages of biogas fermentation take place in the digester tank, e.g. fixed-dome digester and the other type comprising of one tank. In this case, the solid retention time (SRT) and hydraulic retention time (HRT) are the sake (SRT=HRT).</span></span></p>

<p style="text-align:justify">&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; b. Two-Stage and Multi Stage Fermentation </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">These processes indicate that fermentation occurs in two or more digesters. Feedstock is first charged in the first tank and the effluent coming from the first digester is further digested in the second digester. Multi-stage digesters are characterized by long retention time, good decomposition of organic matter and high investment.</span></span></p>

<p style="text-align:justify">&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
     <div class="site-section" id="section-ch2_5">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
             
            </div><h3 class="text-primary">Factors that Influence Biogas Production </h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">There are several factors which affects or stimulate gas production. The operational success of the digesters depends on the following parameters:</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>1. Temperature</strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The temperature directly affects process conditions by microbial growth rates. The methane bacteria are very sensitive to sudden temperature changes, and for optimum process and stability, the temperature should be controlled carefully within a narrow range of selected operating temperature. It should be remembered that higher temperature yields more gas.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2<strong>. Retention Time (RT)</strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Retention time is the theoretical time that the input material remains inside the digester before it is expelled. Temperature is inversely related to retention time; the higher the temperature, the shorter is the retention time. The volume of slurry input should be given sufficient time for the bacteria to digest the materials before it leaves the digester.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Theoretically,</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RT (Days)= <span style="font-family:&quot;Cambria Math&quot;,serif">Digester slurry volume </span><span style="font-family:&quot;Cambria Math&quot;,serif">Daily input volume </span><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAAdCAIAAADuPz9sAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAABAtJREFUaEPtWTt26jAQFVkLpMhhBbACSE9LZ5ehSUdJRwMl6WjTB1YAK/ChiL0X3oy+I1m2hfk4ebEabGk0n6vROLnTOZ/PrB33R+Dp/iZqWsjWw06nE+9rbr9y282tP7F9DPHoMYzXmfIRVpqKE1zovm1Xgyvhqr/95taf2GiTQkDRDmrIOd1NkllvKLEebc6bUX1f97FSVF/H/7PTLh3d0dthFx0/vyCreaarjM7WMV5kNXA6AyD5+1AKEZl4D7vHH8dZD9fh3FxhoXzNtZrjsDRQjM1FplfaUWK9xtI59E3cWWFG7BeBmXntHgRjbrTywGOd2kIA9hIfFUsOHMYwj3VGY1bvIibzG55EohMJmBusUjUDD3oNtAy4ODzgL9EqHqkwN8MV7SL+I60UaSDaqLeOEus1VW/oijFiLOt51Cid2JlHaofceYWV1k53S8B88Xo/hoOXnn1nu6/zKFlgLoyTaPLaZSw9HdnHGBO2Nzuy5DvDmjphC8ic6Wn+blecvDBX338GRaPN4Q1+cJRoKC4hjhLz2h29r5i4m8vPl60yAhbdeXBvwIOCtec+O57SsIrFbbEubBFPevjidYCGlB9/KKtmZ/a1YPPDAdPusOEu915k/mJhX83BzX08Ze8gsp0k4yX9WyHL8sLeSAo1WFUkPYXBgAc378+mcQy+G5gRmtcJmy3NPLgnqiVUlu+E5dKM2MuCrHvj5aVCD0BPXWQ+D1eZ32tbiIvg/eBD3TqtR9x/KSAUFgjrqsFLhzGCGtQWUr24Q6sVGsJZKa+UOK+65tlGRJUy9VGKRSoYGXCF9UgEC15Iq9ZTPl74Z0UYLh+6/AofBz7Xq3Q0so6Oq8RpxAFjNAjoM34j1DA537Dr5eatC/kDPO2AD6E1r5W7AoGf+y/4FUG1W/8wAm3peNDht6WjBfpBCDzITJvRvxnom7Pm9wDjwU5WZXRxWyAfvG4UBLLmf6qxUAV0cVsgD/SljYJL5Yvy+ld0GKqApsHRtgDMK5oeeG9kvqxGgd7mJ9pxmcpbPDpS9PJeryVNT0l73nQw/USnw1CD2q/uKgRS++UFrpIG8LcFNF1Dlk2jwGL9iwh4JL4kNUfZeClO+HQP7Z5vK9A4chYrqH2fAeJSILVfjuQlGS1PjPO10Arof06hFYC8f+koJODdXQ57DstyBql1bC0Ej2ao/XL3LgLatAWy9XScTLbA82umudhOEQFfDZxAF9l45xS8BHymz6IutR/G64NLga0MGmFF6ShqC0h8CQ9PeEmHNZdNAIcZpjymhz2nB6jaD/pYKf1vdxh0OBdR+/lovIS+cdNH7ZcjGcZHVxbygM7BhQS8/Wm41oHm998d6JoEPE2e5lG6gQcte1f9pbiJxD/1c71K0gaylAAAAABJRU5ErkJggg==" style="height:29px; width:120px" /></span></span></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">or, digester slurry volume = RT X Daily input volume </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table1. Preferable retention time and gas production at different temperatures</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>3. pH or degree of Acidity or Alkalinity </strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The optimum pH value for biogas fermentation is 6.5 - 7.5 although it may tolerate a pH level of 6 to 8. The pH value varies and adjust automatically. Below 6 or above 8 necessitates adjustments of pH level for it may inhibit or stop the digestion process. Methane producing bacteria are very sensitive to pH condition and changes. Under acidic conditions, pH values can be improved by adding as fertilizer, diluted ammonia water or mixture of them, fermented liquor and lime.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>4. Carbon-Nitrogen (C/N) Ratio </strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The bacteria need both carbon and nitrogen to survive. They consume carbon about 25 to 35 times faster than they consume nitrogen. Thus, proper digestion proceeds at an optimum rate whena carbon content of the slurry or input materials used is about 20 to 30:1. High C/N ratio means short supply of nitrogen and fermentation of subjected to acidic inhibition. Low C/N ratio means excessive ammonia which lead to inhibition. The common sources of carbon are leaves, grasses and raw materials rich in cellulose. Sources of nitrogen are manure and urine. C/N ratio of some organic materials are shown below.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table 2. C/N Ratio of some organic materials</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Materials with high C/N ratio could be mixed with those of low C/N ratio to bring the average ratio of the composite input to a desirable level.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>5. Agitation</strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Without stirring the small digester, the fermenting slurry can be divided into three layers: scum in the upper part, liquid in the middle, and sludge at the bottom. The main function of stirring is to break these layers and distribute the slurry inside the digester uniformly. The procedure promotes contact between the old and fresh slurry and between microbes and substrate, thus, accelerating fermentation rate and enhancing gas yield. There are three kinds of stirrer:</span></span></p>

<ol style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mechanical stirrer</span></span></li>
</ol>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mechanical stirrer (Figure 12a) can be operated manually or by means of electricity. The usual construction is a pipe having baffle placed at the middle of the digester to provide the stirring action.</span></span></p>

<p style="margin-left:24px">&nbsp;</p>

<ol start="2" style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Liquid Stirrer</span></span></li>
</ol>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">In this method, a certain amount of the effluent is drawn from the outlet of the digester by means of pump or other manual device and returned into the inlet to provide a strong liquid stir (Figure 12b).</span></span></p>

<ol start="3" style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Gas Stirrer</span></span></li>
</ol>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The biogas is drawn from the digester by means of a pump and returned back to the bottom of the digester to promote stirring action (Figure12c)</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 12a. Mechanical stirrer</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 12b. Hydraulic Stirrer </span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 12c. Gas Stirrer</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>6. Types of raw material </strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The kind of raw material as input is one of the major factors which influence gas production. The common materials used for methane production are crop residues, human excreta, animal wastes, distilleries and food processing plant wastes, and others which contain high concentration of organic waste. The potential gas yield of some raw materials is presented in table 3.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>7. Fermentation process </strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The kind of fermentation process being used has a great influence on gas production. The most common types are single-phase and two-phase fermentation processes. Other types are: Anaerobic Filter (AF); Up flow Anaerobic Sludge Bed (UASB); Expanding Bed; Biological Cycle (AF &amp; UASB). </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table 3. Potential gas yield of selected raw materials </span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>8. Toxicity</strong></span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mineral ions, heavy metal and detergents are some of the toxic materials that inhibit the normal growth of pathogens in the digester. Small quantity of mineral ions (e.g. sodium, potassium, calcium, magnesium, ammonium and sulphur) also stimulates the growth of bacteria, while very heavy concentration of these ions will have toxic effect. Similarly, heavy metals such as copper, nickel, chromium, zinc, lead, etc., in small quantities are essential for the growth of bacteria but their higher concentration has toxic effects. Likewise detergents including soap, antibiotics, organic solvents, etc. inhibit the activities of methane producing bacteria and addition of these substances in the digester should be avoided. Although, there is a long list of the substances that produce toxicity on bacterial growth, the inhibiting levels of some of the major ones are given in Table 4.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table 4. Toxic level of various inhibitors</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>


          </div>
          
        </div>
      </div>
    </div>




      <div class="site-section" id="section-chv_1">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary">Chapter V</h2>
            </div>
<div class="text-left pb-1 border-primary mb-12">
  <h2 class="text-primary">DSAC-MODEL BIOGAS DIGESTER</h2>
</div>
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>The DSAC-Model biogas digester is a rectangular fixed-dome digester. It is a modification combining the features of Chinese and Indian models.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Among its special features are the following:</span></span></p>

<ul>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Environment-friendly, 60%-80% pollution reduction capability</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Low cost</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Easy to construct and simple to operate</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">All concrete construction, durable and with less maintenance</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Flexibility of design</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Self-stirring</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">With built-in safety mechanism</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Can generate biogas from 35-60% of digester volume</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Adoptable to small-medium-large scale animal production, slaughterhouses and food processing plant</span></span></li>
</ul>

<p style="margin-left:48px">&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p style="margin-left:48px">&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 31. DSAC-Model biogas digester (Utility Model No. 2-1997-15098)</span></span></p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>

<div class="site-section" id="section-chv_2">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>

<h3 class="text-primary">Components of DSAC-Model Biogas Disaster</h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>The biogas digester is composed of an inlet, inlet pipe, gas storage, digester and the outlet chamber (Figure 32).</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 32. Basic components of a DSAC-Model biogas system</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Inlet. </strong>The inlet serves as the collection tank of the manure. It can be either circular or rectangular in shape. It is divided into two compartments, namely: the collection compartmenaerobic nt and the inlet compartment. The collection compartment iss is directly connected to the canal system of the animal pen. It collects the manure and serves as sedimentation tank where foreign matters which are non-biodegradable like sand, hair, etc. could be collected to avoid its entry to the digester. The inlet compartment is connected to the digester through an inlet pipe which then conveys the slurry to the digester. The inlet should be provided with cover to avoid the entrance of rainwater and for safety purposes. </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Digester and Gas Storage. </strong>&nbsp;This is the fermentation tank which provide anaerobic condition needed for the bacteria to act on the organic wastes. The fermentation process is allowed to be completed in the digester for a certain period of time known as the retention period. During the fermentation process, biogas is generated and stored in the gas storage which form as the dome cover of the digester. The structure must be air- and water-tight. </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Outlet Chamber. </strong>The outlet chamber serves as the hydraulic tank which maintain the pressure of the biogas inside the gas storage. It can be either circular or rectangular in shape. The chamber is provided with discharge outlet where sludge or effluent can be collected.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Manhole.</strong> Between the digester and the outlet chamber is a manhole which provide an access to the inside of the digester if necessary.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>The Gas Line. </strong>The Gas Line is the delivery line of gas from gas storage tank to the appliances<strong> </strong>being used.<strong> </strong>It is located at the midline of the dome cover. It is made of stainless steel pipe.</span></span></p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chv_3">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>
<h3 class="text-primary">Principles of Operation</h3>
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>The biogas plant operates in a displacement principle. The slurry in the inlet pipe. Fermentation process occurs inside the digester due to the action of bacteria. During the fermentation process, biogas is generated and stored in the gas holder. The slurry is allowed to stay inside the digester for a certain number of days to allow the fermentation process to complete. Once digested, the slurry settles down as it becomes denser compared to the fresh slurry.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The digested slurry ids then pushed by the incoming fresh slurry in to the outlet chamber. The pressure developed by the gas generated inside the digester assists also in pushing the digested slurry towards the outlet chamber to the discharge outlet.</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;</span></span></p>

<p>&nbsp;</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chv_4">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>


<h3 class="text-primary">DESIGN FORMULAS</h3>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Let&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; h = height of rectangle </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; W = width of digester </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; F = top of dome</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; R = Hydraulic radius </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; V1 = gas chamber volume</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;V2 = slurry chamber volume</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vt = total volume of digester </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vo = volume of outlet</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vs = volume of slurry </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The useful relationship for this type of digester are:</span></span></p>

<ol>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">f/w = 1/3</span></span></li>
</ol>

<p style="margin-left:72px">&nbsp;</p>

<ol start="2">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">R =&nbsp; <span style="font-family:&quot;Cambria Math&quot;,serif"> </span><em><span style="font-family:&quot;Cambria Math&quot;,serif">W</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">+4</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">f</span></em><em><span style="font-family:&quot;Cambria Math&quot;,serif">2</span></em><span style="font-family:&quot;Cambria Math&quot;,serif"> </span><em><span style="font-family:&quot;Cambria Math&quot;,serif">8f</span></em><span style="font-size:11.0pt"><span style="font-family:&quot;Calibri&quot;,sans-serif"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAfCAIAAAD4PwNWAAAAAXNSR0IArs4c6QAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAelJREFUWEftVrtxwzAMlTJL3OQ8Ab2B06RKm44ukwEyBNVqijShNtAIbqhdZIAgKZL607qccmc2+hEPDw+Q9PK2bbPdrKfdMEEi/5RNU5xOuV6notlC0CHAxdqoa32UMGSS11e1BZtBQEgASwmGGZhQ5sqcSa4Tc+RBTwRt8RbEmt3xbYvn7kuu03R4EWBmdyIfSqoExFh8L5WSQkiFj0NCg2xgF+cRSyiNA4BbfcA+G8m5EBiHUXhB8UY9T0GvjlgbHRaw9MKN0EOAjg0kRgZUOZ3DYagFvprRANF24IKlEBsQtCvHdTxqtr2M2BggzWaaiyd4ODdezZqrLchUOMKDbndssBRm+gKRcNGb12GkkSk22tgYhJwFDN7w+vj2+WzEr4/f7jzphW5+r3X99WE+TtVPyd5fLfgo4KRymz3EL8Xc0ASd2ixzDKQHiS3g0rY5MtrNWvxn2A3jvyPy6NS41vuamwebzTvVFBfrSy+BMa3M/UuV9CamfIK1M9O/QBV+8mM/tRb8zrmB3yBjLwfUAVx3fi6z8nzIE4UBkLX0aT9oQg7XtwmdmU0D9f3NCgRKqy2ddHYaPd+S//RUnjs7lekm0UILQ01LXysk8ba6RnVWYZG5m8mWODd91IV+aprOJmxW+KlpNjc+Qez9ijVF6wAAAABJRU5ErkJggg==" style="height:31px; width:47px" /></span></span> </span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="3">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Vo = 1/3 x V2, that is, Vo is one third the slurry chamber volume</span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="4">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Vs = V2, that is, slurry volume is equal to the volume of digester below the top dome.</span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="5">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Height of inlet pipe = &frac12; h, that is, the inlet pipe is placed &frac12; the height of the wall.</span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="6">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Mixing pit volume should be slightly larger than the daily charge.</span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="7">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Height of manhole = &frac12; height of the wall.</span></span></li>
</ol>

<p style="margin-left:48px">&nbsp;</p>

<ol start="8">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Width of manhole may be equal to or greater than the height of the manhole.</span></span></li>
</ol>

<p>&nbsp;</p>


          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chv_5">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>
<h3 class="text-primary">Sizing of Biogas Digester</h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>There are two approaches in determining the size of a biogas digester. The decision is made by the owner/ operator to fit his needs.</span></span></p>

<ol>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The size of the unit to produce a certain amount of gas needed.</span></span></li>
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The size of the unit to process/treat a given amount of organic matter (pig manure, chicken manure, etc.) as a waste management system</span></span></li>
</ol>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Generally, in case wherein the volume of organic matter to be treated is known and the need for gas is minimal, the overriding consideration, therefore is the quantity of the raw materials to be treated. Other questions are: What digester volume is needed to handle these materials? What is the quantity of gas expected? How will this gas be utilized? What is the cost involved? </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; For example: Assume a medium-sized piggery with one (1) boar, fifteen (15) sow and one hundred twenty fatteners.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The average daily manure production are:</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1 Boar = 4.91 kg</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">15 Sow = 3.97 kg</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">120 Fattener = 3.84 kg</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Manure Production = 1 Boar * 4.91 kg + 15 sows * 3.97 kg + 120 fatteners * 3.97 kg</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 4.91 + 59.55 + 460.8</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =525.26 li/day</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Slurry Volume = 525.26 liters * 2 (1 vol. of manure: 1 vol. of water)</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 1,050.52 li/day</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Digester volume = 882 li/day *40 days retention time </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 42,020.80 liters</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = 42.02 cu.m.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Estimated Gas Production = 42.02 cu.m. * 0.5 cu.m. biogas/ cu.m. digester volume</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; = 21.01 cu.m. biogas per day</span></span></p>

          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chv_6">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>

<h3 class="text-primary">Pre-Construction Consideration</h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp; </strong>Planning/Preparation</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is recommended that the builder reads the entire construction procedures to have an idea of&nbsp;&nbsp;&nbsp; what is involved, the time period required and the construction materials to be used.</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 34. Planning/Preparation</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Some important reminders in planning for the construction of biogas unit:</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. Order and purchase all materials in advance.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. Prepare all tools needed in the construction.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. Building a biogas tank is not similar to building a house or a piggery. One crack in a house or piggery structure is permissible but not in a biogas digester. Any source of leak for gas will render the biogas digester useless.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. Water-proofing concrete is relatively easy, but gas-proofing is difficult. This requires materials is not applied in ordinary masonry work.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. Costing. Ask the question whether some materials could be suitably substituted by others which are less expensive but adequate for job.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">6. Available labor. Check if the required labor and technical skills could be easily obtained and if not, where to secure them.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">7. Check water table. The water table should not exceed half of the height of digester wall. If necessary, the whole structure may be elevated to compensate for the high water table (although it involve some problems like more backfill needed and more efforts in lifting/handling manure into the digester). As a rule, it is best to avoid high groundwater areas for biogas units.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">8. Avoid construction during rainy season for it may cause construction delay, thus, affecting the quality of concrete work.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">9. Follow strictly the scientific methods for working with concrete. The payoff is highly durable, more lasting and efficiently functioning biogas unit.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">10. Other reminders. Consider the available animal waste, amount of manure available, amount of gas production and potential utilization of biogas by- products.</span></span></p>

<p>&nbsp;</p>


          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chv_7">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>
<h3 class="text-primary">Site Consideration</h3>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">The following guidelines are helpful in choosing in ideal site for biogas project.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. <em>Water table</em>. Biogas units should be constructed at site where water table is low. The&nbsp; maximum that a water table may be allowed to rise is &frac12; of the height of the digester. If the water table in the selected site is too high look for another site.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. <em>Site location</em>. Is should be located as much as possible downhill or downstream with respect to a well or spring. Ideally, the minimum distance should be 15-20 meters to avoid water contamination in case of leaks from the digester. </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. <em>Accessibility</em>. The site should be as close as possible to the of gas utilization, but at the same time, close to the source of raw materials such as piggery or poultry.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. <em>Soft formation.</em> The biogas digester should be constructed on table soil foundation.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. <em>Vegetation.</em> The digester should be away from roots of big trees that way damage the structure.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">6. <em>Sunlight.</em> The digester is completely underground. In the topics, the unit should be placed in the open area for greater exposure to sunlight. The heat provided by the sun will promote greater gas production. </span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">7. In clod areas, the digester should be constructed underneath the house/kitchen animal stalls to protect it from extremely low temperature.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">8. <em>Feeding</em>. The feeding of raw materials to the inlet/ mixing tank should be accomplished via sloping canals or through the action of gravity. This is advisable for increased efficiency and less labor cost in handling the manure.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">9. The site should be close to where the effluent is to be used/stored like vegetable garden or drying bed.</span></span></p>

<p>&nbsp;</p>
          </div>
          
        </div>
      </div>
    </div>
  <div class="site-section" id="section-chv_8">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>



<h3 class="text-primary">Construction Techniques (DSAC-Model Rectangular-Fix Dome Register)</h3>

<ol style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>Lay-outing</strong></span></span></li>
</ol>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">After the place has been carefully identified, the area should be cleared from gasses, debris and other material which might obstruct the free movement of workers doing construction. Minor site development is necessary for soil surface with sloping terrain; however, this is not needed for flat surfaces.</span></span></p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p>&nbsp;</p>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 35. Lay-outing</span></span></p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<ol start="2" style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>Excavation </strong></span></span></li>
</ol>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Earth bank should be as vertical as permissible. A 20 cm gap on both sides shall be allowed for backfill.</span></span></p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<table style="border:undefined; width:100%">
  <tbody>
    <tr>
      <td>
      <div>
      <p>&nbsp;</p>
      </div>
      </td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p>&nbsp;</p>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 36. Excavation</span></span></p>

<p style="margin-left:24px; text-align:justify">&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>c. Bottom Construction </strong></span></span></p>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">For a biogas plant of not more than 10 cu.m., a 20 cm x 20 cm footing shall be provided to carry the load of the digester wall. The soil must be properly drained and compacted. The footing must be reinforced with 10 mm RSB properly spaced with stirrups.</span></span></p>

<ol start="4" style="list-style-type:lower-alpha">
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>Flooring Construction </strong></span></span></li>
</ol>

<p style="margin-left:24px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">A 10 cm thick flooring shall be reinforced with 10 mm diameter RSB spaced at 40 cm on center both ways. The RSB shall be connected to the footing. Use class A concrete mixture with water proofing compound. </span></span></p>

<p style="text-align:justify">&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 37. Bottom Construction</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p style="margin-left:432px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 38. Flooring Construction</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; e. Wall Masonry </strong></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Wall should be reinforced concrete hollow blocks. The wall should be reinforced with 10 mm reinforcement steel bars placed at 40 cm distance (vertical bars) and every two layers for the horizontal bars. Use class A mortar with water proofing compound. Provide column in excess of 3 m span. Tie wires for the screen must be embedded and anchored to the horizontal bars.</span></span></p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Figure 39. Wall masonry</span></span></p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; f. Construction of Inlet </strong></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">A 200 mm diameter concrete pipe is connected to the digester at about half-way down the digester wall. The other end of the pipe is connected to the mixing pit where mixing of manure and water is done. The inlet pipes must be laid at a 30 degrees angle to the digester wall. </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; g. Construction of Hydraulic Tank</strong></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">This tank serves as the outlet tank. It must be provided with stairs and open manhole as access into the inside of the digester. The floor level must be on the same level with the upper part of top beam. The height of overflow must be at least 10 cm lower than the lower surface of the done.</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 40. Construction of inlet</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 41. Construction of hydraulic tank</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>h. Top Beam Construction</strong></span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; A 20 cm x 20 cm beam reinforced with 4-10 mm diameter RSB with stirrups spaced at 20 cm shall be connected to support the top dome. The beam shall be anchored on the vertical bars.</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 42. Top beam construction</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; i.Dome Construction</strong></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>The dome should be cast-in place. The curvature of the form works is based on the design curvature of the dome (inside). The curvature of the reinforcement bars shall be based on the curvature of the dome plus &frac12; the thickness of the dome which should be not less than 5 cm.&nbsp; The reinforcement must be 10 mm diameter RSB spaced at 15cm (both the curved and the horizontal bars) and the curved bars shall be anchored at the top beam.</span></span></p>

<p style="margin-left:48px; text-align:justify">&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 43a. Dome construction</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 43b. Dome construction</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; j. Sealing the Digester</strong></span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>The biogas digester must be water-tight and air tight. The walls and dome must be reinforced with screen before plastering with class A mortar mixed with sealing compound. Apply three layers of plaster (1/2&rdquo;, 1/4&rdquo;, and &frac14;&rdquo;, of thickness). Each layer must be applied continuously and should be finished within one day. All corners must be curved-finished. The plaster should be mixed with water proofing compound.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 44. Sealing the digester</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; K. Air and Water-Tightness Tests </strong></span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 45. Water-tightness test</span></span></p>

<ol style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Water-Tightness Test</span></span></li>
</ol>

<p style="margin-left:24px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">For Shallow Groundwater </span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. Dry the digester and check the leakage&nbsp;&nbsp;&nbsp; appearing on the wall, dome, and bottom. If water drips on the inner surface of the digester, this means that the digester is not water-tight.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. If water level in the digester does not change more than 5 mm for 12 hours, the digester is water tight by the level of ground water.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. Lower the groundwater level and follow the method for deep groundwater.</span></span></p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">For Deep Groundwater </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. Pour water until the digester is filled with water.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. At first, the concrete absorb some amount of water. Wait for 3-5 hours and then mark the water-level.</span></span></p>

<p style="margin-left:48px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. If drawdown of water level is not more than 5mm for 12 hours, the digester is water-tight enough. Cover the open area to prevent evaporation.</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Figure 46a. Air-tightness test</span></span></p>

<p>&nbsp;</p>

<ol start="2" style="list-style-type:lower-alpha">
  <li><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Air-Tightness Test.</span></span></li>
</ol>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">1. Drain water until the hydraulic pressure tank is empty.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">2. Set manometer (pressure meter) and valve.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">3. Close valve and pure water until pressure inside the digester becomes the desired value of 80-120 cm water.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. If the pressure drawdown is not more than 3% of original value, the digester passes the air-tightness test.</span></span></p>

<p style="margin-left:72px"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. The pressure inside the digester can be affected by many atmospheric pressure, and sunlight. If there is no tendency of pressure drawdown, then the digester passed even the digester passed even if some fluctuation is observed.</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Figure 46b. Manometer</span></span></p>

<p>&nbsp;</p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
       <div class="site-section" id="section-chviii_1">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              <h2 class="text-primary">CHAPTER VIII</h2>
            </div>
<div class="text-left pb-1 border-primary mb-12">
  <h2 class="text-primary">OPERATION AND MAINTENANCE OF BIOGAS DIGESTER</h2>
</div>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Like any other equipment, the biogas should properly maintained to achieve efficient operation. A properly built structure and sufficiently available materials may not produce the desired results due to faulty operation and/or maintenance.</span></span></p>


<h3 class="text-primary">Initial Loading</h3>

<ol>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Starter/Seeding. The initial raw materials known as &ldquo;starter&rdquo; should contain slurry with high bacteria population. About 5-10% of the total slurry volume should be added when the digester is about 25% full.</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Cattle dung is a good starter since cattle have methane producing bacteria in their stomachs. Starter can also be made from any manure by adding to its 5-10% &ldquo;old&rdquo; slurry obtained from another digester or when cleaning the digester. Starter can also be prepared by storing manure in a container.</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Filling the digester. The digester should be filled as quickly as possible. The following steps should be kept into consideration: </span></span></li>
</ol>

<p style="margin-left:63px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">(a) Be sure to open all valves to relieve any pressure build-up in the digester dome before pitting any slurry into the digester. It is advisable not to connect the piping system to the digester when loading. </span></span></p>

<p style="margin-left:63px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">(b) Mix manure and water thoroughly until there are no more &ldquo;lumps&rdquo;. This will increase gas production since the bacteria will have more contact surface with the manure.</span></span></p>

<p style="margin-left:63px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">c) Fill the digester with slurry up to beam level. This is the same level as the outlet chamber floor.</span></span></p>

<p style="margin-left:63px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">d) Do not load any new slurry to the digester until at least 3 days after burnable gas is produced.</span></span></p>

<p style="margin-left:20px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">4. If the above conditions are not possible, just let the slurry flow into the digester until such time that the digester is filled up to the level of the outlet chamber floor. The necessary bacteria will grow biologically and biogas can be produced in 30 to 40 days.</span></span></p>

<p style="margin-left:20px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">5. The following materials should not enter the digester:</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">a) Earth or sand;</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">b) Straw, grasses, leaves, etc. &ndash; remove all floating materials at the mixing pit before allowing them to enter into the digester. These materials float on the slurry surface and may cause problem.</span></span></p>

<p style="margin-left:48px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">c) Oil, soap, detergent, disinfectant, etc. &ndash; these materials will disrupt bacteria activity and may even kill bacteria.</span></span></p>

<p style="text-align:justify">&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>

      <div class="site-section" id="section-chviii_2">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>
<h3 class="text-primary">Regular Loading</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; About 1 liter water is added to every kilogram of manure. The slurry should be mixed thoroughly until the right consistency is obtained. However, in actual practice, there is no fixed water-manure proportion since this will depend on the type of manure being used and its moisture content. The technique will be developed through experience.</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The loading of materials should be done regularly. Ideally it should be daily. The amount of slurry should be in accordance with the requirement of the particular digester volume and its retention time. Less slurry being loaded would result to lower gas production whereas excessive slurry would result in raw materials wastage since slurry will not be fully digested.</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The loading of new slurry materials displaces an equal volume of effluent to the outlet chamber. This effluent must be removed otherwise the digester would be overloaded. The correct digester level is that at zero gas pressure, the slurry should be at the level of the outlet chamber floor.</span></span></p>

<p style="text-align:justify">&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chviii_3">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>


<h3 class="text-primary">Stirring/Agitation of Slurry</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>Mechanically disturbing the slurry inside the digester with the use of stirrer performs two vital functions: first, to stimulate bacterial activity and second, to break the &ldquo;scum&rdquo; layer which forms a mat of vegetable/organic matter at the slurry surface and thus, restricts the gas flow. If left undisturbed, the scum would get thick and harden, which may require opening the digester to remove it. Stirring should be done daily &ndash; about 3 to 5 minutes in the afternoon. The stirring should be 360&deg; in one direction and 360&deg; in another direction. For the DSAC-Model, there is no need for stirring since the system operates on displacement principle (see Principle of Operation on page 58).</span></span></p>

<p style="text-align:justify">&nbsp;</p>
          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chviii_4">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>



<h3 class="text-primary">Condensate Removal</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; The condensate or water that settles in the piping system must be removed monthly since condensate accumulation may obstruct gas flow. The condensate removal may be done by lifting the gas pipe so that the water in the pipe will be drained back into the digester. Another method is to provide the gas pipe system with condensate trap for easy removal of water.</span></span></p>

<p style="text-align:justify">&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chviii_5">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>


<h3 class="text-primary">Servicing Scum Problem</h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; Scum very seldoms development in a DSAC-Model biogas plant. In other designs where this is a perennial problem, the following are the steps that should be undertaken:</span></span></p>

<ol>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Release all gas in the digester. Manometer reading should be zero.</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Disconnect the gas piping closest to the digester.</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Remove manhole (if present in the structure).</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Inspect the scum layer and check its thickness.</span></span></li>
  <li style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Remove scum manually with buckets through the manhole.</span></span></li>
</ol>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; CAUTION: In removing the scum, be cautious about the presence of the nearby. Smoking near the digester is dangerous. The digester may still contain gas and may explode. </span></span></p>

<p style="text-align:justify">&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>
    <div class="site-section" id="section-chviii_6">
      <div class="container">
        <div class="row mb-5">
          
          <p>&nbsp;</p>

          <div class="col-md-12 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-12">
              
            </div>


<h3 class="text-primary">Periodic Maintenance of the Digester </h3>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; Unlike the DSAC-Model biogas digester, some digester models need periodic maintenance. In these case, the digester may need to be emptied at least once a year to remove the settled sludge and other inorganic solids, like sand and stones that accumulate at the digester bottom. The materials are removed manually through the manhole with the use of buckets or pumps. This is also an occasion to check for possible leaks or structural damages.</span></span></p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp;&nbsp; Take precaution when entering the digester. There are poisonous gases inside. Also, complete emptying of the digester should be done if the following conditions occur:</span></span></p>

<p style="margin-left:17px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">a) Stirring becomes too difficult due to heavy accumulation of inorganic solids (sands, pebbles, etc.) and/or presence of thick scum.</span></span></p>

<p style="margin-left:17px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">b) Gas production ceases completely. This may be due to the introduction of toxins (detergents or disinfectants) into the slurry.</span></span></p>

<p style="margin-left:17px; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">c) Gas production slows down despite regular daily loading and stirring. There may be leaks in the structure.</span></span></p>

<p>&nbsp;</p>

<p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; Regular cleaning of the inlet tank should also be done, as well as checking for leaks in the pipes and the digester. </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table 9 shows the possible remedies to most common problems encountered by biogas plant users.</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Table 9. Trouble shooting of biogas plant</span></span></p>

<p>&nbsp;</p>

<table align="left" style="border:undefined">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

          </div>
          
        </div>
      </div>
    </div>

    <a onclick="topFunction()" id="myBtn" title="Go to top" href="#section-introduction"><i class="icon-arrow-up"></i></a>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure deserunt ut architecto dolores quo beatae laborum aliquam ipsam rem impedit obcaecati ea consequatur.</p>
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
     $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".anothernav").show();
    } else {
        $(".anothernav").hide();
    }
});

     // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//     document.body.scrollTop = 0; // For Safari
//     document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
// }
   </script>
  </body>
</html>