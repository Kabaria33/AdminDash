<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";
$connect=mysqli_connect($server,$username,$password,$database);
$sql=mysqli_query($connect,"SELECT * FROM enrollment");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Records</title>
    <meta charset="UTF-8">
    <meta name="description" content="Creating admin dashboard">
    <meta name="keywords" content="HTML,CSS,Zalego,Technology">
    <meta name="author" content="Virginia Kabaria">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.2.0/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

</head>
<body>
    <div class="header" style="width=100%!important">
        <img src="images/zalego.jfif" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>
    <div class="sidebar">
        <nav>
           <ul>
            <li>
                <a href="students.php">
                   <span><i class="fa fa-group"></i></span> 
                   <span>Students</span>
                </a>
            
            </li>
            <li>
                <a href="index.php">
                   <span><i class="fa fa-folder-open"></i></span> 
                   <span>Courses</span>
                </a>
            </li>
            <li>
                <a href="">
                   <span><i class="fa fa-graduation-cap"></i></span> 
                   <span>Campus</span>
                </a>
            </li>
           </ul>             
        </nav>

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