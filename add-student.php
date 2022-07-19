<?php
 $response='';
require_once('logics/dbconnection.php');
if(isset($_POST["add"]))
{
    $fullname=$_POST["fullname"];
    $phonenumber=$_POST["phonenumber"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];
    $email=$_POST["email"];
    $mydata=mysqli_query($connection,"INSERT INTO enrollment(fullname,phonenumber,gender,course,email)VALUES('$fullname','$phonenumber','$gender','$course','$email')");
    if($mydata)
    {
        $response= "Data submitted successfully";
        
    }
    else
    {
        $response="Data not submitted";
    }


}
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

    <div class="main-content container-fluid">
        <div class="modal fade " id="modal" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Student</h5>
                        <a href="students.php"><button type="button" class="btn-close"></button></a>
                    </div>
                    <div class="modal-body">
                        <form action="students.php" method="POST">
                                
                            <div class="row ">
                                <div class="col-6 pb-3 ">
                                    <label for="message" class="form-label">Full Name :</label>
                                    <input type="text"name="fullname" class="form-control shadow" placeholder="Enter your full name">
                                </div>
                                <div class="col-6 pb-3 ">
                                    <label for="message" class="form-label">Phone Number:</label>
                                    <input type="text" name="phonenumber" class="form-control shadow" placeholder="+2547......">
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-6 pb-3 ">
                                    <label for="message" class="form-label">Email Address:</label>
                                    <input type="email"  name="email" class="form-control shadow" placeholder="Please enter your email">
                                </div>
                                <div class="col-6 pb-3">
                                    <label for="message"  class="form-label">What's your gender?</label>
                                    <select name="gender"class="form-control shadow">
                                        <option class=>--Select your gender--</option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female</option>
                                    </select>

                                </div>
            
                            </div>
                            <div class="col-7">
                                    <label for="message" class="form-label">What's your preferred course?</label>
                                    <select  name="course"class="form-control shadow pb-3">
                                            <option class=>--Select your course--</option>
                                            <option value=" Android App Development"> Android App Development</option>
                                            <option value="Web Design & Development" > Web Design & Development</option>
                                            <option value="Data Analysis" >Data Analysis</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                    </select>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary">Add Record</button>
                       </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/scripts.php')?>
</body>
</html>