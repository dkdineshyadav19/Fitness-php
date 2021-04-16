<?php
session_start();
require('login_tools.php');
if (!isset($_SESSION['user_id'])) {
	load();
}

$page_title = 'Post error';
//include('includes/header.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (empty($_POST['subject'])) {
		echo '<p style="color:red">Please enter a subject for this post</p>';
	}
	if (empty($_POST['message'])) {
		echo '<p style="color:red">Please enter a message for this post</p>';
	}
	if (!empty($_POST['subject']) && !empty($_POST['message'])) {
		require('connection.php');
		$q = "insert into forum
  	(first_name,last_name,subject,message,post_date)
  	values(
  		'{$_SESSION[first_name]}',
  		'{$_SESSION[last_name]}',
  		'{$_POST[subject]}',
  		'{$_POST[message]}',
  		NOW())";
		$r = mysqli_query($dbc, $q);

		if (mysqli_affected_rows($dbc) != 1) {
			echo '<p>Error</p>' . mysqli_error($dbc);
		} else {
			load('forum.php');
		}
		mysqli_close($dbc);
	}
}
echo '<p><a href="forum.php"><h1 style="color:blue">Forum</h1></a>';
