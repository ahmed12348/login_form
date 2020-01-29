<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 form-div login"> 
		<form  method="post">
	<h3 class="text-center">Login</h3>

	<div class="form-group">
        	<label for="username">Username Or Email</label>

	<input type="text" name="username" required class="form-control form-control-lg">
        </div>

<div class="form-group">
        	<label for="password">Password</label>
        
		<input type="password" name="password"  class="form-control form-control-lg" required>
</div>
<div class="form-group">
	<button type="submit" name="login" class="form-control form-control-lg">Login</button>
	 <p class="text-center">Not Yet a member? <a href="signup.php">Sign Up</a></p>
</div>
</form>
</div>
</div>
</div>

</body>
</html>
<?php
require 'db.php';
//
session_start();

if(isset($_POST['login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$qu="select * from user where username='$user' && password='$pass' ";

if(mysqli_num_rows(mysqli_query($con,$qu))>0){
	$_SESSION['username']=$user;
	header("Location:cp.php");
}
else{
	echo'error in username or password';

}
}
?>