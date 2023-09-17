<?php
include'dbconnect.php';
?>

<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>crud1</title>
</head>

<body>
<div class="container">

<button class="btn btn-success my-5" ><a href="read.php" class="text-light">Creat Profile</a></button>

<table class="table">
<thead>
<tr>
<th scope="col">id</th>
<td scope="col">Name</td>
<td scope="col">Password</td>
<td scope="col">Email</td>
<td scope="col">Mobile</td>
<td scope="col">Address</td>
<td scope="col">Operation</td>
</tr>
</thead>
<tbody>
<?php
$qry="SELECT * FROM democrud";
$result=mysqli_query($db,$qry);
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
    $id=$row['id'];
	$name=$row['name'];
	$password=$row['password'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$address=$row['address'];
	echo'<tr>
	<th>'.$id.'</th>
	<td>'.$name.'</td>
	<td>'.$password.'</td>
	<td>'.$email.'</td>
	<td>'.$mobile.'</td>
	<td>'.$address.'</td>
	
	<td><button class="btn btn-warning" class="text-light"><a href="updated.php?  upid='.$id.'class="text-light" ">Update</a></button>
	<button class="btn btn-danger" class="text-light"><a href="deleted.php?  deldid='.$id.' class="text-light"">delete</a></button>
	</td>
	</tr>';
	}
}
?>
</tbody>
</table>
</body>
</html>