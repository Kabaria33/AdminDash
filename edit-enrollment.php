<?php
 require_once("logics/dbconnection.php");
$querystudent=mysqli_query( $connection,"SELECT * FROM enrollment WHERE no='".$_GET['id']."' ");
while($fetchStudent= mysqli_fetch_array($querystudent))
{
    $Fullname= $fetchStudent['fullname'];
    $Phonenumber=$fetchStudent['phonenumber'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['course'];
    $email=$fetchStudent['email'];
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
                <div class="col-lg-12">
                    <div class="card" >
                        <div class="card-header bg-dark text-center text-white">Edit student <?php echo $Fullname ?></div>
                        <div class="body">
                            <form  class="container" action="edit-enrollment.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="fullanme" class="form-label">Full Name :</label>
                                        <input type="text"name="fullname" value="<?php echo $Fullname ?>" class="form-control shadow" placeholder="Enter your full name">
                                    </div>
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="phonenumber" class="form-label">Phone Number:</label>
                                        <input type="text" value="<?php echo $Phonenumber?>" name="phonenumber" class="form-control shadow" placeholder="+2547......">
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-6 pb-3 ">
                                        <label for="email" class="form-label">Email Address:</label>
                                        <input type="email" value="<?php echo $email?>"  name="email" class="form-control shadow" placeholder="Please enter your email">
                                    </div>
                                    <div class="col-lg-6 pb-3">
                                        <label for="message"  class="form-label">What's your gender?</label>
                                        <select name="gender"class="form-control shadow ">
                                            <option class=><?php echo $gender ?></option>
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="message" class="form-label">What's your preferred course?</label>
                                        <select  name="course"class="form-control shadow pb-3">
                                                <option ><?php echo $course ?></option>
                                                <option value="Android App Development"> Android App Development</option>
                                                <option value="Web Design & Development" > Web Design & Development</option>
                                                <option value="Data Analysis" >Data Analysis</option>
                                                <option value="Cyber Security">Cyber Security</option>
                                        </select>
                                        <button  name="button"class="btn mt-3  mb-3 btn-sm btn-primary">Submit </button>
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
</html>