<?php
session_start();
 if(!isset($_SESSION['user_id']))
{
      require('login_tools.php');
      load();

}
$page_title='Ecart';
require('connection.php');

$q="select * from forum";
$r=mysqli_query($dbc,$q);
?>

<<!DOCTYPE html>
<html>
<head>
  <title>Programs</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="css/style2.css">
          <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
<link href="css/FB.css" rel="stylesheet">
</head>
<body >
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

  <main id="content" class="listing-page grey-background" role="main">
            
        
<div class="masthead image-masthead " style="background-image: url('https://d18zdz9g6n5za7.cloudfront.net/workouts_programs/masthead-workouts.jpg')" id="masthead">
  <img src="image/bg2.jpg" class="mobile-image" alt="">
  <div class="container">
    <div class="masthead-text">
      <div class="eyebrow heading -x-small caps">Program, Challenges, Meal Plans</div>
      <h1 class="heading -huge">Follow professionally<br />developed programs for<br />fitness and nutrition.</h1>
          </div>
  </div>
</div>

<section class="content-group -bg-03 -center -vs-large -hs-medium">
  <div class="heading-group group -full -flex -between -vs-baseline">
    <h2 class="heading -primary scroll-dest" id="pc-programs">Full-Length Workout Programs</h2>
    <div class="view-full-list">
      <a href="https://www.fitnessblender.com/plans?access%5B%5D=purchasable">View All</a>
    </div>
  </div>

  <div class="group -full">
    <div class="cards">
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/4-week-fb-complete-a-customizable-workout-program-for-beginner-intermediate-and-advanced">
   
    <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-1912-4-week-fb-complete-a-customizable-workout-program-for-beginner-intermediate-and-advanced-a7b6.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          4 Week Program
           - 42 Min/Day         </span>
        <h3 class="-x-small demi">4 Week Fitness Complete: A Customizable Workout Program for Beginner, Intermediate, and Advanced</h3>
      </div>
    </div>
    <div class="content-actions">
             
          </div>
  </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/fb-low-impact-round-2-fat-loss-program-40-minutes-or-less">
        <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-o_31_fb-low-impact-round-2-fat-loss-program-40-minutes-or-less.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          4 Week Program
           - 34 Min/Day         </span>
        <h3 class="-x-small demi">Fitness Low Impact Round 2 - Build Muscle &amp; Burn Fat - 40 Minutes or Less</h3>
      </div>
    </div>
    <div class="content-actions">
             
          </div>
  </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/4-week-fb-blend-burn-fat-build-muscle-tone-35-or-55-minutes-a-day">
        <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-o_29_4-week-fb-blend-burn-fat-build-muscle-tone-35-or-55-minutes-a-day.jpg"
        class="videothumb lazyload lazyfade"
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          4 Week Program
           - 38 Min/Day         </span>
        <h3 class="-x-small demi">Fitness Blend - Burn Fat, Build Muscle, Tone; 35 or 55 Minutes a Day</h3>
      </div>
    </div>
    <div class="content-actions">
             
          </div>
  </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/fb-30-4-week-fat-loss-program-for-busy-people-round-4">
        <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-o_28_fb-30-4-week-fat-loss-program-for-busy-people-round-4.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          4 Week Program
           - 30 Min/Day         </span>
        <h3 class="-x-small demi">Fitness 30 - Fat Loss Program For Busy People (Round 4)</h3>
      </div>
    </div>
    <div class="content-actions">
             
          </div>
  </a>
</div>
        </div>
          </div>
  </div>
</section>



<section class="content-group -white-spacer -bg-03 -center -vs-large -hs-medium">
  <div class="heading-group group -full -flex -between -vs-baseline">
    <h2 class="heading -primary scroll-dest" id="pc-challenges">Quick Workout Challenges</h2>
    <div class="view-full-list">
      <a href="https://www.fitnessblender.com/plans?access%5B%5D=exclusive">View All</a>
    </div>
  </div>
  <div class="group -full">
    <div class="cards">
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/2-week-fb-abs-challenge-for-a-strong-core">
    <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-3424-2-week-fb-abs-challenge-for-a-strong-core-ac20.jpg"
        class="videothumb lazyload lazyfade"
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          2 Week Challenge
           - 36 Min/Day         </span>
        <h3 class="-x-small demi">2-Week FB Abs Challenge for a Strong Core</h3>
      </div>
    </div>
    <div class="content-actions">
          </div>
  </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/2-week-fb-flex-challenge-for-the-upper-body">
    <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-2836-2-week-fb-flex-challenge-for-the-upper-body-8953.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          2 Week Challenge
           - 38 Min/Day         </span>
        <h3 class="-x-small demi">2 Week Fitness Flex Challenge for the Upper Body</h3>
      </div>
    </div>
  </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/fb-plus-2-week-fb-booty-challenge">
    <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-2424-fb-plus-2-week-fb-booty-challenge-bcc8.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          2 Week Challenge
           - 42 Min/Day         </span>
        <h3 class="-x-small demi">Fitness Plus 2 Week FB Booty Challenge</h3>
      </div>
    </div>
      </a>
</div>
        </div>
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="/plans/fb-plus-short-and-sweet-challenge-under-20-minutes-a-day">
    <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-1494-fb-plus-short-and-sweet-challenge-under-20-minutes-a-day-b349.jpg"
        class="videothumb lazyload lazyfade"
      
      width="340"
      height="180"
    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          2 Week Challenge
           - 15 Min/Day         </span>
        <h3 class="-x-small demi">Fitness Plus Short and Sweet Challenge: Under 20 Minutes a Day</h3>
      </div>
    </div>
  </a>
</div>
        </div>
          </div>
  </div>
</section>

<section class="content-group -white-spacer -bg-03 -center -vs-large -hs-medium">
  <div class="heading-group group -full -flex -between -vs-baseline">
    <h2 class="heading -primary scroll-dest" id="pc-meal-plans">Meal Plans</h2>
    <div class="view-full-list">
      <a href="https://www.fitnessblender.com/meal-plans">View All</a>
    </div>
  </div>
  <div class="group -full">
    <div class="cards">
              <div class="card">
          <div class="content-item article-item">
  <a class="contents" href="meal.php">
        <div class="content-info">
      <div class="content-thumbnail">
        <div class="content-thumbnail-holder">
          <img
              data-src="https://d18zdz9g6n5za7.cloudfront.net/plan/320/320-o_21_fb-meal-plan-eat-real-food-and-feel-great.jpg"
        class="videothumb lazyload lazyfade"
      width="340"
      height="180"

    >
  
        </div>
      </div>
      <div class="content-details">
        <span class="eyebrow demi caps">
          4 Week Program
                  </span>
        <h3 class="-x-small demi">Fitness Meal Plan - Eat Real Food &amp; Feel Great</h3>
      </div>
    </div>
    <div class="content-actions">
             
          </div>
  </a>
</div>
        </div>
          </div>
  </div>
</section>

      </main>
        <script src="https://cloudfront.fitnessblender.com/assets/bundle/app-eb8d9c34113714a6d3c0.js"></script>
        <script type="text/javascript" src="index.js"></script>

</body>
</html>
