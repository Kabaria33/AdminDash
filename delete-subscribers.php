<?php 
require_once('logics/dbconnection.php');
$sqlDelete= mysqli_query($connection, "DELETE FROM subscribers WHERE no='".$_GET['id']."'");
if($sqlDelete)
{
    echo "User deleted successfully";
    header('location:subscribers.php');
}
else
{
    echo "Error occured . Please try again";
}

?>