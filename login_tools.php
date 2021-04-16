<?php
function load($page = 'login.php')
{
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	$url = rtrim($url, '/ \\');
	$url .= '/' . $page;
	header("Location:$url");
	exit();
}
function validate($dbc, $email = '', $pwd = '')
{
	$errors = array(); //define array 'error'
	if (empty($email)) // check if email field is empty or not .
	{
		$errors[] = 'Enter your email address.'; // if email is empty print this
	} else {
		$e = mysqli_real_escape_string($dbc, trim($email));  // otherwise execuet this 
	}
	if (empty($pwd)) {
		$errors[] = 'Enter your Password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($pwd));
	}
	if (empty($errors)) { // if error array is empty means email and passwaord entered by user.
		$q = "select user_id,first_name,last_name from users where email='$e' and pass=SHA1('$p')";
		$r = mysqli_query($dbc, $q); // mysqli_query used for execute sql query. and this statement executing $q query in database
		if (mysqli_num_rows($r) == 1) {
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC); //Columns are returned into the array having the fieldname as the array index.
			return array(true, $row);
		} else {
			$errors[] = 'Email and Password Not Found';
		}

		return  array(false, $errors);
	}
}
