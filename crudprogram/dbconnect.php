<?php
$db=new mysqli("localhost","root","","manicrud");
if(!$db)
{
	die('error in database'.mysqli_error($db));
}
?>
