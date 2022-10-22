<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","drconsult");
	
	$r=mysqli_query($con,"delete from medicines where SNo='$id'");
	if($r)
	  header("location:deletemed.php");
?>