<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
    <form class="container"  style="border-style:groove; width:500px;padding:20px" action="">
        <div class="row ">
            <div class="col-lg-12 pb-3 ">
            <label for="message" class="form-label">Username:</label>
            <input type="text"name="Username" class="form-control ">
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 pb-3 ">
            <label for="message" class="form-label">Password:</label>
            <input type="text"name="password" class="form-control ">
            </div>
        </div>
        <button type="submit" style="background-color:purple;color:white"class="btn">Submit</button>
        <p>Have  no account ? Sign up <a style="color:purple"href="Register.php">Here</a></p>
    </form>
<script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>