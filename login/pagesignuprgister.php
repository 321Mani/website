<?php
include"database_connection.php";
if(isset($_POST['submit']))
{
	$fullname=$_POST['fname'];
	$name=$_POST['uname'];
	$password=$_POST['pass1'];
	$cpassword=$_POST['pass2'];
	
	$query="insert into signup values ('null','$fullname','$name','$password','$cpassword')";
	
	$result=mysqli_query($database,$query);
	if(!$result)
	{
		echo "account not register";
	}
	else
	{
		header('location:page signup.php? your account has been created');
		exit();
	}
}
?>