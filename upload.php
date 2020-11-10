<?php

// Get form inputs
$name = $_POST['name'];

// Just to be sure the form was submitted
if (isset($_POST['submit'])) {

	// Just some additional validation, not like we really need the name
	if (!empty($name)) {

		// Connect To Database
		$connection = mysql_connect() or die("Unable to connect to db")
	} else {
		die();
	}
}
