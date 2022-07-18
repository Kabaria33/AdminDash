<?php 
require_once('logics/dbconnection.php');
$sqlDelete= mysqli_query($connection, "DELETE FROM contactus WHERE no='".$_GET['id']."'");
if($sqlDelete)
{
    echo "User deleted successfully";
    header('location:contactus.php');
}
else
{
    echo "Error occured . Please try again";
}

?>