<!DOCTYPE html>
<html>

<head>
	<title>PHP Cookie</title>
</head>

<body>

	<h2>PHP Cookie</h2>







	<?php

	//cookie create (key,value);
	setcookie("keyname","123456", time() + (60 * 60 * 24 * 365 * 90 ));



	 ?>



	 <?php 

	 echo($_COOKIE['keyname']);

	 ?>
	
</body>

</html>