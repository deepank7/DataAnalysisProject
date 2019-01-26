<?php
include_once('common.php');

$idd=$_GET['id'];
	
 $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $dbname = 'ecommerce';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error()); 
         }
			$userid=$_SESSION['id'];
         $select_query= "INSERT INTO users_items(user_id, item_id, status) VALUES('$userid', '$idd', 'Added to cart')";
         $rs=mysqli_query($conn,$select_query);
        
        header('location: products.php');
?>