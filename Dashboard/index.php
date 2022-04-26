<?php
session_start();
include ('config/dbcon.php');
include ('includes/header.php');

if(isset($_SESSION['auth_role']))
{

	if($_SESSION['auth_role'] == '0')
	{
		echo"<script>alert('Your not authorized ADMIN.');
    window.location.href='welcome.php';
    </script>";	
		exit(0);

	}

}else{
    echo"<script>alert('Please login first');
    window.location.href='../Login&Registerform/index.php';
    </script>";	
    
    exit(0);
}

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Electronic Medical Records</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Add Patient</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="addpatient.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Patient Records</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="patientrecords.php">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Laboratory</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">About</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
    </div>

</div>

<?php
include ('includes/footer.php');
include ('includes/scripts.php');
?>




