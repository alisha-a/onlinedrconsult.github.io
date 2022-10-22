<?php
    session_start();
      $con=mysqli_connect("localhost","root","","drconsult");
      
      $un=$_POST["username"];
      
    
      $pp=$_POST["pass"];

     
        if($un=="admin" and $pp="12345")
        {
          
               
                header("location:index.php");
        }
            else
            {
              header("location:adminlogin/index.php");
            }
        
        
      

?>