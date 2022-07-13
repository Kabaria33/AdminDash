<?php 
require_once('logics/dbconnection.php');
$sqlFetchEnrolled= mysqli_query( $connection, "SELECT * FROM enrollment WHERE no=' ".$_GET['id']."'");
while($fetchEnrolled= mysqli_fetch_array($sqlFetchEnrolled))
{
    $fullname=$fetchEnrolled['fullname'];
    $email=$fetchEnrolled['email'];
    $phonenumber=$fetchEnrolled['phonenumber'];
    $gender=$fetchEnrolled['gender'];
    $course=$fetchEnrolled['course'];
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
                                <li class="list-group-item ">Full Name : <span class="float-end badge bg-primary"><?php echo $fullname?></span></li>
                                <li class="list-group-item ">Email : <span class="float-end badge bg-secondary"><?php echo $email?></span></li>
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
                                <li class="list-group-item ">Gender : <span class="float-end badge bg-primary"><?php echo $gender?></span></li>
                                <li class="list-group-item ">Course : <span class="float-end badge bg-secondary"><?php echo $course?></span></li>
                                <li class="list-group-item ">Enrolled on  : <span class="float-end badge bg-warning"><?php echo $created?></span></li>
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