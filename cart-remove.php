<?php
            require 'common.php';
          
            if (!isset($_SESSION['email'])) 
            { 
                header('location: products.php'); 
            }
            function removeitems()
            {
            $dbhost = "localhost";
       		$dbuser = "root";
         	$dbpass = "root";
         	$dbname = 'ecommerce';
         	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
	         if(! $conn ) {
    	        die('Could not connect: ' . mysqli_error());
        	 }
        	 $userid=$_SESSION['id'];

	         $select_query= "DELETE FROM users_items WHERE user_id='$userid' " ;
        	 $rs=mysqli_query($conn,$select_query);	
            }
            ?>