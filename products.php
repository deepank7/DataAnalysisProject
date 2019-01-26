<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | DS Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body><!-- 
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "cart.html"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                        <li><a href = "settings.html"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href = "logout_script.html"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <?php
        //require 'common.php';
        include 'Check-if-added.php';
        // if (isset($_SESSION['email'])) 
        // { 
            // header('location: products.php'); 
        // }
        ?>
                 <?php 
                    include 'header.php';
                    //include 'Check-if-added.php';
                 ?>

        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our DS Store!</h1>
                <p>We love data and numbers and look forward to help you expand your business.</p>
                <p>We help you by providing the following services</p>


            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-5 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="">
                        <div class="caption">
                            <h3>Customer Segmentation </h3>
                            <!-- <?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php } 
 else {  
    if (check_if_added_to_cart(1)) 
    {  
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } 
        else { ?> 
        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
         <?php } } ?> -->
                            <!-- <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Sales Prediction </h3>
                            <!-- <p><?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php } 
 else {  
    if (check_if_added_to_cart(2)) 
    {  
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } 
        else { ?> 
        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
         <?php } } ?></p> -->
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3(2).jpg" alt="">
                        <div class="caption">
                            <h3>RFM Analysis</h3>
                            <p><?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php } 
 else {  
    if (check_if_added_to_cart(3)) 
    {  
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } 
        else { ?> 
        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
         <?php } } ?></p>
                        </div>
                    </div>
                </div>
 --><!-- 
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Sales Prediction</h3>
                            <p><?php if (!isset($_SESSION['email'])) { ?>
 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php } 
 else {  
    if (check_if_added_to_cart(4)) 
    {  
        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
         } 
        else { ?> 
        <a href="cart-add.php?id=4" name="add" value=4 class="btn btn-block btn-primary">Add to cart</a>
         <?php } } ?></p>
                        </div>
                    </div>
                </div> -->
            </div>
            <hr>
        </div>
        <!-- <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer> -->
        <?php include 'footer.php';?>
    </body>
</html>
