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
            <li class="nav-item ">
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
           
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

<section class="" style="background-color: #a8e4a0; ">
  <div class="container py-5 h-100">
 
    <div class="row d-flex justify-content-center align-items-center h-100">
    
      <div class="col col-xl-10">
          <div class="card align-items-center " style="background-color: #a8e4a0;border:none">
          <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <a href="login.php" style="color: black;font-size:16px;font-weight:bold">Patient</a>
             &nbsp &nbsp 
            <a href="doctorlogin.php" style="color:black;font-size:16px">Doctor</a>
    </div>
    
  </div>
</nav>
           <!-- -->
          </div>
        <div class="card" style="border-radius: 1rem; height:auto">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../assets/img/stethoscope-in-heart-shape-ktsdesign.jpg"
                alt='login form' class='img-fluid' style='border-radius: 1rem 0 0 1rem; margin-top:64px;margin-left:30px' />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="moveregistration.php" method="POST">

<div class="d-flex align-items-center mb-3 pb-1">
  <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
  <span class="h1 fw-bold mb-0">Register</span>
</div>

<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

<div class="form-outline mb-4">
  <input type="text" id="form2Example17" class="form-control form-control-lg" name="nm" value="<?php if(isset($_SESSION["err"])) echo $_SESSION["notvalidnm"] ?>" required/>
  <label class="form-label" for="form2Example17" style="font-size:13px">Name</label>
</div>

<div class="form-outline mb-4">
  <input type="email" id="form2Example17" class="form-control form-control-lg" name="mail" value="<?php if(isset($_SESSION["err"])) echo $_SESSION["notvalidmail"] ?>" required />
  <label class="form-label" for="form2Example17" style="font-size:13px">Email address/Mobile number</label>
</div>

<div class="form-outline mb-4">
  <input type="number" id="form2Example27" class="form-control form-control-lg" name="num" value="<?php if(isset($_SESSION["err"])) echo $_SESSION["notvalidp"] ?>" required />
  <label class="form-label" for="form2Example27" style="font-size:13px">Phone number</label>
</div>

<div class="form-outline mb-4">
  <input type="password" id="form2Example27" class="form-control form-control-lg" name="pass" value="<?php if(isset($_SESSION["err"])) echo $_SESSION["notvalidpass"] ?>" required/>
  <label class="form-label" for="form2Example27" style="font-size:13px">Password</label>
</div>

<div class="form-outline mb-4">
  <input type="password" id="form2Example27" class="form-control form-control-lg" name="cpass" required />
  <label class="form-label" for="form2Example27" style="font-size:13px">Confirm Password</label>
  <?php
  $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0'; 
  if($pageWasRefreshed ) 
  { 
      session_destroy();
   }
  if(isset($_SESSION["err"]))
			echo   "<span style='color:red;font-weight:bold; font-size:0.8em'>",$_SESSION["err"],"</span>";
   ?>
</div>

<div class="pt-1 mb-4">
   <input type="Submit" value="Register" class="btn btn-dark btn-lg btn-block">

</div>

<a class="small text-muted" href="#!">Forgot password?</a>
<p class="mb-5 pb-lg-2" style="color: #393f81;">Login ? <a href="login.php"
    style="color: #393f81;">Login here</a></p>
<a href="#!" class="small text-muted">Terms of use.</a>
<a href="#!" class="small text-muted">Privacy policy</a>
</form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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


