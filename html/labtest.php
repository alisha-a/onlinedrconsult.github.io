
<?php
   session_start();
   
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'http://ip-api.com/json');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);
if($result->status=='success')
 {  $citydisplay = $result->city;
    $regiondisplay=$result->regionName;
  
 }
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
             <?php echo $citydisplay; ?>
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
              <a class="nav-link" href="../showproductaddoctors/showdoctors.php">Doctors</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="medicine.php">Medicines</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="labtest.php">Lab Tests</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="login.php">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/labtest.jpg); height:20%">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
          <br>
        <span class="subhead">Let's make it easy</span><br>
        <span class="display-4" style="height:1em;">Get your lab test today!</span>
        <br>
        <br>
        <a href="#" class="btn "></a>
      </div>
    </div>
  </div>
  
  <div class="page-section bg-light">
    <div class="container">
      <h3 class="wow fadeInUp" style="font-family: 'Trebuchet MS', sans-serif;">Top booked diagnostic tests</h3>
      <div class="row mt-5">
        <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header" style="background-color:white;">
            <a href="" class="post-thumb">
                <form method="POST" action="filllabtest.php">
                <span style="font-weight:bold;color:black;font-size: 1em;"><bold>Thyroid</bold> </span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp Known as Thyroid profile Total Blood test</span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp E-Reports on next day</span>
                <br>
                <span style="font-weight:bold;color:black;font-size: 1em;" >&nbsp &nbsp Rs 427</span>
                <br>
                <input type="hidden" name="d1" value="Thyroid">
                <input type="hidden" name="p1" value="427">
                <input type="submit" style="width:100%;border:1px solid #F0F0F0;color:blue;font-weight:bold;background-color:white" value="ADD">
                </form>
              </a>
              
            </div>
            </div>
            </div>
           

            <div class="col-lg-3 py-2 wow zoomIn" >
            <div class="card-blog">
            <div class="header" style="background-color:white;">
                 
              <a href="" class="post-thumb">
                <form method="POST" action="filllabtest.php">
                <span style="font-weight:bold;color:black;font-size: 1em;"><bold>Lipid Profile</bold> </span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp Known as Lipid profile Total Blood test</span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp E-Reports on next day</span>
                <br>
                <span style="font-weight:bold;color:black;font-size: 1em;" >&nbsp &nbsp Rs 329</span>
                <br>
                <input type="hidden" name="d1" value="Lipid">
                <input type="hidden" name="p1" value="329">
                <input type="submit" style="width:100%;border:1px solid #F0F0F0;color:blue;font-weight:bold;background-color:white" value="ADD">
                </form>
              </a>
            </div>
            </div>
            </div>

            <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header" style="background-color:white;">
            <a href="" class="post-thumb">
                <form method="POST" action="filllabtest.php">
                <span style="font-weight:bold;color:black;font-size: 1em;"><bold>Pregnancy</bold> </span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp Known as Beta Hcg Total Blood test</span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp E-Reports on next day</span>
                <br>
                <span style="font-weight:bold;color:black;font-size: 1em;" >&nbsp &nbsp Rs 350</span>
                <br>
                <input type="hidden" name="d1" value="Pregnancy">
                <input type="hidden" name="p1" value="350">
                <input type="submit" style="width:100%;border:1px solid #F0F0F0;color:blue;font-weight:bold;background-color:white" value="ADD">
                </form>
              </a>
            </div>
            </div>
            </div>

            <div class="col-lg-3 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header" style="background-color:white;">
            <a href="" class="post-thumb">
                <form method="POST" action="filllabtest.php">
                <span style="font-weight:bold;color:black;font-size: 1em;"><bold>Vitamin B12</bold> </span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp Known as Vitamin B12 Total Blood test</span>
                <br>
                <span style=";color:black;font-size: 0.8em;font-family: Georgia, serif;">&nbsp E-Reports on next day</span>
                <br>
                <span style="font-weight:bold;color:black;font-size: 1em;" >&nbsp &nbsp Rs 425</span>
                <br>
                <input type="hidden" name="d1" value="VitaminB12">
                <input type="hidden" name="p1" value="425">
                <input type="submit" style="width:100%;border:1px solid #F0F0F0;color:blue;font-weight:bold;background-color:white" value="ADD">
                </form>
              </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            


            <div class="page-section bg-light">
    <div class="container">
      <h3 class="wow fadeInUp">Browse test according to disease</h3>
      <div class="row mt-5">
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header" >
              
              <a href="article.php" class="post-thumb">
                <img src="../assets/img/fever.jpg" alt="" >  
              </a> 
            </div>
          </div>
          <span style="font-weight:bold;color:black;font-size: 1em;">Fever</span>
        </div>
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header" >
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/img/diabetes.jpg" alt="" >
              </a>
            </div>
          </div>
          <span style="font-weight:bold;color:black;font-size: 1em;">Diabetes</span>
        </div>
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header">
              <a href="article.php" class="post-thumb">
                <img src="../assets/img/skin.jpg" alt="">
              </a>
            </div>
          </div>
          <span style="font-weight:bold;color:black;font-size: 1em;">Skin disease</span>
        </div>
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header">
              <a href="article.php" class="post-thumb">
                <img src="../assets/img/digestion.jpg" alt="">
              </a>
            </div>
          </div>
          <span style="font-weight:bold;color:black;font-size: 1em;">Digestion problem</span>
        </div>
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header">
              <a href="article.php" class="post-thumb">
                <img src="../assets/img/kidney.jpg" alt="">
              </a>
            </div> 
          </div>
          <span style="font-weight:bold;color:black;font-size: 1em;">Kidney</span>
        </div>
        <div class="col-lg-2 py-2 wow zoomIn text-center">
          <div class="card-blog" style="border: 2px solid red;height:8em;width:8em; border-radius:50%;">
            <div class="header">
              <a href="article.php" class="post-thumb">
                <img src="../assets/img/pain.jpg" alt="">
              </a>
            </div>
            </div>
            <span style="font-weight:bold;color:black;font-size: 1em;">Pain</span>
        </div>
        

       

      </div>
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