<?php
         $email=$_REQUEST['e-mail'];
         $pass=$_REQUEST['password'];
                    
         include 'common.php';


         $dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $dbname = 'ecommerce';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         //echo 'Connected successfully<br>';
         $select_query= "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		 if($select_query_result=mysqli_query($conn, $select_query)) { 
		 if(mysqli_num_rows($select_query_result)==0)
			 header('location: loginerror.php');
		 while ( $row=mysqli_fetch_assoc($select_query_result))
       {
		 echo $row['id']."<br/>";
		 echo $row['name']."<br/>";
		 echo $row['email'];


       #session intilization
       $_SESSION['id']=$row['id'];
       $_SESSION['name']=$row['name'];
       $_SESSION['email']=$row['email'];
       $_SESSION['password']=$row['password'];
       $_SESSION['contact']=$row['contact'];

	header('location: products.php');  

      }
		} else {
			echo "Error" . mysqli_error($conn);
		}
			//header('location: loginerror.php'); 

    


?>