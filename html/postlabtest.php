<?php
    session_start();
      $con=mysqli_connect("localhost","root","","drconsult");

      $nn=$_POST["nn"];
      $aa=$_POST["aa"];
      $gg=$_POST["gg"];
      $pp=$_POST["pp"];
      $aa1=$_POST["aa1"];
      $dd1=$_POST["dd1"];
      $tt1=$_POST["tt1"];
      $test=$_SESSION["disease"];
      $price=$_SESSION["price"];
      
      $r=mysqli_query($con,"insert into tests(name,age,gender,phone,address,test_name,price,book_date,time) values('$nn','$aa','$gg','$pp','$aa1','$test','$price','$dd1','$tt1') ");
      if($r)
      {
        unset($_SESSION["disease"]);
        unset($_SESSION["price"]);
         header("location:filllabtest.php");
      }
     
?>