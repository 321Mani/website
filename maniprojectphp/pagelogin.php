<?php
session_start(); 
include"db.php";
if(isset($_POST['submit']))
{
	$user=$_POST['uname'];
	$pass=$_POST['pass'];
	
	$pass1=md5($pass);
	
	$qry="SELECT * FROM tb_login WHERE username='$user' and password='$pass1'";
	$result=mysqli_query($db,$qry);
	
    if(mysqli_num_rows($result))
	{
		$row=mysqli_fetch_assoc($result);
		if($row['username']===$user && $row['password']===$pass1)
		{
			$_SESSION['username']=$row['username'];
		    $_SESSION['password']=$row['password'];
			$_SESSION['id']=$row['id'];
			
			header('location:product.php');
			exit();
		}
		else
		{
			echo"error";
			//header('location:pagelogin.php');
			exit();
		}
	}
}
		
?>
<html>
<head>
<link rel="stylesheet" href="login.css">
<title>login</title>
</head>
<body>
<form method="post">
<label>Username</label>
<input type="text" name="uname"	placeholder="enter your username" required>
<label>Password</label>
<input type="password" name="pass" placeholder="enter your password" required>
<a class="a" href="signup.php">Register a Profile</a>
<button type="submit" name="submit" >Login</button>	
</body>
</html>