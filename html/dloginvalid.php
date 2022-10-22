<?php
    session_start();
      $con=mysqli_connect("localhost","root","","drconsult");

      $dmn=$_POST["docId"];
      $dpp=$_POST["docPwd"];

      $r=mysqli_query($con,"select * from dregister");
      while($row=mysqli_fetch_array($r))
      {
        if($row[2]==$dmn and $row[6]==$dpp)
        {
                $_SESSION["dlog"]="yes";
                $_SESSION["ddii"]=$dmn;
                header("location:doctorindex.php");
        }
        else
        {
            echo "not";
        }
      }
?>