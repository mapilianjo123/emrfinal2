<?php
include ('config/dbcon.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM patients WHERE id = $id ";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));


    if($result) {
        header("location: patientrecords.php?deleted=success");

    } else {

        header("location: patientrecords.php?deleted=failed");
    }

}
?>