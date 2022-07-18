<?php
require_once('logics/dbconnection.php');
if(isset($_POST['buttonUpdate']))
{
    // Fetching form data
    
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $Phonenumber=$_POST['phonenumber'];
    $Message=$_POST['message'];
    // perfom the query
    $updateRecords=mysqli_query($connection, 
    "UPDATE contactus SET firstname='$Firstname',lastname='$Lastname', email='$email',phonenumber='$Phonenumber',message='$Message'  
    WHERE no='".$_GET['id']."' ");

    if($updateRecords)
    {
        $msg= 
        '<span class= "alert alert-success">'."Records Updated Succesfully".'</span>';
        
    }
    else
    {
        $msg="Error occured";
    }
}

?>