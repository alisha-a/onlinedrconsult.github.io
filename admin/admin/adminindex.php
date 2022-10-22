
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BMS University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      
     

    </div>
  </header>
  <header id="header" class="fixed-top" style=';;margin-top:3px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background-color:#3575D3'>
      <div class="container">
        <h2>Department of Computer Science</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
  <div style='width:100%;height:40px;background-color:#f5f5f5'>
  <a href="adminlogin.php" style='margin-left:1260px'>&nbsp LOG OUT </a>
  </div>
  <style>
  
   
  
  </style>
        <div>
    <div  style='float:left;width:20%'>
	<table cellspacing=0 cellpadding=10 style='background-color:#f5f5f5'>
	    <tr style='background-color:#efefef'><td width=200px><a href='adminpanel.php'><img src='admin images/home.png' style='width:20px;height:20px'/>&nbsp Home</a></td></td>
		<tr><td width=200px><a href='message.php'><img src='admin images/messages.png' style='width:20px;height:20px'/>&nbsp Messages/Queries</td></td>
		<tr><td width=200px><a href='uploadexam.php'><img src='admin images/examup.png' style='width:20px;height:20px'/>&nbsp Upload Exam forms</td></td>
		<tr><td width=200px><a href='uploadadmit.php'><img src='admin images/admitup.png' style='width:20px;height:25px'/>&nbsp Upload Admit Cards</td></td>
		<tr><td width=200px><a href='regdetails.php'><img src='admin images/regicon.png' style='width:20px;height:20px'/>&nbsp Registration Details</td></td>
		<tr><td width=200px><a href='examformdetails.php'><img src='admin images/uploadexam.png' style='width:20px;height:20px'/>&nbsp Examform Details</td></td>
		<tr><td width=200px><a href='uploadresult.php'><img src='admin images/ress.png' style='width:20px;height:20px'/>&nbsp Upload results</td></td>
		<tr><td width=200px><a href='eval.php'><img src='admin images/eval.png' style='width:20px;height:20px'/>&nbsp Upload Re-eval <span style='margin-left:35px'>  Forms</span></td></td>
		<tr><td width=200px><a href='evalstudent.php'><img src='admin images/eval.jpg' style='width:20px;height:20px'/>&nbsp Eval List</td></td>
		<tr><td width=200px><a href='newnortify.php'><img src='admin images/bell.png' style='width:20px;height:20px'/>&nbsp Notifications</td></td>
		<tr><td width=200px><a href='resultlist.php'><img src='admin images/resultadmin.png' style='width:20px;height:20px'/>&nbsp Results</td></td>
		<tr><td width=200px height=168px></td></td>
		
	</table>
    </div>
	
	 <?php	        
			$connection = mysqli_connect("localhost", "root", "", "examport");  
     $query="select Sno from contact where reply='' order by Sno ";
	 $query_run=mysqli_query($connection,$query);
	 $row=mysqli_num_rows($query_run);
	
     $query="select Sno from admitcards order by Sno";
	 $query_run1=mysqli_query($connection,$query);
	 $row1=mysqli_num_rows($query_run1);	
			
	 $query="select Id from registration order by Id";
	 $query_run2=mysqli_query($connection,$query);
	 $row2=mysqli_num_rows($query_run2);
	 
	 $query="select Id from norifications order by Id";
	 $query_run3=mysqli_query($connection,$query);
	 $row3=mysqli_num_rows($query_run3);
			 ?>
	
	
	<br>
	<div style='float:right; width:80%'>
	   <div style=''>
	        <div style='display:inline-block;background-color:#f56954;width:250px;height:90px'> 
              <?php
			       echo "<h1 style='color:white'>&nbsp $row</h1>";
			     ?>
				 <span style='color:white;font-size:12px'>&nbsp Unread Messages/Queries<span>
			 </div> &nbsp 
		
			 <div style='display:inline-block;;background-color:#00c0ef;width:250px;height:90px'> 
	             <?php
			       echo "<h1 style='color:white'>&nbsp $row1</h1>";
			     ?>
				 <span style='color:white;font-size:12px'>&nbsp Currently present Admit Cards on website<span>
			 </div> &nbsp 
			 <div style='display:inline-block;;background-color:#008080;width:250px;height:90px'> 
	           <?php
			       echo "<h1 style='color:white'>&nbsp $row2</h1>";
			     ?>
				 <span style='color:white;font-size:12px'>&nbsp Total No. of registered students<span>
			 </div>&nbsp
			 <div style='display:inline-block;;background-color:#808000;width:250px;height:90px'> 
	              <?php
			       echo "<h1 style='color:white'>&nbsp $row3</h1>";
			     ?>
				 <span style='color:white;font-size:12px'>&nbsp Nortifications present on Website<span>
			 </div> 
	    </div>
		<br>
         <div style='background-color:#efefef; width:1030px;height:auto'>
		   <br>  
		   <a href="message.php"><div style='display:inline-block;margin-left:25px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/messages.png" style='margin-left:80px;margin-top:20px;width:40px; height:40px'>
			     <br>
				 <span style='margin-left:32px;'>Messages/Queries</span>
			</div></a>
			<a href="uploadexam.php">
			<div style='display:inline-block;margin-left:25px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/examup.png" style='margin-left:80px;margin-top:20px;width:40px; height:40px'>
			     <br>
				 <span style='margin-left:32px;'>Upload Exam forms</span>
			</div></a>
			<a href="uploadadmit.php">	
			<div style='display:inline-block;margin-left:25px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/admitup.png" style='margin-left:80px;margin-top:10px;width:40px; height:50px'>
			     <br>
				 <span style='margin-left:32px;'>Upload Admit Cards</span>
			</div>
			</a>
			<a href="regdetails.php">
			<div style='display:inline-block;margin-left:25px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/regicon.png" style='margin-left:80px;margin-top:10px;width:52px; height:50px'>
			     <br>
				 <span style='margin-left:32px;'>Registration Details</span>
			</div>
			</a>
			<a href="examformdetails.php">
			<div style='display:inline-block;margin-left:25px;margin-top:20px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/uploadexam.png" style='margin-left:80px;margin-top:10px;width:52px; height:50px'>
			     <br>
				 <span style='margin-left:32px;'>Examination Details</span>
			</div>
			</a>
			<a href="uploadresult.php">
			<div style='display:inline-block;margin-left:25px;margin-top:20px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/ress.png" style='margin-left:80px;margin-top:10px;width:48px; height:50px'>
			     <br>
				 <span style='margin-left:32px;margin-left:55px'>Upload results</span>
			</div>
			</a>
			
			<a href="eval.php">
			<div style='display:inline-block;margin-left:25px;margin-top:20px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/eval.png" style='margin-left:80px;margin-top:10px;width:48px; height:50px'>
			     <br>
				 <span style='margin-left:32px;margin-left:25px'>Upload re-eval forms</span>
			</div>
			</a>
			
			<a href="newnortify.php">
			<div style='display:inline-block;margin-left:25px;margin-top:20px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/bell.png" style='margin-left:80px;margin-top:10px;width:52px; height:50px'>
			     <br>
				 <span style='margin-left:32px;margin-left:55px'>Nortifications</span>
			</div>
			</a>
			<a href="resultlist.php">
			<div style='display:inline-block;margin-left:25px;margin-top:20px;color:green;;background-color:#f5f5f5;width:200px;height:115px'>
			      <img src="admin images/resultadmin.png" style='margin-left:80px;margin-top:10px;width:52px; height:50px'>
			     <br>
				 <span style='margin-left:63px;'>View Result</span>
			</div>
			</a>
			<br><br>
			
			
			
         </div>
</div>


      
    <!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
   
     
  </script>
  
</body>

</html>
