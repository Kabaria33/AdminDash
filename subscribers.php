<?php
$response="";
require_once('logics/dbconnection.php');
$sql=mysqli_query($connection,"SELECT * FROM subscribers  ");

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
                            <span>Subscribers</span>
                           
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover table-responsive " style="font-size:12px;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Email </th>
                                        <th>Created_at</th>
                                        <th>Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $count=1; while($fetchSubscribers= mysqli_fetch_array($sql)){?>
                                        <tr>
                                            <td><?php echo $count?></td>
                                            <td><?php echo $fetchSubscribers['email']?></td>
                                            <td><?php echo $fetchSubscribers['created_at']?></td>
                                            <td>
                                                <a href="edit-subscribers.php?id=<?php echo $fetchSubscribers['no'] ?>" class="btn btn-primary btn-sm"><span><i class="fa fa-edit"></i></span></a>
                                                <a href="view-subscribers.php?id=<?php echo $fetchSubscribers['no']?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="delete-subscribers.php?id=<?php echo $fetchSubscribers['no']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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






    <?php require_once('includes/scripts.php')?>
</body>
</html>