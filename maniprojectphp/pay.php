<?php
include"db.php";
if (isset($_POST['submit']))
	{   
$user=$_POST['user'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$amt=$_POST['amount'];
 $pay_to='MCA Foundation (Save Tree , Save India)';
    include 'Instamojo.php';
   
$api = new Instamojo\Instamojo('test_3fca8eebb469e6292a0003326f6', 'test_69ae86fc88c4fccf0809d1641df', 'https://test.instamojo.com/api/1.1/');
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $pay_to,
            "user_name" => $user,
            "email" => $email,
            "phone" => $phone,
            "amount" => $amt,
            "send_email" => true,
            "allow_repeated_payments" => false,
            "redirect_url" => "http://localhost/Payment/thankyou.php"
            ));
       // print_r($response);
        $url=$response['longurl'];
        header("location:$url");
        }
        catch (Exception $e) {
            print('Error: ' . $e->getMessage());
        }
        $query="INSERT INTO payment  VALUES ('null','$user','$email','$phone','$amt','$pay_to')";
        $run=mysqli_query($db,$query);
    }
?>