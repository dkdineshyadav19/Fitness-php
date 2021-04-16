<?php
$page_title='Register';
if($_SERVER['REQUEST_METHOD']=='POST')
{
  require('connection.php');
  $errors=array();
     if (!preg_match("/^[a-zA-Z ]*$/",$_POST['first_name'])) {
       $errors[] = "Only letters and white space allowed!!";}
       if (!preg_match("/^[a-zA-Z ]*$/",$_POST['last_name'])) {
       $errors[] = "Only letters and white space allowed!!";}
  if(empty($_POST['first_name']))
    {$errors[]='Enter your first name!!.';}
  else
    {$fn=mysqli_real_escape_string($dbc,trim($_POST['first_name']));}
  if(empty($_POST['last_name']))
    {$errors[]='Enter your last name!!.';}
  else
    {$ln=mysqli_real_escape_string($dbc,trim($_POST['last_name']));}

    if(empty($_POST['email']))
    {$errors[]='Enter your email address!!.';}
  else
    {$e=mysqli_real_escape_string($dbc,trim($_POST['email']));}
  if(!empty($_POST['pass1']))
  {
    if($_POST['pass1']!=$_POST['pass2'])
    {
      $errors[]='Passwords do not match!!.';
    }
    else
      {$p=mysqli_real_escape_string($dbc,trim($_POST['pass1']));}
  }
  else
  {
    $errors[]='Enter your password!!';
  }
  if(empty($errors))
     {
      $q="select user_id from users where email='$e'";
      $r=mysqli_query($dbc,$q);
      if(mysqli_num_rows($r)!=0)
      {
        $errors[]='Email address already registered.<a href="login.php">Login</a>';
      }
     

}
if(empty($errors))
{
     $q="insert into users (first_name,last_name,email,pass,reg_date)
     values('$fn','$ln','$e',SHA('$p'),NOW())";
     $r=mysqli_query($dbc,$q);
     if($r)
     {
       echo '<h1 style="color:red">Registered!</h1>
       <p ><h1 style="color:black">You Are Now Registered.</h1></p>
       <p><a href="login.php"><h1>Login</h1></a></p>';

     }
     mysqli_close($dbc);
     exit();
     }
     else
     {
          echo '<h1>Error!</h1>
          <p style="color:red"id="err_msg">The following error(s) occured:<br>';
          foreach($errors as $msg)
          {
            echo "-$msg<br>";
          }
          echo 'Please try again';
          mysqli_close($dbc);
     }
 }
 ?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="css/login.css">
  <title></title>
</head>
<body>
<section class="wrapper">
  <div class="content">
    <header>
      <h1>REGISTER</h1>
    </header>
    <section>
      <form action="register.php" method="post" class="login-form">
        <div class="input-group">
          <label for="username">First Name</label>
          <input type="text" preg_match("/^[a-zA-Z ]*$/") placeholder="First_Name"name="first_name" value="<?php if (isset($_POST['first_name']))echo $_POST['first_name'];?>">

          <label for="username">Last Name</label>
          <input type="text" placeholder="Last_Name" name="last_name" value="<?php if (isset($_POST['last_name']))echo $_POST['last_name'];?>">

          <label for="username">Email Adress</label>
          <input type="email" name="email" placeholder="Email"value="<?php if (isset($_POST['email']))echo $_POST['email'];?>">

        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" AUTOCOMPLETE="off" placeholder="Password"name="pass1" value="<?php if (isset($_POST['pass1']))echo $_POST['pass1'];?>">

          <label for="password">Confirm Password</label>
          <input type="password" AUTOCOMPLETE="off" name="pass2"placeholder="Confirm...." value="<?php if (isset($_POST['pass2']))echo $_POST['pass2'];?>">

        </div>
        <div class="input-group"><input class="button" type="submit" class="regbutton"value="Register"/></div>
      </form>
    </section>
    <footer>
      <a href="login.php" title="Forgot Password">Login</a>
    </footer>
  </div>
</section>
</body>
</html>