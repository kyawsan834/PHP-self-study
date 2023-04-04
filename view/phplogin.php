<!DOCTYPE html>
<html>
<head>
	<title>PHP Login</title>
</head>

<body>



	<h2>PHP Login</h2>

	<form action="" method="POST">
		
		Email <input type="email" name="email" id="email" class="form-control" />
		<br/>

		Password <input type="password" name="password" id="password" class="form-control" />

		<br/>

		<input type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary rounded-0" value="Login" />

	</form>







	<?php



	// echo ("hay");

	$username = "admin@gmail.com";
	$password = '$2y$10$vt9k3rv/1n0lMQfTHdEj0eq8Vf8pRrBVqhTXE/yzswrVuPcx6GSQi'; //admin123

	// double quote with hash value will shown warning for not use. 
	// use only single quote

	// $passwordhash = password_hash($password,PASSWORD_BCRYPT);
	// echo ($passwordhash);


	

	if(!(isset($_POST["btnsubmit"]))){
		echo("Empty field require");
	}else{
		$useremail = $_POST["email"];
		$userpassword = $_POST["password"];

		if(!($useremail == $username && password_verify($userpassword, $password))){
			echo("login failed.");
		}else{
			echo ("login success.");
		}
	}




	 ?>
	
</body>
</html>