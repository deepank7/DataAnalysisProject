<?php
        require 'common.php';
        if (!isset($_SESSION['email'])) 
        { 
            header('location: index.php'); 
        }
        $old_pass=$_REQUEST['old-password'];
        $new_pass=$_REQUEST['password'];
        $new_pass1=$_REQUEST['password1'];

         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $dbname = 'ecommerce';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
         //$select_query= "SELECT * FROM users";
		 
		 $userid=$_SESSION['id'];
         //echo 'Connected successfully<br>';
         $select_query= "SELECT password FROM users WHERE id=$userid";
         $rs=mysqli_query($conn,$select_query);

         while ($arr=mysqli_fetch_assoc($rs)) 
         {
         	$pass=$arr['password'];
         }


        if($old_pass==$pass && $new_pass==$new_pass1)
        {

        	  $select_query= "UPDATE users SET password='$new_pass' WHERE id='$userid'";
        	  $rs=mysqli_query($conn,$select_query);
			  header('location: products.php');
        }	
        else
        {
        	header('location: settingserror.php');
        }

?>