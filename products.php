<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || Splash Books</title>
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
          <li class='active'><a href="products.php">Products</a></li>
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




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM products');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {

              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';



              if($obj->qty > 0){
                echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
              }
              else {
                echo 'Out Of Stock!';
              }
              echo '</div>';

              $i++;
            }

          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>


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
