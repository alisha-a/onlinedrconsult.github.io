<form action='login.php' method='POST'>
    <?php
     session_start();
      $con=mysqli_connect("localhost","root","","drconsult");

      $nm=$_POST["nm"];
      $mail=$_POST["mail"];
      $phone=$_POST["num"];
      $pass=$_POST["pass"];
      $cpass=$_POST["cpass"];

      if($cpass!=$pass)
			{
              $_SESSION["notvalidnm"]=$nm;
              $_SESSION["notvalidmail"]=$mail;
              $_SESSION["notvalidp"]=$phone;
              $_SESSION["notvalidpass"]=$pass;
			  $_SESSION["err"]=" Confirm Password does not match with password!";
              header("location:register.php");
			
			}
     else{
        $r=mysqli_query($con,"insert into registrationdetails(Name,Email,Pno,Pass) values('$nm','$mail','$phone','$pass') ");
        if($r)
        {
           session_destroy();
           header("location:login.php");
        }
       
     }
     


    ?>

</form>
