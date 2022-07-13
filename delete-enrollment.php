<?php 
require_once('logics/dbconnection.php');
$sqlDelete= mysqli_query($connection, "DELETE FROM enrollment WHERE no='".$_GET['id']."'");
if($sqlDelete)
{
    echo "User deleted successfully";
    header('location:students.php');
}
else
{
    echo "Error occured . Please try again";
}

?>