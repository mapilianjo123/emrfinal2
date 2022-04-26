<?php 

include 'config.php';

session_start();


if(isset($_SESSION['auth_role']))
{
	if($_SESSION['auth_role']=="1"){
		header("location: ../Dashboard/index.php");
	}


}
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) 
	{
		foreach($result as $data){
			$user_id = $data['id'];
			$user_name = $data ['fname'].' '.$data['lname'];
			$user_email =$data['email'];
			$role_as =$data['role_as'];	
		}
		$_SESSION['auth'] = true;
		$_SESSION['auth_role'] = "$role_as";
		$_SESSION['auth_user']=['user_id'=>$user_id,'user_name'=>$user_name,'user_email'=>$user_email,];

		if($_SESSION['auth_role'] == '1')
		{
			header("location: ../Dashboard/index.php");
		}
		elseif($_SESSION['auth_role'] == '0')
		{
			$_SESSION['message'] = "Your not authorized";	
			header("Location: ../Dashboard/welcome.php");
			exit(0);

		}

	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
		
		$email = "";
		$_POST['password']= "";
		
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Electronic Medical Records</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php if(isset($email)){echo $email;} ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php if(isset($password)){echo $password;} ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a></p>
		</form>
	</div>
</body>
</html>