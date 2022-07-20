<?php 
$msg="";
require_once("logics/dbconnection.php");
$dataFromSubscribers=mysqli_query($connection,"SELECT * FROM subscribers WHERE no=' ".$_GET['id']."' ");
while($fetchMsg= mysqli_fetch_array($dataFromSubscribers))
{
    $id=$fetchMsg['no'];
    $email=$fetchMsg['email'];
}

require_once('logics/processEditSubscribers.php');



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
                    <div class="card" >
                        <div class="card-header bg-dark text-center text-white">
                        <a href="subscribers.php" class="btn btn-light btn-sm float-start"><span><i class="fa fa-arrow-left ">Back</i></span></a>
                            Edit Subscribers </div>
                        <?php echo $msg?>
                        <div class="body">
                            <form  class= "container"action="edit-subscribers.php?id=<?php echo $id ?>" method="POST">
                                <div class="row ">
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="email" class="form-label">Email Address:</label>
                                        <input type="email" value="<?php echo $email?>"  name="email" class="form-control shadow" placeholder="Please enter your email">
                                    </div>
                                    
                                    <button type="submit"  name="buttonSub"class="btn mt-3  mb-3 btn-sm btn-primary">Update</button>
                                </div> 
                            </form>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <?php require_once('includes/scripts.php')?>
    
</body>
</html>