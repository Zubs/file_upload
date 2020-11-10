<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Upload Successful</title>

	<!-- Just some little style -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	
	<!-- Let's have our logic here -->
	<?php

		// Just to be sure the form was submitted
		if (isset($_POST['submit'])) {

			// Get form inputs
			$name = $_POST['name'];
			$image = $_FILES['image']['name'];

			/*echo $image;
			return 0;*/

			// Just some additional validation, not like we really need the name
			if (!empty($name)) {

				// Store the image to the images folder
				$target = 'images/'.$image;
				move_uploaded_file($_FILES['image']['tmp_name'], $target) or die("Unable to save image");

				// Connect To Database 
				$connection = mysqli_connect('localhost', 'root', '', 'file_upload') or die("Unable to connect to db");

				// Write the MySQL query here
				$query = "INSERT INTO images VALUES (0, '$name', '$image', now())";

				// Run The Query
				$result = mysqli_query($connection, $query) or die("Unable To Add New Row");

				// Output some HTML
	?>
		<div class="card text-center py-5 shadow my-5">
			<h1 class="alert alert-success">Uploaded Your Images Successfully</h1>
			<small>You can view uploaded images <a href="images.php">here</a> or add a new one <a href="index.html">here</a>.</small>
		</div>
	<?php
			} else {
				die();
			}
		}

	?>
</body>
</html>
