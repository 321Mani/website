<?php 
session_start(); 
include "database_connection.php";

if(isset($_POST['login'])) {

	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	$pass = md5($pass);

	$sql = "SELECT * FROM signup WHERE USERNAME='$user' and PASSWORD='$pass'";

		$result = mysqli_query($database, $sql);

		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
            if ($row['USERNAME'] === $user && $row['PASSWORD'] === $pass) {
            	$_SESSION['USERNAME'] = $row['USERNAME'];
            	$_SESSION['PASSWORD'] = $row['PASSWORD'];
            	$_SESSION['id'] = $row['id'];
            	header("Location:pagehome.php");
		        exit();
            }else{
				header("Location: pagelogin.php?error=Incorect User name or password");
		        exit();
			}

		}
}
?>



<html>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<body>
<form action="" method="post">
<label>USERNAME</label>
<input type="text" name="username" placeholder="username"><br><br>

<label>PASSWORD</label>
<input type="password" name="password" placeholder="password"><br><br>

<a href="signup.php" name="ca" >create a new account?</a>
<button type="submit" name="login" value="login">login</button>

</form>
</body>
</html>
