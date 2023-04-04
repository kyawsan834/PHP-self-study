<!DOCTYPE html>
<html>

<head>

	<title>PHP Request Response</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	
</head>

<body>

	<h2> Server </h2>

	<?PHP

		echo"hello this is server";

		var_dump($_POST);

	 ?> 

	 <button type="button" id="btnback" onclick="back();" class="btn btn-secondary">Back</button>



	 <table class="table">
		 		<tr>
		 			<th>User Data</th>
		 		</tr>
		 		<tr>
		 			<td>
		 				<?php

		 					 var_dump($_REQUEST["username"]);

		 				 ?>
		 			</td>


		 			<td>
		 				<?php

		 					 var_dump($_REQUEST["userage"]);

		 				 ?>
		 			</td>

		 			<td>
		 				<?php

		 					var_dump($_REQUEST['gender']);

		 				 ?>
		 			</td>

		 			<td>
		 				<?php

		 					 var_dump($_REQUEST["userrole"]);

		 				 ?>
		 			</td>
		 		</tr>
		 	</table>




	 <script type="text/javascript">


	 	function back(){

	 		




	 		window.location.href = "client.php";

	 	}
	 	
	 </script>



	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	
</body>


</html>