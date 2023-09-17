<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTS</title>
    <link rel="stylesheet" type="text/css" href="products.css">
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
if($_SESSION['username'])
{
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary" id="navbar">
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
<h1 style="font-weight:800;font-size:60px;"id="h1">OUR PRODUCTS</h1>

<?php
$sql="SELECT * FROM products";
$res=$db->query($sql);
if($res->num_rows>0)
{
	while($row=$res->fetch_assoc())
	{
		echo'
		<div class="col-lg-4 col-md-4 col-12text-center" >
		<div class="card">
	<img src="images/'.$row['pic'].'" alt="hi" class="img-responsive">
<p><strong>'.$row['name'].'</strong></p>
<h4 class="text-danger">₹'.$row['price'].'</h4>
<p><a href="view.php?id='.$row['id'].'" class="btn btn-info">view details</a></p>
</div>
</div>';
	}
}
?>	


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
<?php
}
else
{
	header('location:pagelogin.php');
}
?>