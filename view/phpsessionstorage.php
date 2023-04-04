<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
</head>

<body>

	<h2>PHP Session</h2>







	<?php


	//declare session storage to user
	// session_start();


	// add item to storage to session storage
	// $_SESSION['keyname'] = "I am session storage";

	// $_SESSION['name'] = "John Doe";

	// $_SESSION['username'] = "Elon Musk";
// 
	// echo $_SESSION['keyname']."<br/>";

	// echo  $_SESSION['name']."<br/>";

	// echo  $_SESSION['username']."<br/>";

	// remove all session storage data

	// session_destroy();	 



	 ?>

	 <?php

	 session_start();

	session_destroy();
	 

	 echo $_SESSION['keyname']."<br/>";

	echo  $_SESSION['name']."<br/>";

	echo  $_SESSION['username']."<br/>";


	  ?>
	
</body>
</html>