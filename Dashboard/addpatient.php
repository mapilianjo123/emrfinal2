<?php 
include ('config/dbcon.php');
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $home=$_POST['home'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
   

    $sql="INSERT INTO patients (fname,lname,home,email,age,gender,contact)
    values('$fname','$lname','$home','$email','$age','$gender','$contact');";
    $result=mysqli_query ($conn,$sql);
    if($result){
        header("Location: patientrecords.php");
    }else{
        die("<script>alert('Not successfully added.')</script>");
    }
}
include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Patient</title>
</head>
</html>

<div class="container-fluid px-4">
    <h2 class="mt-4">ADDING PATIENT</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Patient</li>
    </ol>

    <div class="containter ">
    <form method="post">
  <div class="form-group">
    
    <label>First Name</label>
    <input type="text" class="form-control" name="fname" placeholder="Enter your first name"<?php if(isset($fname)){echo $fname;} ?>required>
    </div>

    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter your last name" <?php if(isset($lname)){echo $lname;} ?> required>
    </div>

    <div class="form-group">
    <label>Home Address</label>
    <input type="text" class="form-control" name="home" placeholder="Enter your home addres" <?php if(isset($home)){echo $home;} ?> required>
    </div>

    <div class="form-group">
    <label>Email Address</label>
    <input type="text" class="form-control" name="email" placeholder="Enter your email addres" <?php if(isset($email)){echo $email;} ?> required>
    </div>

    <div class="form-group">
    <label>Age</label>
    <input type="text" class="form-control" name="age" placeholder="Enter your age"<?php if(isset($age)){echo $age;} ?> required>
    </div>
    <div class="form-group">
    <label>Gender</label>
    <input type="text" class="form-control" name="gender" placeholder="Enter your gender"<?php if(isset($contact)){echo $gender;} ?> required>
   </div>

    <div class="form-group">
    <label>Contact #</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter your number"<?php if(isset($contact)){echo $contact;} ?> required>
   </div>
   

   <div class="mb-3"></div>
  <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
</div>


      


    <?php
include ('includes/footer.php');
include ('includes/scripts.php');

?>