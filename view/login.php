<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Mini Project</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid py-5">
		<div class="row">
			<div class="col-md-6 mx-auto">

				<div class="card">

					<div class="card-header">

						<div class="card-title">
							<h2 class="text-primary text-center">Login</h2>
						</div>
						
					</div>

					<div class="card-body py-2">
						<form method="POST">
							<div class="form-group my-4 py-2">
						 	<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" />
						</div>

						<div class="form-group my-4 py-2">
						 	<input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" />

						 </div>

 
						 	<div class="d-grid mb-4 py-2">
						 		<button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary ">Login</button>
						 	</div>
						</div>
						</form>

						
						
					</div>

					<div class="card-footer bg-mute">

							<div class="row">
								<div class="col-md-6 mx-auto">
									 <ul class="list-inline my-4">
								<li class="list-inline-item"><a href="login.php" class="list-group-item-action">Already Account? Login?</a></li>
								<li class="list-inline-item"><a href="register.php" class="list-group-item-action">Signup?</a></li>
								<li class="list-inline-item"><a href="logout.php" class="list-group-item-action">Logout?</a></li>
							</ul>
								</div>
							</div>
							 
						</div>
					
				</div>
				
			</div>
		</div>
	</div>


	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>







	 <?php



	 	

	 	


	  ?>
	
</body>
</html>