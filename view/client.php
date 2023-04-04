<!DOCTYPE html>
<hmtl>

	<head>

		<title>PHP Request Response</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


		 </head>

		 <body>






		 	<h2 class="text-center text-warning my-2">Client</h2>

		 	<form action="./server.php" method="POST" enctype="multipart/form-data">
		 		<div class="container-fluid">

		 		<div class="row">
		 			<div class="col-md-6 col-12 mx-auto my-2">
		 				<div class="form-group mb-2">

		 					<input type="text" name="username" id="username" class="form-control" placeholder="Enter your name" />
		 			
		 				</div>

		 				<div class="form-group mb-2">

		 					<input type="number" name= "userage" id="userage" class="form-control" placeholder="Enter your age" />
		 			
		 				</div>

		 				<div class="form-group mb-2">

		 							<label for="genderm">Male</label>
		 							<input type="radio" name= "gender" id="genderm" class="form-check" />

		 							<label for="genderf">Female</label>
		 							<input type="radio" name= "gender" id="genderf" class="form-check" />


		 			
		 				</div>

		 				<div class="form-group mb-2">

		 							<select class="form-select" name="userrole" >
		 								Check your role
		 								<option value="admin">Admin</option>
		 								<option value="admin">Developer</option>
		 								<option value="admin">User</option>

		 							</select>

		 			
		 				</div>

		 				<div class="form-group mb-2">

		 					<input type="submit" name="btnsave" id="" class="btn btn-primary" value="Verify" />
		 					
		 				</div>
		 			</div>
		 		</div>
		 		
		 	</div>
		 	</form>

		 	




		 	<?php



		 		// echo"hello this is client";



		 	 ?>











		 	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

		 	


		 	
		 </body>

	</hmtl>