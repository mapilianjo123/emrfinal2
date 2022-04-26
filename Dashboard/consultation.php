
<?php 

include('includes/header.php');
include ('config/dbcon.php');
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
    <h2 class="mt-4">Consultation List</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item ">Consultation</li>
    </ol>
    <?php 
      
      if(isset($_GET['deleted'])) {

          if($_GET['deleted'] == "success") {
            echo  '<div class="text-success" id="successMessage">
                          Data deleted successfully
                    </div>';
          }
          if($_GET['deleted'] == "failed") {
            echo  '<div class="text-danger" id="failedMessage">
                          Failed
                    </div>';
          }

      }
      if(isset($_GET['update'])) {

        if($_GET['update'] == "success") {
          echo  '<div class="text-success" id="successMessage">
                        Data updated successfully
                  </div>';
        }
        if($_GET['update'] == "failed") {
          echo  '<div class="text-danger" id="failedMessage">
                        Failed to update
                  </div>';
        }

    }
    ?>
    <div class="container ">
        
    </div>
    <table class="table">
    <table class="table table-dark table-striped">


  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">History</th>
      <th scope="col">Exam</th>
      <th scope="col">Diagnose</th>
      <th scope="col">Prescribe</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql = "SELECT * FROM patients";
    $result=mysqli_query($conn,$sql);

    if($result){
      while ($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $fname=$row['fname'];
          $lname=$row['lname']; 
          $age=$row['age'];
          $gender=$row['gender'];
         
          echo '<tr>
          <th scope="row">'.$id.'</th>
          <td>'.$fname.'</td>
          <td>'.$lname.'</td>
          <td>'.$age.'</td>
          <td>'.$gender.'</td>
          <td> 
          <button class="btn btn-primary">
          <a href="#" class="text-light" style="text-decoration: none;"><i class="fas fa-folder"></i></a>
          <td colspan="1"</td>
          <button class="btn btn-primary">
            <a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;"><i class="fas fa-edit"></i></a>
          </button>
          <td colspan="1"</td>
          </button>
          
          <button class="btn btn-primary">
          <a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;"><i class="fas fa-edit"></i></a>
        </button>
        <td colspan="1"</td>
          <button class="btn btn-primary">
            <a href="update.php?updateid='.$id.'" class="text-light" style="text-decoration: none;"><i class="fas fa-edit"></i></a>
          </button>
      </td>
        </tr>';
      }  
       
    }
    
    ?>
  
  </tbody>
  </table>
</table>
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