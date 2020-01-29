
<?php
require 'auth.php';
echo 'Hello_'.$_SESSION['username'];

if (isset($_POST['logout'])) {
	unset($_SESSION['username']);
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4 form-div logout"> 
		
<form method="post">

<button type="submit" name="logout" class="form-control form-control-lg">Logout</button>	
</form>
</div>
</div>
</div>
</body>
</html>
