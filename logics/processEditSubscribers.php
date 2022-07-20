<?php
require_once('logics/dbconnection.php');
if(isset($_POST['buttonSub']))
{
    // Fetching form data
    
    
    $email=$_POST['email'];
   
    // perfom the query
    $updateRecords=mysqli_query($connection, 
    "UPDATE subscribers SET  email='$email'WHERE no='".$_GET['id']."' ");

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