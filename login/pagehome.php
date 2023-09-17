<?php

session_start();

?>
<html>
<title>home</title>
<head>
<link rel="stylesheeet" type="text/css" href="loginstyle.css">
</head>
<body bgcolor="blue" align="center" color="yellow">

<h1>Hello,<?php echo $_SESSION['USERNAME']?></h1>

<a href="pagelogout.php" color="red">logout</a>
</body>
</html>


