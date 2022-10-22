<form action='login.php' method='POST'>
    <?php
      $con=mysqli_connect("localhost","root","","drconsult");

      $mednm=$_POST["m1"];
      $medcom=$_POST["m2"];
      $medprice=$_POST["m3"];
      $meddesc=$_POST["m4"];
      move_uploaded_file($_FILES["myfile"]["tmp_name"],"../medicineimages/".$_FILES["myfile"]["name"]);
      $pic=$_FILES["myfile"]["name"];


      $r=mysqli_query($con,"insert into medicines(MedName,manufacturer,Price,Description,photo) values('$mednm','$medcom','$medprice','$meddesc','$pic') ");
      if($r)
      header("location:addmed.php");

    ?>

</form>




