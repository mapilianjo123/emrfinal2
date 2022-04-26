
<?php 

include ('config/dbcon.php');


///update query
if(isset($_POST['updateBtn'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $home=$_POST['home'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $contact=$_POST['contact'];

    $sql = "UPDATE patients SET fname = '$fname',
                lname = '$lname',
                home = '$home', 
                email = '$email',
                age = '$age',
                contact = '$contact' WHERE id = '$id'";

                $result = mysqli_query($conn, $sql);

                if($result) {
                     header("location: patientrecords.php?update=success");
                 } else {
                     header("location: patientrecords.php?update=failed");
                }
            }
if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
    $sql = "SELECT FROM patients WHERE id = $id ";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);

    $fname=$row['fname'];
    $lname=$row['lname'];
    $home=$row['home'];
    $email=$row['email'];
    $age=$row['age'];
    $contact=$row['contact'];
}

    
include('includes/header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid px-4">
    <h2 class="mt-4">UPDATE DATA</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active">Patient Records</li>
        <li class="breadcrumb-item">Update</li
    </ol>
    <div class="container ">
        
    </div>
 


<form action="" method="POST">
    <div class="container" style="padding: 30px 0 0 0;">
        <div class="row">
            <label for="Firstname">Firstname</label>
            <div class="input-group mb-3">
            <input type="text" id="Firstname" name="fname" placeholder="Firstname" class="form-control" 
            value="<?php echo $fname;?>">
            </div>

            <label for="Lastname">Lastname</label>
            <div class="input-group mb-3">
            <input type="text" id="Lastname" name="lname" placeholder="Lastname" class="form-control" 
            value="<?php if(isset($lname)){echo $lname;} ?>">
            </div>

            <label for="Email">Email</label>
            <div class="input-group mb-3">
            <input type="email" id="Email" name="email" placeholder="Email" class="form-control" 
            value="<?php if(isset($email)){echo $email;}?>">
            </div>

            <label for="Address">Address</label>
            <div class="input-group mb-3">
            <input type="text" id="Address" name="home" placeholder="Home Address" class="form-control" 
            value="<?php if(isset($home)){echo $home;} ?>">
            </div>

            <label for="Age">Age</label>
            <div class="input-group mb-3">
            <input type="number" id="Age" name="age" placeholder="Age" class="form-control" 
            value="<?php if(isset($age)){echo $age;} ?>">
            </div>

            <label for="Contact">Contact</label>
            <div class="input-group mb-3">
            <input type="number" id="Contact" name="contact" placeholder="Contact" class="form-control" 
            value="<?php if(isset($contact)){echo $contact;}?>">
            </div>
            <div>
                <button class="btn btn-primary" type="submit" name="updateBtn" >Update</button>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function(){
  $("#successMessage").fadeIn(1000).delay(3000).fadeOut("slow");
  $("#failedMessage").fadeIn(1000).delay(3000).fadeOut("slow");
});
</script>
</body>

</html>

<?php
include ('includes/footer.php');
include ('includes/scripts.php');

?>