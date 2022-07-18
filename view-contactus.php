<?php 
require_once('logics/dbconnection.php');
$sqlFetchContact= mysqli_query( $connection, "SELECT * FROM contactus WHERE no=' ".$_GET['id']."'");
while($fetchEnrolled= mysqli_fetch_array($sqlFetchContact))
{
    $Firstname=$fetchEnrolled['firstname'];
    $Lastname=$fetchEnrolled['lastname'];
    $email=$fetchEnrolled['email'];
    $phonenumber=$fetchEnrolled['phonenumber'];
    $Message=$fetchEnrolled['message'];
    $created=$fetchEnrolled['created_at'];
}


?>







<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php') ?>

<body>
    <?php require_once('includes/navbar.php')?>
    <div class="sidebar">
    <?php require_once('includes/sidebar.php')?>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title ">Personal Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item ">Firstname : <span class="float-end badge bg-primary"><?php echo $Firstname?></span></li>
                                <li class="list-group-item ">Lastname : <span class="float-end badge bg-secondary"><?php echo $Lastname?></span></li>
                                <li class="list-group-item ">Phone Number : <span class="float-end badge bg-warning"><?php echo $phonenumber?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <h4 class="card-title ">Other Information</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item ">Email : <span class="float-end badge bg-primary"><?php echo $email?></span></li>
                                <li class="list-group-item ">Message: <span class="float-end badge bg-secondary"><?php echo $Message?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php require_once('includes/scripts.php')?>
    
</body>
</html>