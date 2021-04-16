<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  require('login_tools.php');
  load();
}
$page_title = 'Ecart';
//include('includes/header.php');
require('connection.php');

$q = "select * from forum";
$r = mysqli_query($dbc, $q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Meal Plans | Fitness Blender</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link href="css/FB.css" rel="stylesheet">

</head>

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

  <header class="basic">
    <div class="container">
      <h1 class="heading -large">Meal Plans</h1>
    </div>
  </header>

  <div class="container article-container">

    <section class="site__main article">

      <div class="mealplan-landing-section">
        <h5 class="heading -small caps-third demi -blue-type">CALENDAR-BASED PLANS</h5>
        <p>These programs utilize Fitness Blenders online calendar system allowing you to access your meal plan from anywhere you have access to Fitness Blenders website.</p>
        <div class="mealplan-landing-details">
          <div class="mealplan-landing-header">
            <div class="media">
              <a href="#" class="cancel-hover">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/plan/640/640-o_21_fb-meal-plan-eat-real-food-and-feel-great.jpg" sizes="
        (min-width: 941px) 550px,
        (max-width: 940px) calc(100vw - 10px),
      ">


              </a>
            </div>
            <div class="info">
              <div class="info-contents">
                <h2 class="heading -x-small caps-half demi details">Plan Details</h2>
                <div class="stats">
                  <ul class="details-list">
                    <li>
                      <span class="detail-header">Plan Length:</span>
                      <span class="detail-value demi">4 Weeks</span>
                    </li>
                    <li>
                      <span class="detail-header">Meal Type:</span>
                      <span class="detail-value demi">Omnivore</span>
                    </li>
                    <li>
                      <span class="detail-header">Format:</span>
                      <span class="detail-value demi">Calendar</span>
                    </li>
                  </ul>
                </div>


                <div class="vue add-to-bag">
                  <add-to-cart-button item-type="plan" :item-id="21" button-classes="-ico-txt -p-01"></add-to-cart-button>
                </div>

              </div>
            </div>
          </div>
          <div class="mealplan-landing-body">
            <h5 class="heading -medium"><a href="#">Fitness - 4 Week Meal Plan</a></h5>
            <p>
              <strong>Eat real food and feel great!</strong><br>
              This Fitness Blender Calendar based plan, built with registered dietitians and nutritionists, is a healthy, plant based meal plan which details 3 meals, and 3 snacks, every day for four weeks. There is a corresponding downloadable and printable grocery list for each week, and there are 5 different calorie allotments to choose from so that you can customize these plans to meet your exact goals (weight loss, gain, or maintenance). We have also included suggestions for modifying for food allergies, intolerance, and availability, as well as food costs, cooking for a family, and more. Couple this 4 Week Meal Plan with one of our Workout Programs for best results.
            </p>
            <p>
              <a href="#" class="demi">Learn More</a>
            </p>
          </div>
        </div>
      </div>

      <div class="mealplan-landing-section">
        <h5 class="heading -small caps-third demi -blue-type">EBOOK-BASED PLANS</h5>
        <p>These programs utilize an eBook format allowing you to view, print or upload it to an eReader device.</p>
        <div class="mealplan-landing-details">
          <div class="mealplan-landing-header">
            <div class="media">
              <a href="#" class="cancel-hover" target="_blank">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/ebooks/640/640-4-week-meal-plan-omnivore.jpg" sizes="
        (min-width: 941px) 550px,
        (max-width: 940px) calc(100vw - 10px),
      ">


              </a>
            </div>
            <div class="info">
              <div class="info-contents">
                <h2 class="heading -x-small caps-half demi details">Plan Details</h2>
                <div class="stats">
                  <ul class="details-list">
                    <li>
                      <span class="detail-header">Plan Length:</span>
                      <span class="detail-value demi">4 Weeks</span>
                    </li>
                    <li>
                      <span class="detail-header">Meal Type:</span>
                      <span class="detail-value demi">Omnivore</span>
                    </li>
                    <li>
                      <span class="detail-header">Format:</span>
                      <span class="detail-value demi">PDF Download</span>
                    </li>
                  </ul>
                </div>

                <div class="add-to-bag">
                  <a class="btn -material -ico-txt -p-01" href="#">
                    <i class="material-icons-outlined md-light btn-ico">exit_to_app</i>

                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="mealplan-landing-body">
            <h5 class="heading -medium"><a href="#" target="_blank">FB - 4 Week Omnivore Meal Plan and Nutrition Guide</a></h5>
            <p>
              Built with registered dietitians and nutritionists, this healthy, clean-eating meal plan details 3 meals, and 3 snacks, every day for four weeks. There is a corresponding grocery list for each week, and there are 5 different calorie allotments to choose from so that you can customize this plan to meet your exact goals (weight loss, gain, or maintenance). Includes suggestions for modifying for food allergies, intolerance, and availability, as well as food costs, cooking for a family, and more. Couple this 4 Week Meal Plan with our 8 Week Fat Loss Programs for foolproof results.
            </p>
          </div>
        </div>

        <div class="mealplan-landing-details">
          <div class="mealplan-landing-header">
            <div class="media">
              <a href="#" class="cancel-hover" target="_blank">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/ebooks/640/640-4-week-meal-plan-vegetarian.jpg" sizes="
        (min-width: 941px) 550px,
        (max-width: 940px) calc(100vw - 10px),
      ">


              </a>
            </div>
            <div class="info">
              <div class="info-contents">
                <h2 class="heading -x-small caps-half demi details">Plan Details</h2>
                <div class="stats">
                  <ul class="details-list">
                    <li>
                      <span class="detail-header">Plan Length:</span>
                      <span class="detail-value demi">4 Weeks</span>
                    </li>
                    <li>
                      <span class="detail-header">Meal Type:</span>
                      <span class="detail-value demi">Vegetarian</span>
                    </li>
                    <li>
                      <span class="detail-header">Format:</span>
                      <span class="detail-value demi">PDF Download</span>
                    </li>
                  </ul>
                </div>

                <div class="add-to-bag">
                  <a class="btn -material -ico-txt -p-01" href="#">
                    <i class="material-icons-outlined md-light btn-ico">exit_to_app</i>

                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="mealplan-landing-body">
            <h5 class="heading -medium"><a href="#" target="_blank">FB - 4 Week Vegetarian Meal Plan and Nutrition Guide</a></h5>
            <p>
              Built with registered dietitians and nutritionists, this healthy, clean-eating meal plan details 3 meals, and 3 snacks, every day for four weeks. There is a corresponding grocery list for each week, and there are 5 different calorie allotments to choose from so that you can customize this plan to meet your exact goals (weight loss, gain, or maintenance). Includes suggestions for modifying for food allergies, intolerance, and availability, as well as food costs, cooking for a family, and more. Couple this 4 Week Meal Plan with our 8 Week Fat Loss Programs for foolproof results.
            </p>
          </div>
        </div>

        <div class="mealplan-landing-details">
          <div class="mealplan-landing-header">
            <div class="media">
              <a href="#" class="cancel-hover" target="_blank">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/ebooks/640/640-4-week-meal-plan-vegan.jpg" sizes="
        (min-width: 941px) 550px,
        (max-width: 940px) calc(100vw - 10px),
      ">


              </a>
            </div>
            <div class="info">
              <div class="info-contents">
                <h2 class="heading -x-small caps-half demi details">Plan Details</h2>
                <div class="stats">
                  <ul class="details-list">
                    <li>
                      <span class="detail-header">Plan Length:</span>
                      <span class="detail-value demi">4 Weeks</span>
                    </li>
                    <li>
                      <span class="detail-header">Meal Type:</span>
                      <span class="detail-value demi">Vegan</span>
                    </li>
                    <li>
                      <span class="detail-header">Format:</span>
                      <span class="detail-value demi">PDF Download</span>
                    </li>
                  </ul>
                </div>

                <div class="add-to-bag">
                  <a class="btn -material -ico-txt -p-01" href="#">
                    <i class="material-icons-outlined md-light btn-ico">exit_to_app</i>

                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="mealplan-landing-body">
            <h5 class="heading -medium"><a href="#" target="_blank">FB - 4 Week Vegan Meal Plan and Nutrition Guide</a></h5>
            <p>
              Built with registered dietitians and nutritionists, this healthy, clean-eating meal plan details 3 meals, and 3 snacks, every day for four weeks. There is a corresponding grocery list for each week, and there are 5 different calorie allotments to choose from so that you can customize this plan to meet your exact goals (weight loss, gain, or maintenance). Includes suggestions for modifying for food allergies, intolerance, and availability, as well as food costs, cooking for a family, and more. Couple this 4 Week Meal Plan with our 8 Week Fat Loss Programs for foolproof results.
            </p>
          </div>
        </div>




      </div>

    </section>

    <aside role="complementary" class="site__sidebar">
      <div class="aside-content">
        <!-- offset-top -->
        <div class="sidebar__segment ad ">
          <div class="ad-wrap">
            <ins class="adsbygoogle gad-sidebar" style="display:block" data-ad-client="ca-pub-2716376464462791" data-ad-slot="1334371830">
            </ins>
          </div>
        </div>
        <div class="sidebar__segment">
          <h2 class="heading -x-small demi caps">Featured</h2>

          <div class="sidebar-flex">
            <div class="sidebar-article">
              <a href="#" class="image-link">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-o_1_fb-30-trial-fitness-blenders-fat-loss-program-for-busy-people.jpg" class="videothumb" width="340" height="180" sizes="
        (min-width: 941px) 320px,
        (min-width: 768px) and (max-width: 940px) calc(33.3333vw - 24px),
        (min-width: 601px) and (max-width: 767px) calc(50vw - 18px),
        (max-width: 600px) calc(100vw - 12px)
      ">
              </a>
              <span class="small-caps demi">Programs</span>
              <h3 class="heading -x-small">
                <a class="demi" href="#">FB 30 Trial - Fitness Blender&#039;s Fat Loss Program For Busy People</a>
              </h3>
              <p class="compact">30 Minute workouts can have a significant impact on your health, fitness, bodyweight and body fat. This 2 week trial is a great way to jumpstart your fitness goals and try out our home workout programs.</p>
            </div>

            <div class="sidebar-article">
              <div class="exclusive-item">FB Plus</div>
              <a href="#" class="image-link">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/video/320/320-766-light-toning-posture-workout-for-stiff-shoulders-back-and-core-af09.jpg" class="videothumb" width="340" height="180" sizes="
        (min-width: 941px) 320px,
        (min-width: 768px) and (max-width: 940px) calc(33.3333vw - 24px),
        (min-width: 601px) and (max-width: 767px) calc(50vw - 18px),
        (max-width: 600px) calc(100vw - 12px)
      ">
              </a>
              <span class="small-caps demi">Workouts</span>
              <h3 class="heading -x-small">
                <a class="demi" href="#">Light Toning Posture Workout for Stiff Shoulders, Back and Core</a>
              </h3>
              <p class="compact">This posture workout focuses on range of motion, strengthening within that range of motion, toning and light active stretching.</p>
            </div>

            <div class="sidebar-article">
              <div class="exclusive-item">FB Plus</div>
              <a href="" class="image-link">
                <img src="https://d18zdz9g6n5za7.cloudfront.net/blog/320/320-729-3-common-myths-about-lazy-gluteswith-exercises-for-glute-activation-a49f.jpg" class="videothumb" width="340" height="180" sizes="
        (min-width: 941px) 320px,
        (min-width: 768px) and (max-width: 940px) calc(33.3333vw - 24px),
        (min-width: 601px) and (max-width: 767px) calc(50vw - 18px),
        (max-width: 600px) calc(100vw - 12px)
      ">
              </a>
              <span class="small-caps demi">Articles</span>
              <h3 class="heading -x-small">
                <a class="demi" href="#">3 Common Myths About Lazy Glutes and Exercises for Glute Activation</a>
              </h3>
              <p class="compact">Understand the three most common myths about lazy glutes and exercises that can get you back on track.</p>
            </div>

          </div>
        </div>

      </div>
    </aside>

  </div>

  </main>

  <script src="https://cloudfront.fitnessblender.com/assets/bundle/app-eb8d9c34113714a6d3c0.js"></script>
  <script type="text/javascript" src="index.js"></script>

</body>

</html>