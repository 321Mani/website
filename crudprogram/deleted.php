<?php
include"dbconnect.php";
if(isset($_GET['deldid']))
{
$id=$_GET['deldid'];
$sql="DELETE FROM democrud where id='$id'";
$result=mysqli_query($db,$sql);
if($result)
{
	//echo"<script>alert('are you sure')</script>";
	header("location:create.php");
}
else
{
	die(mysqli_error($db));
}
}
	?>