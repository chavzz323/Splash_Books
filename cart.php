<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shopping Cart || Splash Books</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="https://kit.fontawesome.com/dbcb78a2d6.js" crossorigin="anonymous"></script>

  </head>
  <body >

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"style="font-weight: bold; font-size: 1.5rem;">Splash Books</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li class="active"><a href="cart.php">View Cart</a></li>
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


<center>

    <div class="row" style="margin-top:140px; padding-left:2rem; padding-right:2rem;">
      <div class="large-12">
        <?php

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>
</center>


          <div class="small-12 " style="margin-top:350px; padding-top: 23px;background-color:#0078A0; height: 315px; width: 100%; ">

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
