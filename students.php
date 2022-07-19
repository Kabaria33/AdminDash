<?php
$response="";
require_once('logics/dbconnection.php');
$sql=mysqli_query($connection,"SELECT * FROM enrollment");

?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>
<body>
    <?php require_once('includes/navbar.php') ?>
    <div class="sidebar">
        <?php require_once('includes/sidebar.php')?>
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
               <div class="card">
                    <div class="col-lg-12">
                        <div class="card-header text-white bg-dark text-center ">
                            <span>Students</span>
                            <a href="#"><button type="button" class="float-end btn btn-light btn-sm"  data-bs-toggle="modal" data-bs-target="#modal"><i class="fa fa-plus"></i></button></a>
                            <?php  
                                if($response)
                                {
                                    include($_SERVER['DOCUMENT_ROOT'].'/web1-projects/Bootstrap-Grid-Layout/response.php');
                                }
                            ?>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive " style="font-size:12px;">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Fullname</th>
                                        <th>Phone Number</th>
                                        <th>Gender</th>
                                        <th>Course</th>
                                        <th>Email</th>
                                        <th>Enrolled on</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; while($fetchEnrollmentRecord= mysqli_fetch_array($sql)){?>
                                        <tr>
                                            <td><?php echo $count?></td>
                                            <td><?php echo $fetchEnrollmentRecord['fullname']?></td>
                                            <td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
                                            <td><?php echo $fetchEnrollmentRecord['gender']?></td>
                                            <td><?php echo $fetchEnrollmentRecord['course']?></td>
                                            <td><?php echo $fetchEnrollmentRecord['email']?></td>
                                            <td><?php echo $fetchEnrollmentRecord['created_at']?></td>
                                            <td>
                                                <a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no'] ?>" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                                                <a href="view-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="delete-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php $count++; }?>
                                
                                    
                                </tbody>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
<?php require_once("add-student.php");?>





    <?php require_once('includes/scripts.php')?>
</body>
</html>