<?php 
require_once('logics/dbconnection.php');
$getData=mysqli_query($connection,"SELECT * FROM contactus");



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once('includes/headers.php');?>
</head>
<body>
	<div class="header">
		<?php require_once('includes/navbar.php');?>
	</div>
	<div class="sidebar">
		<?php require_once('includes/sidebar.php');?>
	</div>
	<div class="main-content">
        <div class="container-fluid">
            <div class="row">
               
                <div class="col-lg-12">
                    <div class="card-header bg-dark text-white text-center">
                        <span>Contact Us</span>
                    </div>
                    <div class="card-body">
                      <table class="table  table-bordered table-hover table-responsive " style="font-size:12px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>firstname</th>
                                    <th>Last Name</th>
                                    <th>email</th>
                                    <th>Phone Number</th>
                                    <th>Message</th>
                                    <th>Sent On</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($Data=mysqli_fetch_array($getData)){?>
                                    <tr>
                                        <td><?php echo $Data['no']?></td>
                                        <td><?php echo $Data['firstname']?></td>
                                        <td><?php echo $Data['lastname']?></td>
                                        <td><?php echo $Data['email']?></td>
                                        <td><?php echo $Data['phonenumber']?></td>
                                        <td><?php echo $Data['message']?></td>
                                        <td><?php echo $Data['created_at']?></td>
                                        
                                    </tr>
                                <?php }?>
                            
                                
                            </tbody>
                        </table> 
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	



	<?php require_once('includes/scripts.php') ?>
</body>
</html>