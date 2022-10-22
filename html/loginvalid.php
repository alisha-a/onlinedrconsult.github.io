<?php
    session_start();
      $con=mysqli_connect("localhost","root","","drconsult");

      $mn=$_POST["mai"];
      $pp=$_POST["sai"];

      $r=mysqli_query($con,"select * from registrationdetails");
      while($row=mysqli_fetch_array($r))
      {
        if($row[2]==$mn or $row[3]==$mn)
        {
            if($row[4]==$pp)
            { 
                $_SESSION["username"]=$mn;
                $_SESSION["log"]="yes";
                header("location:index.php");
            }
        }
        else
        {
            echo "not";
        }
      }
?>