<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My File Upload Project</title>

	<!-- Just some little style -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="container py-5">
	<div class="card text-center py-5 shadow my-5">
		<h1>Upload Your Images</h1>
		<small>You can view uploaded images <a href="images.php">here</a></small>
		<br>
		<br>
		<form action="upload.php" method="POST" enctype="multipart/form-data" class="container">

			<!-- This sets max upload size -->
			<!-- <input type="hidden" name="MAX_FILE_SIZE" value="32768"> -->

			<!-- Some client side validation is in place -->
			<input type="text" name="name" class="form-control mb-3" placeholder="Enter Your Name..." required="">
			<input type="file" name="image" class="form-control mb-3">
			<input type="submit" value="Upload" class="btn btn-primary form-control" name="submit">
		</form>
		<footer class="text-center mt-5">
			<p>This was written in <a target="_blank" href="https://php.net">PHP</a> with <span class="text-danger">LOVE</span> by <a href="http://zubs.github.io/Portfolio" target="_blank">Zubair Idris Aweda</a> | &copy; 2020</p>
		</footer>
	</div>
</body>
</html>
