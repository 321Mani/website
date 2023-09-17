<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
			label{
				font-weight: bold;
				
			}
			table {
	background:#adb5bd !important;
	border:2px solid black;
}
input {
	width:300px;
	padding:5px;
	border:2px solid black;
	border-radius:5px;
}
h3 {
	color:#29f700;
}
		</style></head>
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
          <a class="nav-link active"  href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  target="_blank" href="signup.php">REGISTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  target="_blank" href="pagelogin.php">LOGIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  target="_blank" href="product.php">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  target="_blank" href="viewcart.php">CART</a>
        </li>

		<li class="nav-item">
          <a class="nav-link "   href="#contact">CONTACT</a>
        </li>
      </ul>
	  
<h3>WELCOME:<?php echo $_SESSION['username']?></h3>

    </div>
  </div>
</nav>
<div class="container">
			<div class="row">
				<div class="col-md-12 p-5 display-4 text-capitalize text-center">
					<h1 class="text-dark" style="color:aqua;"><b>PAYMENT CHECKOUT</b></h1>
				</div>
			</div>
			<div class="row justify-content-center mt-4">
				<div class="col-md-5">
							
		<table class="table tabel-bordered" style="width:500px;height:300px;background-color:grey;" >
						<form action="pay.php" method="post" id="form">
	<tr><td>
<label>USERNAME</label></td>
<td><input type="text" name="user" placeholder="enter your username" required><br></td></tr>
<tr><td><label>EMAIL</label></td>
<td><input type="email" name="email" placeholder="enter your email" required><br></td></tr>
<tr><td><label>PHONE</label></td>
<td><input type="text" name="phone" placeholder="enter your +91 number" required><br></td></tr>
<tr><td><label>AMOUNT</label></td>
<td><input type="text" name="amount" placeholder="enter your amount" required><br></td></tr>
<tr><td></td>
<td><button type="submit" class="btn btn-primary" style="width:200px;" name="submit">PROCESS</button>
</form>
</table>
</div>
</div>
</div>


<div id="contact">
<div class="container">
<h1 class="text-center">CONTACT US</h1><br><br>
<div class="row">
    <div class="col-md-4">
		<h4>TOP CATEGORIES</h4>
		<ul>
		<a href="index.php"><li>FRUITS</li></a>
		<a href="index.php"><li>VEGETABLES</li></a>
		<a href="index.php"><li>SPICES</li></a>
		<a href="index.php"><li>NUTS</li></a>
</ul>
</div>
    <div class="col-md-4">
		<h4>INFORMATION</h4>
		<ul>
		<a href="#home"><li>HOME</li></a>
		<a href="index.php"><li>PRODUCTS</li></a>
		<a href="index.php"><li>ABOUT</li></a>
		<a href="#contact"><li>CONTACT</li></a>
</ul>
</div>
    <div class="col-md-4">
	<h4>CONTACT US</h4>
	<br>
      <p><span class="glyphicon glyphicon-map-marker"></span>Supermarket, Ayyampettai</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 9677404592</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: contact@supermarket.com</p>
    </div> 
</div>
</div>
</div>
<footer>
<b>
Copyrights@2023 Allrights reserved by supermarket.com This website is developed by manikandan
</b>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" ></script>

</body>
</html>
<?php
}
else
{
	header('location:pagelogin.php');
}
?>