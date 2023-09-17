<?php 
include "database_connection.php";

  if(isset($_POST['submit'])){
   {
	 $fname=$_POST['fname'];
	 $uname=$_POST['uname'];
	 $pass1=$_POST['pass1'];
	 $pass2=$_POST['pass2'];
	 
	         $pass = md5($pass1);


	 
	 $sql="INSERT INTO signup(id,FULLNAME,USERNAME,PASSWORD,CONFIRMPASSWORD)values('','$fname','$uname','$pass','$pass2')";
	 $result=mysqli_query($database,$sql);
	 if(!$result)
		{
			echo "Not Registered";
		}
		else
		{
			echo"<center><b>Registered Successfully</b></center>";
			header('Location:pagelogin.php');
		}
 }
  }  
  

?>

<html>
<title> signup</title>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<head>
<script>
function hi(){

if(document.f1.pass1.value != document.f1.pass2.value)
{
	
	alert("password not match");
	var a=document.getElementById('frm1');
	a.action="signup.php";
	a.submit();
}

}
</script>
</head>
<body>
<form method="post" name="f1" id="frm1">

<label>FULLNAME</label>
<input type="text" name="fname" placeholder="fullname">
<br><br>
<label>USERNAME</label>
<input type="text" name="uname" placeholder="username">
<br><br>
<label>PASSWORD</label>
<input type="password" name="pass1" placeholder="password">
<br><br>
<label>CONFIRM PASSWORD</label>
<input type="password" name="pass2" placeholder="re-enter password">
<br><br>
<a href="pagelogin.php" >Already I have an account</a>

<button type="submit" name="submit" onclick="hi()" value="signup">signup</button>
</form>
</body>
</html>