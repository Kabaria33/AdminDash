<?php 
require_once('logics/dbconnection.php');
$sqlFetchContact= mysqli_query( $connection, "SELECT * FROM subscribers WHERE no=' ".$_GET['id']."'");
while($fetchEnrolled= mysqli_fetch_array($sqlFetchContact))
{
    
    $email=$fetchEnrolled['email'];
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
                        <div class="card-header">
                        <a href="subscribers.php" class="btn btn-light btn-sm float-start"><span><i class="fa fa-arrow-left ">Back</i></span></a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item ">Email : <span class="float-end badge bg-primary"><?php echo $email?></span></li>
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
