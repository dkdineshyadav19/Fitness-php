<!DOCTYPE html>
<html>

<head>
  <title>HOME</title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
  <header class="header1">
    <div class="content-wrapper">
      <h1>FITNESS</h1>
      <nav class=".navigation">
        <a href="index.php">Home</a>
        <a href="forum.php">Blog</a>
        <?php
        session_start();
        if (isset($_SESSION['user_id'])) {
          echo "
                      <a href='Services.php'>Services</a>
                      <a href='shop/index.php'>Shop</a>
                      <a href='post.php'>Post</a>
                      <a href='goodbye.php'>Logout</a>";
        } else {
          echo "
                    <a href='login.php'>Login</a>
                    <a href='register.php'>Register</a>";
        } ?>
      </nav>
    </div>
  </header>
</body>

</html>

<?php
if (!isset($_SESSION['user_id'])) {
}
$page_title = 'Forum';
//include('includes/header.php');
require('connection.php');

$q = "select * from forum";
$r = mysqli_query($dbc, $q);

if (mysqli_num_rows($r) > 0) {
  echo '<div class="container-fluid">
  <div class="d-flex flex-wrap flex-row font-monospace fw-bold">';
  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<div class="card text-light bg-dark m-2 mycard" style="max-width: 18rem;">
            <div class="card-header font-monospace fw-bold">' . $row['first_name'] . ' ' . $row['last_name'] . '</div>
            <div class="card-body">
            <h5 class="card-title border-light border-bottom">' . $row['subject'] . '</h5>
            <p class="card-text">' . $row['message'] . '</p>
            </div>
            </div>
       ';
  }
  echo ' </div></div>';
} else {
  echo '<p>There are currently no messages.</p>';
}
mysqli_close($dbc);
?>