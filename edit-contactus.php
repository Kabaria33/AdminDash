<?php 
$msg="";
require_once("logics/dbconnection.php");
$dataFromContactus=mysqli_query($connection,"SELECT * FROM contactus WHERE no=' ".$_GET['id']."' ");
while($fetchMsg= mysqli_fetch_array($dataFromContactus))
{
    $id=$fetchMsg['no'];
    $Firstname= $fetchMsg['firstname'];
    $Lastname=$fetchMsg['lastname'];
    $email=$fetchMsg['email'];
    $phonenumber=$fetchMsg['phonenumber'];
    $message=$fetchMsg['message'];
}

require_once('logics/processEdit.php');



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
                        <a href="contactus.php" class="btn btn-light btn-sm float-start"><span><i class="fa fa-arrow-left ">Back</i></span></a>
                            Edit Message <?php echo $Firstname.' '.$Lastname ?></div>
                        <?php echo $msg?>
                        <div class="body">
                            <form  class= "container"action="edit-contactus.php?id=<?php echo $id ?>" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="firstname" class="form-label">First Name :</label>
                                        <input type="text"name="firstname" value="<?php echo $Firstname ?>" class="form-control shadow" placeholder="Enter your first name">
                                    </div>
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="lastname" class="form-label">Last Name:</label>
                                        <input type="text" value="<?php echo $Lastname?>" name="lastname" class="form-control shadow" >
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="email" class="form-label">Email Address:</label>
                                        <input type="email" value="<?php echo $email?>"  name="email" class="form-control shadow" placeholder="Please enter your email">
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                        <label for="phonenumber"  class="form-label">Phone number:</label>
                                        <input type="text" value="<?php echo $phonenumber?>"name="phonenumber"class="form-control shadow ">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="message" class="form-label">Send a message</label>
                                        <input type="text"value="<?php echo $message?> "name="message" class="form-control shadow pb-3">
                                        <button type="submit"  name="buttonUpdate"class="btn mt-3  mb-3 btn-sm btn-primary">Update</button>
                                    </div>
                                    
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
</htm