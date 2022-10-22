<?php
session_start();
$id=$_REQUEST["a"];

$_SESSION["join"]=$id;
$nnm=$_SESSION["log"];
$usernm=$_SESSION["username"];

$con=mysqli_connect("localhost","root","","drconsult");
$s=mysqli_query($con,"select * from dregister where Id=$id");


$rr=mysqli_query($con,"insert into bookingdata(p_name,d_name,status) values('$usernm','$s','success') ");
if($rr)
{
    
    header("location:joinnvc.php");
   
}



?>