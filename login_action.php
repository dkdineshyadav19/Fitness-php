<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	require('connection.php'); // require databse.
	require('login_tools.php');
	list($check, $data) = validate($dbc, $_POST['email'], $_POST['pass']); // $_POST is an array which has the value passed by the http post menthod
	if ($check) {
		session_start();
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['first_name'] = $data['first_name'];
		$_SESSION['last_name'] = $data['last_name'];
		load('index.php');
	} else {
		$errors = $data;
	}
	mysqli_close($dbc); //close database connection;
}
include('login.php');
