<?php
  session_start();
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  

  <link rel="stylesheet" href="blog/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="blog/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="blog/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="blog/css/jquery.mCustomScrollbar.min.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Search doctors.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Video Consulation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="medicine.php">Medicines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="labtest.php">Lab Tests</a>
            </li>
            <li class="nav-item">
              <?php
              if(isset($_SESSION['log']))
              {
                $logornot=$_SESSION["log"];
                if($logornot=="yes")
                {
                  echo "<a class='btn btn-primary ml-lg-3' href='logout.php'>Logout</a>";
                }
              } 
                  else 
                  {
                    echo  "<a class='btn btn-primary ml-lg-3' href='login.php'>Login / Register</a>";
                  }
               ?>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  
  <br><br>

  <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-7">
                  <div id="slider_main" class="carousel slide" data-ride="carousel">
                     <!-- The slideshow -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="../assets/img/blog11.png" alt="#" />
                        </div>
                        <div class="carousel-item">
                           <img src="../assets/img/health1.jpg" style="width:40em"alt="#" />
                        </div>
                     </div>
                     <!-- Left and right controls -->
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full slider_cont_section">
                     <h3>Healthy Eating</h3>
                     <h4>-a lifestyle</h4>
                     <p>A healthy diet is essential for good health and nutrition. It protects you against many chronic noncommunicable diseases, such as heart disease, diabetes and cancer. Eating a variety of foods and consuming less salt, sugars and saturated and industrially-produced trans-fats, are essential for healthy diet.</p>
                     <div class="button_section">
                        <a href="about.html">Read More</a>
                        <!-- <a href="contact.html">Contact Us</a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end revolution slider -->
      <!-- section --> 
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                    <br><br>
                     <!-- <h3>About <span class="orange_color">Us</span></h3> -->
                  </div>
               </div>
            </div>
            <div class="row" style="height:19em">
               <div class="col-md-6">
                  <img src="../assets/img/exercise.jpg" alt="#" style="height:30%" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h3>Exercise and body</h3>
                     <p>Exercise strengthens your heart and improves your circulation. The increased blood flow raises the oxygen levels in your body. This helps lower your risk of heart diseases such as high cholesterol, coronary artery disease, and heart attack. Regular exercise can also lower your blood pressure and triglyceride levels.</p>

                     <div class="button_section">
                        <a href="about.html">Read More</a>
                        <!-- <a href="contact.html">Contact Us</a> -->
                     </div>


                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-6">
                  <img src="../assets/img/sleep.jpg" alt="#" style="height:90%"/>
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>Sleep and stress</h4>
                     <p>Stress can adversely affect sleep quality and duration, while insufficient sleep can increase stress levels. Both stress and a lack of sleep can lead to lasting physical and mental health problems. It is crucial that people who are having issues with stress or lack of sleep do not try to tackle these problems alone.</p>

                     <div class="button_section">
                        <a href="about.html">Read More</a>
                        
                        <!-- <a href="contact.html">Contact Us</a> -->
                     </div>

                   </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  
               </div>
            </div>
         </div>
      </div>
   
  
      <br><br><br>
  

  

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>