<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Splash Books</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="https://kit.fontawesome.com/dbcb78a2d6.js" crossorigin="anonymous"></script>
    <script src="js/vendor/modernizr.js"></script>
  </head>

<body>
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1 ><a href="index.php" style="font-weight: bold; font-size: 1.5rem;">Splash Books</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


<div class="ball">
  <img src="images/backk.jpg" style="width:500px; margin-top: 50px; padding-left: 3rem; padding-right:3rem; margin-left: 23rem;  ">
</div>

    <div class="row fieee fafafa" style="margin-top:50px; ">
      <div class="small-12">
        <p class="fiee">Founded in 2022, we connect this vast and diverse region through our technology, logistics and payments capabilities.
        With end-to-end logistics capabilities and complete control over our supply chain, virtually Books product is a click away.
      We have fulfillment centres across the philippines.</p>

        <p class="fiee">At <span class="scrapp">ScrapBooks </span>, we harness both existing and emerging technologies to redefine the retail experience.
        Project Voyager, our technology stack jointly developed with anime_org., powers Splash Books with the most scalable
      and competitive product and technology solutions for the next decade.
    </p>

        <p class="fiee">At Splash Books, people are at the heart of everything we do. Our passionate leadership team embodies our fearless and forward-thinking spirit, and drives our vision to revolutionise retail..</p>
        <br>
      </div>
    </div>

    <div class="small-12 hehh " style="margin-top:570px; padding-top: 23px;background-color:#0078A0; height: 315px; width: 100%; ">

          <div  style="color: white; margin-bottom: 15px;">
            <p style="padding-left: 50px; font-size: 2.5rem; font-weight: bold;"> SPLASH BOOKS </p>
            <p style="padding-left: 50px; margin-top: -1rem;"> Founded in 2022, we connect this vast and   </p>
            <p style="padding-left: 50px;  margin-top: -20px;"> diverse region through our technology,</p>
            <p style="padding-left: 50px;  margin-top: -20px;"> logistics and payments capabilities.</p>
          </div>
          <center>
            <div  class="sr_m" style="margin-top: 4rem; margin-bottom: 8px;">
            <a href="https://web.facebook.com/profile.php?id=100011066745578"><i style="margin-right: 5px; margin-top: -4rem;"class="fa-brands fa-facebook fa-2x"></i></a>
            <a href="https://www.instagram.com/cyprusjayyy_/"><i style="margin-right: 5px;" class="fa-brands fa-instagram fa-2x" ></i></a>
            <a href="https://twitter.com/"><i style="margin-right: 5px;" class="fa-brands fa-twitter fa-2x"></i></a>
            <a href="https://www.youtube.com/channel/UC-Owra7B6gK4dbYC3NzXMzw"><i style="margin-right: 5px;" class="fa-brands fa-youtube fa-2x"></i></a>
          </div>
        </center>

      <footer>
         <p class="fottt" style="margin-top: 1px; color: white; text-align:center; font-size:0.8em;">&copy; Splash Books. All Rights Reserved.</p>
      </footer>

    </div>











    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


  </body>
</html>
