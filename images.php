<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Uploaded Images</title>

	<!-- Just to add some style -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container py-5">
	<div class="card text-center py-5 shadow my-5">
		<h1>Here's all our uploaded images</h1>
		<small>You can add new images <a href="index.html">here</a></small>
		<div class="row">

			<!-- Let's handle logic -->
			<?php

				// Connect to database
				$conn = mysqli_connect('localhost', 'root', '', 'file_upload') or die("Unable to connect to db");

				// Fetch images from database
				$query = "SELECT * FROM images";

				// Run the query to actually get the data
				$data = mysqli_query($conn, $query) or die("Unable to fetch");

				// Display images, by looping over them
				while ($row = mysqli_fetch_array($data)) {
			?>

				<!-- I decided to write normal HTML instead of using too many echos -->
				<div class="col-md-6 px-5 py-5">
					<div class="card">
						<div class="card-body">
							<img src="#" alt="Image will go here" width="100%">
						</div>
						<div class="card-title">Tets</div>
					</div>
				</div>
			<?php
				}

				// Close connection
				mysqli_close($conn);

			?>
		</div>
	</div>
</body>
</html>
