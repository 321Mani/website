<?php

$host="localhost";
$pass="";
$user="root";
$dbase="phpproject";

$db=mysqli_connect($host,$user,$pass,$dbase);
if($db)
{
	//echo"connected";
}
else
{
	echo"not connected";
}