<?php
require_once( 'logics/dbconnection.php');
if(isset($_POST['buttonUpdate']))
{
    // Fetching form data
    
    $Fullname=$_POST['fullname'];
    $Phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $course=$_POST['course'];
    // perfom the query
    $updateRecords=mysqli_query($connection, 
    "UPDATE enrollment SET fullname='$Fullname',phonenumber='$Phonenumber', email='$email',gender='$gender',course='$course'  
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