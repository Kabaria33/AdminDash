<?php
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
               
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Students</span>
                    </div>
                    <div class="card-body">
                      <table class="table table-striped table-hover table-responsive">
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
                                <?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)){?>
                                    <tr>
                                        <td><?php echo $fetchEnrollmentRecord['no']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['fullname']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['gender']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['course']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['email']?></td>
                                        <td><?php echo $fetchEnrollmentRecord['created_at']?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                                            <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php }?>
                            
                                
                            </tbody>
                        </table> 
                    </div>
                    <div class="card-footer"></div>
                </div>
                
            </div>
        </div>
    </div>

    





    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script>
</body>
</html>