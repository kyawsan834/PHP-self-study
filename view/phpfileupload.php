<!DOCTYPE html>
<hmtl>

	<head>

		<title>PHP Request Response</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">


		 </head>

		 <body>






		 	<h2 class="text-center text-warning my-2">PHP File Upload</h2>

		 	<form action="" method="POST" enctype="multipart/form-data">
		 		<div class="container-fluid">

		 		<div class="row">
		 			<div class="col-md-6 col-12 mx-auto my-2">

		 				<div class="form-group mb-2">
		 					<label for="file">Choose Any File</label>
		 					<input type="file" name="file" id="" class="form-control" />
		 				</div>

		 				<div class="form-group mb-2" >
		 					<input type="submit" name="btnfileupload" id="btnfile" class="btn btn-secondary" value="Upload" />
		 				</div>
		 				
		 			</div>
		 		</div>
		 		
		 	</div>
		 	</form>

		 	




		 	<?php



		 		// echo"hello this is client";

		 		// echo("hay"."<br/>");

		 		var_dump($_REQUEST);

		 		echo "<pre>";

		 		var_dump($_FILES);

		 		echo "</pre>";

		 		// echo $_POST;

		 		if(isset($_POST['btnfileupload'])){
		 			echo("<pre>");
		 			var_dump($_FILES);
		 			var_dump($_FILES["file"]);
		 			$inputUpload = $_FILES["file"];
		 			var_dump($inputUpload);
		 			print_r("<h2>");
		 			$getImage = $_FILES["file"]["name"];
		 			var_dump($getImage);
		 			$gettempImg= $_FILES["file"]["tmp_name"];
		 			var_dump($gettempImg);

		 			$target_file =  "../assets/img/".$getImage;
		 			var_dump($target_file);

		 			// move_uploaded_file($gettempImg, $target_file);
		 			// echo("success file uploading.");

		 			if(!(move_uploaded_file($gettempImg,$target_file))){
		 				echo("error in uploading file");

		 			}else{
							echo("file upload success");  		 					
		 			}

		 			print_r("<h2/>");
		 			echo("</pre>");

		 		}else{
		 			echo "Upload file require";
		 		}



		 	 ?>











		 	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

		 	


		 	
		 </body>

	</hmtl>