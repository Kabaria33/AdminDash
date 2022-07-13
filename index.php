<?php 
require_once('logics/dbconnection.php');
// counting number of students

$queryEnrolledStudents=mysqli_query($connection,"SELECT * FROM enrollment ");
$countAllStudents =mysqli_num_rows($queryEnrolledStudents);
// count by gender 
$queryEnrolledFemale=mysqli_query ($connection, "SELECT * FROM enrollment WHERE gender='Female'");
$countAllFemale=mysqli_num_rows($queryEnrolledFemale)
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Top content</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Students</span>
                        </div>
                        <div class="card-body">
                            <span><i class="fa fa-group fa-3x"></i></span>
                            <span class="float-end badge bg-dark rounded-pill"><?php echo $countAllStudents ?> </span><br>
                            <span class="float-end"> Female:</span><br>
                            <span class="float-end badge bg-dark rounded-pill"><?php echo $countAllFemale ?> </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Available courses</span>
                        </div>
                        <div class="card-body">
                            <span><i class="fa fa-folder-open fa-3x"></i></span>
                            <span class="float-end">00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>campuses</span>
                        </div>
                        <div class="card-body">
                            <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                            <span class="float-end">00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Users</span>
                        </div>
                        <div class="card-body">
                            <span><i class="fa fa-user fa-3x"></i></span>
                            <span class="float-end">00</span>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">    
                            <span>Student Analysis</span>
                        </div>    
                        <div class="card-body">
                          <span><i class="fa fa-line-chart fa-3x"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php require_once('includes/scripts.php')?>
    
</body>
</html>