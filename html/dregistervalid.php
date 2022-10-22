<?php
session_start();

   
     
      $con=mysqli_connect("localhost","root","","drconsult");

      $nm=$_POST["nm"];
      $reg1=$_POST["reg1"];
      $yr=$_POST["yr"];
      $sp=$_POST["sp"];
      $mail=$_POST["mail"];
      $ph=$_POST["ph"];
      $pwd=$_POST["pwd"];
      $cpwd=$_POST["cpwd"];
      
      move_uploaded_file($_FILES["imgd"]["tmp_name"],"../medicineimages/".$_FILES["imgd"]["name"]);
      $pic=$_FILES["imgd"]["name"];
      

      if($cpwd!=$pwd)
			{
             #  $_SESSION["notvalidnm"]=$nm;
             #  $_SESSION["notvalidmail"]=$mail;
              # $_SESSION["notvalidp"]=$phone;
              # $_SESSION["notvalidpass"]=$pass;
			   $_SESSION["errd"]=" Confirm Password does not match with password!";
              header("location:drregister.php");
			
              
			}
        else 
                
            {
                $r=mysqli_query($con,"select * from validdoctors");
                while($row=mysqli_fetch_array($r))
                {
                    if($row[1]==$nm && $row[2]==$reg1 && $row[3]==$sp && $row[4]==$yr)
                    {
                      $rr=mysqli_query($con,"insert into dregister(Name,regid,regy,Specialization,pno,password,photo) values('$nm','$reg1','$yr','$sp','$ph','$pwd','$pic') ");
                      if($rr)
                      {
                        ?>
                        <script>
                          alert("Registered Successfylly!");
                          </script>
                        <?php
                         header("location:doctorlogin.php");
                      }
                    }
                    
                }
                
             
            }

        
    


    ?>


