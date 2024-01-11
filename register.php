<?php
    include 'navbar.php';
?>
<?php
$host="localhost";
$user="root";
$pass="";
$db="hospital";
$con=mysqli_connect($host,$user,$pass,$db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>register page</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    

    
    <div class="container">
        <div class="form-box">
            <form action="login.php" name="Formfill" onsubmit="return data()">
                <h2>Register</h2>
                <div class="input-box">
                <i class='bx bxs-user' ></i>
                    <input type="text" name="Username" placeholder="Usernanme" id="n1">
                </div>
                
                <div class="input-box">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="Email" placeholder="Email" id="n2">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt' ></i>
                    <input type="password" name="Password" placeholder="Password" id="n3">
                </div>

                <div class="input-box">
                    <i class='bx bxs-lock-alt' ></i>
                    <input type="password" name="cPassword" placeholder="Confirm Password" id="n4">
                </div>
                <div class="button">
                    <input type="submit" class="btn" value="Register">
                </div>
                <div class="group">


                </div>

            </form>     
                 
        </div>
    </div>
    <script src="register.js"></script>



</body>
</html>
