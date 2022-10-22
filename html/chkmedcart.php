<?php
  session_start();

  if(isset($_SESSION['log']))
              {
                $logornot=$_SESSION["log"];
                if($logornot=="yes")
                {
                    header("location:viewcart.php");
                }
              } 
                  else 
                  {
                    header("location:login.php");
                  }
               ?>

?>