<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || Splash Books</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="https://kit.fontawesome.com/dbcb78a2d6.js" crossorigin="anonymous"></script>

  </head>
  <body >

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php" style="font-weight: bold; font-size: 1.5rem;">Splash Books</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
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
            echo '<li class="active"><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>





    <form method="POST" action="insert.php" style="margin-top:100px; margin-left: 110px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Nayan" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Seth" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Infinite Loop" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="Mumbai" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="right-label" placeholder="400056" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="small-12 " style="margin-top:100px; padding-top: 23px;background-color:#0078A0; height: 315px; width: 100%; ">

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
