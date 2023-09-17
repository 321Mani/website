<?php

include"db.php";

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$phone=$_POST['number'];
	
	$pass1=md5($pass);
	
	$qry="INSERT INTO tb_login values('null','$fname','$uname','$pass1','$email','$phone')";
	
	$result=mysqli_query($db,$qry);
	
	if(!$result)
	{
		echo"not connected";
	}
	else
	{
		header('location:pagelogin.php');
		exit();
	}
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<title>REGISTER</title>

</head>
<body>




<div class="container-fluid" >
  <div class="text-center">
  </div>
  <div class="row" style="max-height: 700px;">
    <div class="col-sm-5" style="float:left;margin-top:0px; margin-left: 100px;">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Registration Form</h1>
        </div>
        <div class="panel-body">
        <form method="post" action="" name="myForm" onsubmit="return validateForm()">
          <?php 

                        if (isset($_GET['status'])) {
                            $id=$_GET['status'];
                            $msg=$_GET['msg'];
                            ?>
                            <div id="$id" class="alert alert-danger">
                                <strong></strong><h4 style=";"> &nbsp; <?php echo $msg; ?>! <a href="index.php" style="color: ;">click here</a></h4>
                            </div>
                            <?php
                        }

                        ?>
      
        <div class="form-group">
           <label for="usr" class="text">FULLNAME</label>
           <input type="text" class="form-control" placeholder="enter your fullname" id="usr" name="fname" required="" />

            </div>
             <div class="form-group">
           <label for="usr" class="text">USERNAME</label>
          <input type="text" class="form-control" placeholder="enter your username" id="usr" name="uname" required="" />
            </div>
             <div class="form-group">
           <label for="usr" class="text">PASSWORD</label>
            <input type="password" class="form-control" id="usr"  placeholder="enter your password" name="pass" required=""> 
            </div>
			<div class="form-group">
           <label for="E-mail" class="text">EMAIL</label>
             <input type="email" class="form-control" id="usr"  placeholder="enter your email" name="email" required="">
              </div>
      <div class="form-group">
        <label for="uname" class="text">PHONENUMBER</label>
        <input type="text" class="form-control" id="number" placeholder="Enter +91phone number" name="number" required="">
      </div>
	  <br>
      <div id="recaptcha-container"></div>
	  
      <button type="button" onclick="phoneAuth();">Send Otp</button>
  
	</br>
			   </br>
	
			<div class="form-group">
      <input type="text" class="form-control" id="verificationCode" placeholder="Enter verification code">
      
      </div>
     
	 </br>
	</br>
	 
      <button type="button" onclick="codeverify();">Verify code</button>
	
			      
               
       <label><input type="checkbox" value="" checked >Terms & Conditions</label><br><br>

               <div class="form-group" id="btn">
                  <button type="submit" value="Register" class="btn btn-danger" id="usr" name="submit" style="width: 100%; height: 50px; border-radius:360px; background:#000;border: none; ">Sign Up</button>
                </div>
                <label><a href="pagelogin.php">Direct Login</a></label>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    appId: "1:99446038979:web:6876f093329352b3c71d76",
    apiKey: "AIzaSyDqoyvnqM44fvu4Gvlfc_Dj1Di2VztJxK4",
    authDomain: "phone-auth-76a5e.firebaseapp.com",
    projectId: "phone-auth-76a5e",
    storageBucket: "phone-auth-76a5e.appspot.com",
    messagingSenderId: "99446038979",
    measurementId: "G-CCJ2B0YHR3"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
	
	<script>
	window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById('number').value;
    // alert(number);
    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        alert("Message sent");
    }).catch(function(error) {
        alert(error.message);
    });
}

function codeverify() {
    var code = document.getElementById('verificationCode').value;


    coderesult.confirm(code).then(function(result) {
        alert("Successfully Verified");
		
        var user = result.user;
        console.log(user);
    }).catch(function(error) {
        alert(error.message);
    });
}
	</script>
	

</body>
</html>