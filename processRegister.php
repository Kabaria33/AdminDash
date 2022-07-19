<?php 
    require_once('connection.php');
    if(isset($_POST["signUp"]))
    {
      $username=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password']; 
      $cpass=$_POST['cpassword']; 
    //   to encrypt the password
      $passHash=md5($password); 
    //   checking if username exists
        $sqlUsername=mysqli_query($connection,"SELECT * FROM account WHERE username='$username'");
        $checking=mysqli_num_rows($sqlUsername);
        // check for email 
        $sqlEmail=mysqli_query($connection,"SELECT * FROM account WHERE email='$email'");
        $checkingEmail=mysqli_num_rows($sqlEmail);
        if($checking != 0){
            $msg= "Username already exists";
        }
        elseif($checkingEmail != 0){
            $msg= "Email already in use";
        }
        // password match
        elseif($password != $cpass)
        {
            $msg="Passwords do not match";
        }
        else
        {
            $sql=mysqli_query($connection,"INSERT INTO account(username,email,password)VALUES('$username','$email','$passHash')");
            // submitting data
            if($sql)
            {
                $msg="Data submitted successfully";
            }
            else
            {
                $msg="error";
            }
        }
    }


?>