<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
<!--             <div class="navbar navbar-inverse navbar-fixed-top">
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
                            <li><a href = ""><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <?php
            require 'common.php';
          
            if (!isset($_SESSION['email'])) 
            { 
                header('location: products.php'); 
            }
            ?>
            <?php 
            include 'header.php';
            ?>
             <?php

            $userid=$_SESSION['id'];
    
         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $dbname = 'ecommerce';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }

         $select_query= "SELECT * FROM items WHERE id IN(SELECT item_id FROM users_items WHERE user_id='$userid' AND status='Added to cart')";
         $rs=mysqli_query($conn,$select_query);
		 
         if(mysqli_num_rows($rs)==0)
         {
            echo "Add items to the cart first!";
         }
         else
         {
            $sum=0;
            $id="";
            ?>
             <?php 
            // while($arr=mysqli_fetch_assoc())
            // {
                // sum+=$arr['price'];
                // id=id+$arr['id']+",";
                // echo "$arr['id']"."$arr['name']"."$arr['price']";

            // }
         // }

        // ?> 
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                          while($arr=mysqli_fetch_assoc($rs))
                            {   
                                $sum+=$arr['price'];
								//$id=id+"$arr['id']"+",";
                                echo "<tr>";
                                echo "<th>".$arr['id']."</th>";
                                echo "<th>".$arr['name']."</th>";
                                echo "<th>".$arr['price']."</th>";
                                echo "<th></th>";
                                echo "</tr>";

                            }
    }   //ELSE CLOSES

                             ?>
                            <tr>
                                <td></td><td>Total</td><td>Rs<?php echo "$sum"?> </td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <?php include 'footer.php';?>
    </body>
</html>