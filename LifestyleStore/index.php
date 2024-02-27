<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Khadka Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
             <div class="banner">
             <!-- <img src="img1/about/banner.png" alt=""> -->
                <center>
                <h4>Repair Services</h4>
                <h2>Up to <span style="color: #ef3636">10% Off</span> - All t-shirts & Accessories</h2>
                <a href="products.php" class="btn btn-danger">Shop Now</a><br/><br/>
                </center>
            </div>

           <!-- <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell the products.</h1>
                       <p>Flat 10% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div> -->
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img1/products/f1.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Tshirt</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img1/products/f9.png" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Pants</p>
                                    <p>Original pants from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img1/products/f16.png" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Shoes</p>
                                   <p>Our exquisite collection of shoes.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer">
                <!-- <div class="col-s-4">
                <a href="products.php" class="btn btn-danger">Shop Now</a>
                </div> 
                <div class="col-s-4">
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </div> -->
               <div class="container">
               <center>
                   <p>Copyright &copy Khadka Store. All Rights Reserved. | Contact Us: +91 90000 00000</p>
                   <p>This website is developed by Sushant Khadka</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>