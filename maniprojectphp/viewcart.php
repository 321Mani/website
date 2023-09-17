

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" type="text/css" href="products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <style>
 #button {
	 color:white !important;
	 background-color: blue;
	 width:300px;
	 height:40px;
	 font-size:20px;
 }
 h3 {
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
      </ul>
<h3>WELCOME:<?php echo $_SESSION['username']?></h3>
<form>
<label>
<a href="logout.php" style="float:right;" class="btn btn-danger">Logout<a></label>
</form>
  
    </div>
  </div>
</nav>
<div class="container-fluid">
<div class="row">


<?php
//echo"<pre>";
//print_r($_SESSION["cart"]);
//echo"</pre>";
?>

<table class="table table-bordered" >
<tr>
<th>PRODUCT NAME</th>
<th>QUANTITY</th>
<th>PRICE</th>
<th>AMOUNT</th>
<th>OPERATION</th>
</tr>
<?php
if(isset($_GET["del"]))
{
	foreach($_SESSION["cart"] as $keys=>$values)
	{
	if($values["id"]==$_GET["del"])
	{
		unset($_SESSION["cart"][$keys]);
	}
	}
}
 
   if(!empty($_SESSION["cart"]))
   {
	   $total=0;
	   foreach($_SESSION["cart"] as $keys=>$values)
	   {
		   $amt=$values["qty"]*$values["price"];
		   $total+=$amt;
		   echo"
		   <tr>
		   <td>{$values["name"]}</td>
		   <td>{$values["qty"]}</td>
		   <td>{$values["price"]}</td>
		   <td>{$amt}</td>
		   <td><a href='viewcart.php?del={$values["id"]}' class='btn btn-danger'>Remove</a></td>
		   </tr>
			";
	   }
	   echo"<tr>
	   <td></td>
	   <td></td>
	   <td>Total</td>
	   <td>{$total}</td>
	   <td></td>
	   </tr>";
   }
   else
   {
	   echo"<script>alert('please select the product')</script>";
	   //header('location:product.php');
   }

?>


</table>

<div  class="text-center" >
<a href="payment.php" style="text-decoration:none;"><button  class="btn btn-secondary" id="button" style="color:white;">Go To Payment</button></a>
</div>


<br><br>


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
Copyrights@2023 Allrights reserved by supermarket.com This website is developed by manikandan
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