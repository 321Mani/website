<?php

$host="localhost";
$user="root";
$pass="";
$dbase="login";

$database=mysqli_connect($host,$user,$pass,$dbase);

if(!$database)
{
	echo"Not Connected";
}
?>