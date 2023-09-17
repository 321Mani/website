<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 <style>
h3 {
	justify-content:center;
	color:#29f700;
}
</style>
</head>
<body>

<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary" id="navbar" style="position:sticky !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SUPERMARKET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Content">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link "  href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="product.php">PRODUCTS</a>
        </li>
        
		<li class="nav-item">
          <a class="nav-link "   href="#contact">CONTACT</a>
        </li>
		
        <li class="nav-item">
          <a class="nav-link "   href="viewcart.php">CART</a>
        </li>
        </ul>
<h3>WELCOME:<?php echo $_SESSION['username']?></h3>

<form>
<label>
<a href="logout.php" style="float:right;" class="btn btn-danger">Logout<a></label>
</form>
	
	</div>
  </div>
</nav>

<?php 
include"db.php";
?>
<div class="container-fluid">
<div class="row">
<h1><center>PRODUCT DETAILS</center></h1>
<div class="col-md-4">
<?php
if(isset($_POST["addCart"]))
{
	if(isset($_SESSION["cart"]))
	{
		$id_array=array_column($_SESSION["cart"],"id");
		if(!in_array($_GET["id"],$id_array))
		{
			$index=count($_SESSION["cart"]);
			$item=array(
		'id'=>$_GET['id'],
		'name'=>$_POST['name'],
		'price'=>$_POST['price'],
		'qty'=>$_POST['qty'],
		);
		$_SESSION["cart"][$index]=$item;
		echo"<script>alert('Product Added..')</script>";
		header('location:viewcart.php');
		}
		else{
			echo"<script>alert('Already Added..');</script>";
			header('location:viewcart.php');
		}
	}
	else{
		$item=array(
		'id'=>$_GET['id'],
		'name'=>$_POST['name'],
		'price'=>$_POST['price'],
		'qty'=>$_POST['qty'],
		);
		$_SESSION["cart"][0]=$item;
		echo"<script>alert('Product Added..');</script>";
	header('location:viewcart.php');
	}
}


if(isset($_GET['id']))
{
	$sql="SELECT * FROM products where id={$_GET["id"]}";
	$res=$db->query($sql);
	if($res->num_rows>0)
	{
		$row=$res->fetch_assoc();
		//echo"<pre>";
		//print_r($row);
		//echo"</pre>";
		echo"<div class='text-center' style='justify-content:center;align-items:center;' >
		<div class='card' style='width:350px;height:600px;'>
		<form action='{$_SERVER["REQUEST_URI"]}' method='post'>
		<table class='table table-bordered  border='2px solid !important' >
		<tr>
		<td colspan='2'><img src='images/{$row['pic']}' style='width:250px;height:250px;'></td>
		</tr>
		<p><tr><td><b>PRODUCT NAME</b></td><td><strong>{$row['name']}</strong></p></td><tr>
		<p><tr><td><strong>QUANTITY</strong></td><td><strong>{$row['qty']}</strong></p></td><tr>
		<p><tr><td><strong>AVAILABILITY</strong></td><td><strong>{$row['avl']}</strong></p></td><tr>
		<p><tr><td><strong>PRICE</strong></td><td><strong>{$row['price']}</strong></p></td><tr>
		<p><tr><td><strong>ENTER QTY</strong></td><td><strong>
		<input type='text' name='qty' required>
		<input type='hidden' name='name' value='{$row['name']}'>
		<input type='hidden' name='price' value='{$row['price']}'>
		</strong></p></td><tr>
		<tr><td></td><td><strong><input type='submit' name='addCart' class='btn btn-success' value='Add To Cart' required></strong></td></tr>
		</table>
		</form>
		</div>
		</div>
		";
		
	}
	else
{
	header('location:index.php');
	exit();
}

}
else
{
	header('location:index.php');
	exit();
}





?>	


</div>
</div>
</div>


<div id="contact">
<div class="container">
<h1 class="text-center" id="head">CONTACT US</h1><br><br>
<div class="row">
    <div class="col-md-4">
		<h4>TOP CATEGORIES</h4>
		<ul>
		<a href="product.php"><li>FRUITS</li></a>
		<a href="product.php"><li>VEGETABLES</li></a>
		<a href="product.php"><li>SPICES</li></a>
		<a href="product.php"><li>NUTS</li></a>
</ul>
</div>
    <div class="col-md-4">
		<h4>INFORMATION</h4>
		<ul>
		<a href="index.php"><li>HOME</li></a>
		<a href="product.php"><li>PRODUCTS</li></a>
		<a href="index.php"><li>ABOUT</li></a>
		<a href="#contact"><li>CONTACT</li></a>
</ul>
</div>
    <div class="col-md-4">
	<h4>CONTACT US</h4>
	<br>
      <p><span class="glyphicon glyphicon-map-marker"></span>Supermarket, Ayyampettai</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone:+91 9677404592</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: contact@supermarket.com</p>
    </div> 
</div>
</div>
</div>
<footer>
<b>
Copyrights@2023 Allrights reserved by supermarket.com This website is developed by Manikandan
</b>
</footer>


</body>
</html>