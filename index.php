<!DOCTYPE html>
<html>

<head>
  <title>FITNESS</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>

  <header class="header1">
    <div class="content-wrapper">
      <h1>FITNESS</h1>
      <nav class=".navigation">
        <a href="#">Home</a>
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
  <div class="container">
    <div class="row1">
      <center>
        <h1 id="p1">START WHAT MATTERS THE MOST</h1>
        <p id="p2">We're a private personal training studio in Indore who help busy men and women stop "trying to get in shape", and finally achieve a health and body transformation they won’t rebound fro</p>
      </center>
      <center><a id="but1" href="Services.php">START</a></center>
    </div>
    <div class="row">
      <div class="column">
        <p id="p1">
          <?php
          if (isset($_SESSION['user_id'])) {
            echo "WELCOME {$_SESSION['first_name']}";
          } else {
            echo "START WHAT MATTERS THE MOST";
          } ?>
        </p>
        <p id="p2">
          <?php
          if (isset($_SESSION['user_id'])) {
            echo "Hello Here You can select options form various type of traning which are available for you by these traning In just 42 days we'll take you from feeling frustrated with your current trajectory, to feeling proud of your reinvigorated relationship with your health.
                    You can also watch training video from here...";
          } else {
            echo "We're a private personal training studio in Indore who help busy men and women stop 'trying to get in shape', and finally achieve a health and body transformation they won’t rebound from… ";
          } ?>

        </p>
        <a id="but1" class="btn1" href="Services.php">START</a>
      </div>
      <div id="col2" class="column">
        <center> <img id="img1" src="image/body3.png"></center>
      </div>
    </div>

    <center>
      <div class="contain2">
        <h1 id="h1">IT'S TIME TO PUT YOURSELF FIRST</h1>
        <p id="p3">We work with men and women that have let fitness slide down their list of priorities, and want to make a change Using our Armoury Transformation Formula, we'll guide you through our proven system of creating a healthier, happier and more confident version of yourself in the next 6 weeks- without boring workouts, or fad dietsBecause we believe fitness should enhance your life, rather than take away from it- every Armoury Transformation starts with an in-depth look at where you currently are, and creates an achievable path to where you want to be. Whether that's ditching the mid-afternoon energy slump so you can be active with your kids after school, banishing the expanding midsection that's making it harder to slide into your work trousers each passing year, or finally having the body confidence to buy clothes that show off your physique, rather than hide it</p>
      </div>
    </center>


    <br><br><br>
    <center>
      <div class="contain3">
        <div class="item one">
          <h1>WHAT WE DO</h1>
          <p>Our coaching options have been designed from the ground up to put<br> you and your goals first. From one-on-one training in your private<br> studio, to our renowned small group coaching and bespoke nutrition<br> packages- everything we offer has been battle-tested over a decadein<br> the field, to ensure the results you achieve are not only impressivein<br> the short term- but also sustainable for life.</p>
        </div>
        <div class="item two">
          <center><img src="image/img4.jpg"></center>
          <br>
          <center>
            <?php
            if (isset($_SESSION['user_id'])) {
              echo "<a style='font-size:1.5em; background-color:black; color:white;' id='but1' href='Services.php'>Group Training</a>";
            } else {
              echo "<h1>Small Group Coaching</h1>";
            }
            ?>

          </center>
          <center>
            <p>Our Small Group Coaching is unlike anything you'll have experienced before. In micro coaching groups of just 5:1, all your training is customised, recorded and coached by an experienced personal trainer. The balance of the motivational group environment and 1-2-1 attention makes it the perfect mix to produce fast results, without the bounce back</p>
          </center>
        </div>
        <div class="item three"><img src="image/img5.jpg">
          <br>
          <br>
          <center>
            <?php
            if (isset($_SESSION['user_id'])) {
              echo "<a style='font-size:1.5em;background-color:black; color:white;' id='but1' href='Services.php'>1:1 Personal Training</a>";
            } else {
              echo "<h1>1:1 Personal Training</h1>";
            }
            ?>
          </center>
          <center>
            <p>1:1 coaching is the ultimate investment in your health. You'll be working directly with your coach in our private studio, following a bespoke plan to ensure you hit your goals in record time. Whether you want to slim down, add muscle or anything in between, our personal training packages are the more impactful route to getting there
              ​​</p>
          </center>
        </div>
        <div class="item four"><img src="image/img6.jpg">
          <br><br>
          <center>
            <?php
            if (isset($_SESSION['user_id'])) {
              echo "<a style='font-size:1.5em;background-color:black; color:white;' id='but1' href='meal.php'>Nutrition Training</a>";
            } else {
              echo "<h1>Nutrition Training</h1>";
            }
            ?>

          </center>
          <center>
            <p>We'll teach you how to take control of your health and weight, without relying on any specific diet or products, with our 1-2-1 nutrition coaching. You'll working alongside a qualified nutritionist to build a sustainable approach together, so you'll not only hit your physique goals, but be able to stay there without rigid diets or unrealistic restrictions</p>
          </center>
        </div>
        <div class="item five"><img src="image/img7.jpg">
          <br><br>
          <center>
            <?php
            if (isset($_SESSION['user_id'])) {
              echo "<a style='font-size:1.5em;background-color:black; color:white;' id='but1' href='Services.php'>Online Training</a>";
            } else {
              echo "<h1>Online Training</h1>";
            }
            ?>


          </center>
          <center>
            <p>The Armoury's Online Coaching Packages have been created to take the guesswork out of getting in the best shape of your life. You'll be working 1-2-1 with your Personal Trainer through our Armoury Coaching app- where you'll get workouts designed specifically for you, progress monitored, regular check-ins and nutrition support for unrivalled results, anywhere in the world
            </p>
          </center>
        </div>
      </div>
    </center>
    <br><br><br><br>
    <center>
      <div class="contain4">
        <br><br>
        <h1>OUR MISSION</h1>
        <p>Committed to providing effective personal training in Milton Keynes and helping you achieve sustainable results, The Armoury Coaching Studio is designed to be different. Unlike traditional gyms and too-good-to-be-true weight loss plans, we don’t believe in short-term fixes. Instead, we’ll help you to set realistic goals - and achieve them

          If you’re desperate to get back into your favourite clothes that have been relegated to the back of the closet, are tired of your work shirts beginning to feel the strain around your stomach, and feel sick of no-longer having the “get-up-and-go” you felt when you were younger? Our mission is to help you get that mojo back, and to feel confident the next time you’re on a beach, making a presentation at work, or running around with your kids

          Training & addressing your diet with the correct approach adds to your life exponentially, through increasing your energy, decreasing your stress, heightening your mood, boosting long-term health, and equipping you with confidence in your everyday strength and appearance. Which is exactly why we designed The Armoury from the ground up to be the best Personal Training & Small Group Coaching Studio in Milton Keynes. If you’d like to be part of a coaching environment that puts you first? Get in touch</p>
        <br><br><br><br>
        <a class="btn1" href="contact.php">Contact</a>
      </div>
    </center>
  </div>
</body>

</html>