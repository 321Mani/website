<?php
include'dbconnect.php';
$id=$_GET['upid'];
$qry=$_GET['upid'];
$qry="SELECT * FROM democrud where id='$id'";
$result=mysqli_query($db,$qry);
if($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$password=$row['password'];
$email=$row['email'];
$mobile=$row['mobile'];
$address=$row['address'];


if(isset($_POST['update']))
{
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

	
$query="UPDATE democrud set id='$id',name='$name',password='$password',email='$email',mobile='$mobile',address='$address' where id='$id'";

$result=mysqli_query($db,$query);
if($result)
{
	echo"updated successfully";
	header('location:create.php');
}
else
{
	die(mysqli_error($db));
}
}
}
?>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
<title>crud3</title>
</head>
<body>
<h1><center> UPDATE FORM</title></h1>
<div class="container my-5">
<form method="post">
<div class="form-group">
<label>NAME:</label>
<input type="text" name="name" placeholder="enter your name" class="form-control"  value=<?php echo $name;?>>
</div>
<div class="form-group">
<label>PASSWORD:</label>
<input type="password" name="password" placeholder="enter your password" class="form-control" value=<?php echo $password;?>>
</div>
<div class="form-group">
<label>EMAIL:</label>
<input type="email" name="email" placeholder="enter your email" class="form-control" value=<?php echo $email;?>>
</div>

<div class="form-group">
<label>MOBILE:</label>
<input type="text" name="mobile" placeholder="enter your mobile" class="form-control" value=<?php echo $mobile;?>>
</div>

<div class="form-group">
<label>ADDRESS:</label>
<input type="address" name="address" placeholder="enter your address" class="form-control" value=<?php echo $address;?>>
</div>
		
	<button class="btn btn-info" type="submit" name="update" color="white">UPDATE</button>
	<button class="btn btn-danger" type="reset"><a href="create.php"> CANCEL</a></button>
</form>
</div>
</body>
</html>
