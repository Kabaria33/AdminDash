<?php 
$server="localhost";
$username="root";
$password="";
$database="zalego";
$connect=mysqli_connect($server,$username,$password,$database);
$sql=mysqli_query($connect,"SELECT * FROM enrollment");
while ($fetchRecords= mysqli_fetch_array($sql)) 
{
    echo $fetchRecords['fullname']." ".$fetchRecords['phonenumber']." ".$fetchRecords['gender']." ".$fetchRecords['course']." ".$fetchRecords['email']."<br>";
}
?>
