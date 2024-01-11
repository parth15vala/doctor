<?php 
include("navbar.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>DashBoard</title>

</head>
<body>
<form action="docdet.php" method="POST">
    <div style="height: 5in ; width:auto;">
    <img src="doctor.jpg" style="height: 7in;width:19in; ">
   
    </div>

<div class="card-deck" style="height: 3in;width:auto;background-color:;">
  <div class="card card-1">
    
     <button style="height:100%;width:100%;border-radius:0.10in;background-color:lightblue;font-size:xx-large;color:black;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);" name="button1">Neurology</button>

  </div>
  <div class="card card-2">

    <button style="height:100%;width:100%;border-radius:0.10in;background-color:lightblue;font-size:xx-large;black:white;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);" name="button2">Pathology</button>
    
  </div>
  <div class="card card-3">

    <button style="height:100%;width:100%;border-radius:0.10in;background-color:lightblue;font-size:xx-large;color:black;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);" name="button3">Urology</button>
    
  </div>
  <div class="card card-4">
  <button style="height:100%;width:100%;border-radius:0.10in;background-color:lightblue;font-size:xx-large;color:black;box-shadow: -30px 30px 20px rgba(0,0,0,0.3);" name="button4">Pediatrics</button>
  </div>
</div>
</div>





</form>
</body>
</html>