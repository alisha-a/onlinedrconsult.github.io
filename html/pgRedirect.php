<?php
session_start();
?>

<div style='margin-left:40%';>
<form method="POST" action="passaddress.php">
    <br><br><br><br><br><br>
    <?php
     
     $_SESSION["inm"]=$_POST['inm'];
     $_SESSION["iquan"]=$_POST['iquan'];
     $_SESSION["iprice"]=$_POST['iprice'];

    /* $iquan=$_POST['iquan'];
     $iprice=$_POST['iprice'];
     foreach($inm as $inm)
     {
         echo $inm;
     }
     foreach($iquan as $iquan)
     {
         echo $iquan;
     }
     foreach($iprice as $iprice)
     {
         echo $iprice;
     }*/



    ?>
    <h1>Enter Shipping Details</h1>
    <br>
    <Label>Enter Address: &nbsp &nbsp </Label>
    <input type='text' value=" " name="aad" required/><br><br><br>
    <Label>House no/flat no: </Label>
    <input type='text' value=" " name="aa"  required/>
    
    <input type="textbox" name="amt" value="<?php echo $_SESSION["total"] ;?>" id="amt" hidden placeholder="Enter amt"/ ><br/><br/>
    <input type="submit" name="btn" id="btn" value="Proceed towards Payment"  style=""/>
</form>
</div>

