<?php 
$msg="";
require_once('processRegister.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main style=" position: absolute; background-color:orangered;height: 40px;width: 100%;">
        <a href="#" class="navbar-trigger"style=""><span></span></a>
        <span style="color:white"><center>Zalego|Admin Login</center></span>
   </main>
   <center><img src="images/zalego.jfif" alt="zalego" height="100" width="100" class="rounded-circle m-5"></center>
   <span><?php echo $msg ?></span>
    <form action="Register.php" method="POST" class="container-fluid " style="border-style:groove; width:500px ;padding:20px  " >
        <div class="row  ">
                <div class="col-lg-12 pb-3 ">
                <label for="message" class="form-label">Username:</label>
                <input type="text"name="username" class="form-control ">
                </div>
        </div>
        <div class="row ">
                <div class="col-lg-12 pb-3 ">
                <label for="message" class="form-label">Email:</label>
                <input type="text"name="email" class="form-control " >
                </div>
        </div>
        <div class="row ">
                <div class="col-lg-12 pb-3 ">
                <label for="message" class="form-label">Password:</label>
                <input type="password"name="password" class="form-control ">
                </div>
        </div>
        <div class="row ">
                <div class="col-lg-12 pb-3 ">
                <label for="message" class="form-label">Confirm Password:</label>
                <input type="password" name="cpassword"class="form-control ">
                </div>
        </div>
        <button name="signUp" type="submit" style="background-color:purple;color:white"class="btn">Submit</button>
        <p>Have an account ? Sign in <a style="color:purple"href="Login.php">Here</a></p>
    </form>
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>