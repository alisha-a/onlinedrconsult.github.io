<?php
  session_start();
  $sno=$_REQUEST["a"];
     $fg=$_POST['med1'];
     $con=mysqli_connect("localhost","root","","drconsult");
     $r=mysqli_query($con,"select * from medicines where SNo=$fg");
     if($row=mysqli_fetch_array($r))
     {
         $mmmmm1=$row[1];
         $mmmmm2=$row[3];
         $mmmmm3=$row[2];
     }

     $rr=mysqli_query($con,"insert into cart(name,price,manufacturer) values('$mmmmm1','$mmmmm3','$mmmmm2') ");
     if($rr)
     {
        
        $_SESSION["sno"]=$sno;
        header("location:buymedi.php"); 
     }
?>