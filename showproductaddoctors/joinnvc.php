<?php
session_start();

$u=$_SESSION['username'];
$doc=$_SESSION['docname'];
                         $con=mysqli_connect("localhost","root","","drconsult");
                         $s=mysqli_query($con,"select * from bookingdata where p_name='$u' and status='success'");
                         if(($row=mysqli_fetch_array($s)))
                         {
                             $_SESSION["joinn"]="$u";
                             header("location:../html/video.php");
                             
                         }

?>