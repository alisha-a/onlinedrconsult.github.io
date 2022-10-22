<?php
  session_start();
  
      $dt=$_POST["dt"];
      $cm=$_POST["cm"];
      $add=$_POST["add"];
      $num=$_POST["num"];
      $total=$_SESSION["total"];


     $con=mysqli_connect("localhost","root","","drconsult");

     $rr=mysqli_query($con,"insert into successmedi(date,oid,total) values('$dt','$cm','$total') ");
     if($rr)
     {
        
        unset($_SESSION["shopping_cart"]);
        header("location:buymedi.php"); 
        
     }
?>