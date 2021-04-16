<?php
session_start();
if(!isset($_SESSION['user_id'])){require('login_tools.php');
load();
}
$page_title='Post Message';
?>
<html>
<head>
	<title>
		POST
	</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/post.css">
<body>
	 <header>
            <div class="content-wrapper">
                <h1>FITNESS</h1>
                <nav class=".navigation">
                    <a href="index.php">Home</a>
                    <a href="Services.php">Services</a>
                    <a href="forum.php">Blog</a>
                    <a href="post.php">Post</a>
                    <a href="shop/index.php">Shop</a>
                    <a href="goodbye.php">Logout</a>
                </nav>
            </div>
        </header>
<!-- Responsive Contact Page with Dark Mode and Form Validation (vanilla JS).

*Designed & built for desktop and tablets with viewport width >= 720px and in landscape orientation.  -->

<div class="contact-container">
  <div class="left-col">

  </div>
  <div class="right-col">
    <h1>WRITE SOMETHING</h1>
    
    <form action="post_action.php" method="POST" accept-charset="utf-8">
      <label for="subject">Subject</label>
  <input type="text" id="name" name="subject" placeholder="Enter Subject" required>
      <label for="message">Message</label>
  <textarea rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
      <!--<a href="javascript:void(0)">--><button type="submit" id="submit" name="submit" value="submit">POST</button>
  
</form>
<div id="error"></div>
<div id="success-msg"></div>
  </div>
</div>

<!-- Image credit: Oliver Sjöström https://www.pexels.com/photo/body-of-water-near-green-mountain-931018/  -->
</body>
</html>

