<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","drconsult");
	
	$r=mysqli_query($con,"delete from dregister where Id='$id'");
	if($r)
	  header("location:viewdocadmin.php");
?>