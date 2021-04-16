<?php
$page_title = 'Login';
if (isset($errors) && !empty($errors)) { //isset check if error is set or not.
  echo '<p id="err_msg">Oops!..There was a problem:<br>';
  foreach ($errors as $msg) {
    echo "-$msg<br>";
  }
  echo 'Please try again or 
  <a href="register.php">Register</a></p>';
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>LOGIN</title>
</head>

<body>
  <section class="wrapper">
    <div class="content">
      <header>
        <h1>Welcom</h1>
      </header>
      <section>
        <form action="login_action.php" method="post" class="login-form">
          <!-- it will send all the data to the login_action file. -->
          <div class="input-group">
            <label for="username">Username or Email</label>
            <input type="text" name="email" placeholder="Username or Email" autofocus="autofocus" autocomplete="on" id="txtuser">
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" AUTOCOMPLETE="off" placeholder="Password" name="pass" id="txtpass">
          </div>
          <div class="input-group"><input type="submit" class="regbutton button" value="Login" /></div>
        </form>
      </section>
      <footer>
        <a href="register.php" title="Forgot Password">Register</a>
      </footer>
    </div>
  </section>


</body>

</html>