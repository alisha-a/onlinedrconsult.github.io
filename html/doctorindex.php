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

       

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="doctorindex.php">My profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">New Patients</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Visited Patients</a>
            </li>
            

            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:red";>Join Calls</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="adminlogin.php" style="color:black;">
                              <?php
                              
                              $con=mysqli_connect("localhost","root","","drconsult");
                              $r=mysqli_query($con,"select * from urll");
                              if($row=mysqli_fetch_array($r))
                              {
                                echo "<a href=$row[1]> Call Patient</a>";
                              }

                              
                              ?>
                              </a>
                                    
                                    
                                </div>

            
            <li class="nav-item">
              <?php
              if(isset($_SESSION['dlog']))
              {
                $logornot=$_SESSION["dlog"];
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
  
 <?php
      $iidd=$_SESSION["ddii"];
      $con=mysqli_connect("localhost","root","","drconsult");
      $r=mysqli_query($con,"select * from dregister where regid='$iidd' ");
 ?>

  

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
        <div class="col-lg-6 wow" data-wow-delay="400ms">
             <a href="">
               <div class="img-place custom-img-1" style="border:1px solid black;height:15.625em;width:15.625em;border-radius:50%">
                    <?php
                        
                         if($row=mysqli_fetch_array($r))
                         {
                          echo "<img src='../docimageregistered/$row[7]'>";

                         }
                     ?>
               </div>
               </a>
          </div>
          <div class="col-lg-6 py-3 wow ">
            <h1>My Profile</h1>
            <?php
                 echo "$row[1]<br>";
                 echo "ID: $row[2]<br>";
                 echo "Contact no. : $row[5]<br><br>";
                 echo "<B>$row[4]</B><br>";
            ?>
          </div>
          
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  

  <div class="page-section bg-light">
    <div class="container">
      <div class=" wow ">
      
      </div>
      <?php
              if($row[4]=="Orthopedic")
              {
                echo "Orthopedics is the medical field that focuses on diseases and conditions that affect your musculoskeletal system. This includes your:

                <br>bones
                <br>muscles
                <br>ligaments and tendons
                <br>joints
                <br>nerves<br>
                People often visit an orthopedic doctor when they’re injured or when they have a chronic condition, such as arthritis or lower back pain.
                
                <B><H4>What do orthopedic doctors do?</H4></B>
  
                Orthopedic doctors, often referred to as orthopedic surgeons, focus on helping you with musculoskeletal issues. Their duties include:
                <br>
                diagnosing and treating conditions that affect your musculoskeletal system
                assisting with rehabilitation, which helps you regain movement, strength, range of motion, and flexibility following an injury or surgery
                forming strategies to prevent injury or to keep chronic conditions, such as arthritis, from worsening
                While orthopedic doctors know about all parts of the musculoskeletal system, some choose to specialize further. Some subspecialty areas of orthopedics include:
                <br><br>
                spine<br>
                hip and knee<br>";
              }
          ?>
    </div>
  </div> <!-- .page-section -->
                
  
  

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