<?php
session_start();
 if(!isset($_SESSION['user_id']))
{
	  require('login_tools.php');
	  load();

}
$page_title='Ecart';
//include('includes/header.php');
require('connection.php');

$q="select * from forum";
$r=mysqli_query($dbc,$q);
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="css/HOME.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
 <header class="header1">
            <div class="content-wrapper">
                <h1>FITNESS</h1>
                <nav class=".navigation">
                    <a href="home.php">Home</a>
                    <a href="Services.php">Services</a>
                    <a href="forum.php">Blog</a>
                    <a href="post.php">Post</a>
                    <a href="shop/index.php">Shop</a>
                    <a href="goodbye.php">Logout</a>
        </nav>
    </div>
    </header>
   <div class="container">
       
   </div>
</body>
</html>
