<?php
include 'dbconnect.php';

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	
	$query="insert into democrud(name,password,email,mobile,address)
   	values('$name','$password','$email','$mobile','$address')";
	$result=mysqli_query($db,$query);
    if($result)
	{
		echo"Registered successfully";
		header("location:create.php");
	}
    else
	{
		die('error'.mysqli_error($db));
	}
}
?>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
<title>crud2</title>
</head>
<body>
<h1><center> USER FORM</title></h1>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>NAME:</label>
<input type="text" name="name" placeholder="enter your name" class="form-control">
</div>
<div class="form-group">
<label>PASSWORD:</label>
<input type="password" name="password" placeholder="enter your password" class="form-control">
</div>
<div class="form-group">
<label>EMAIL:</label>
<input type="email" name="email" placeholder="enter your email" class="form-control">
</div>

<div class="form-group">
<label>MOBILE:</label>
<input type="text" name="mobile" placeholder="enter your mobile" class="form-control">
</div>

<div class="form-group">
<label>ADDRESS:</label>
<input type="address" name="address" placeholder="enter your address" class="form-control">
</div>
		
	<button class="btn btn-info" type="submit" name="submit">REGISTER</button>
	<button class="btn btn-danger" type="reset">RESET</button>
</form>
</div>
</body>
</html>