<?php
    session_start();
      $con=mysqli_connect("localhost","root","","drconsult");

      $nn=$_POST["nn"];
      $aa=$_POST["aa"];
      $gg=$_POST["gg"];
      $pp=$_POST["pp"];
      $aa1=$_POST["aa1"];
      $dd1=$_POST["dd1"];
      $tt1=$_POST["tt1"];
      $test=$_SESSION["disease"];
      $price=$_SESSION["price"];

      echo "
      <div class='page-section bg-light'>
      <div class='container'>
        <h3 class='wow fadeInUp' style='font-family: Trebuchet MS, sans-serif;'>Top booked diagnostic tests</h3>
        <div class='row mt-5'>
              <form method='POST' action=''>
                 <table>
                   <tr>
                     <td colspan=2>One-Health</td>
  
            
                 </table>
             </form>
              </div>
              </div>
              </div>
  
      ";