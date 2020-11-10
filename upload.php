<?php

// Just to be sure the form was submitted
if (isset($_POST['submit'])) {

	// Get form inputs
	$name = $_POST['name'];

	// Just some additional validation, not like we really need the name
	if (!empty($name)) {

		// Connect To Database 
		$connection = mysqli_connect('localhost', 'root', '', 'file_upload') or die("Unable to connect to db");

		// Write the MySQL query here
		$query = "INSERT INTO images (name, image, date_) VALUES ()";

		// Run The Query
		$result = mysqli_query($query) or die("Unable To Add New Row");
	} else {
		die();
	}
}
