<!DOCTYPE html>

<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container"></div>
<div class="row">
<div class="col-md-4 offset-md-4 form-div"> 
	<h3 class="text-center">Register</h3>
	<form method="post">
	
			   <div class="form-group">
    <label for="username">Username</label>
	<input type="text" name="username"  class="form-control form-control-lg" required >
	</div>
	
	 <div class="form-group">
        	<label for="password">Password</label>
	<input type="password" name="password" class="form-control form-control-lg" required>
	</div>
	<div class="form-group">
        	<label for="email">Email</label>
		<input type="email" name="email" class="form-control form-control-lg" placeholder=" tez" required>
</div>
<div class="form-group">
		<button type="submit" name="signup" class="form-control form-control-lg">Sign Up</button>
	</div>
	<p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
	
	</form>
	</div>
	</div>
	</div>
</body>
</html>
<?php
require 'db.php';

if(isset($_POST['signup'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
$qu="insert into user (username,password,email) value('$user','$pass','$email')";

if(mysqli_query($con,$qu)){
	header("location:login.php");
	
	echo"Sign Up Is Successfully registered";
}


}
?> 