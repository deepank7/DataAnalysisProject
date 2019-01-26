<?php
if(isset($_REQUEST['submit']))
{
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
         //$select_query= "SELECT * FROM users";
		 
		 $em=$_REQUEST['e-mail'];
		 $n=$_REQUEST['name'];
		 $p=$_REQUEST['password'];
		 $c=$_REQUEST['contact'];
		 
         //echo 'Connected successfully<br>';
         $select_query= "SELECT * FROM users WHERE email='$em'";
         $rs=mysqli_query($conn,$select_query);
		 
         if(mysqli_num_rows($rs)>0)
         {
         	
         	
         	header('location: signuperror.php');
         }
		 else
		 {    //
         $query="INSERT INTO users(name,email,password,contact) VALUES('$n','$em','$p','$c')";
         $rs=mysqli_query($conn,$query);
         if($rs)
         {
       		$_SESSION['name']=$n;
			$_SESSION['email']=$em;
			$_SESSION['password']=$p;
			$_SESSION['contact']=$c;

			
         }
		 else
		 {
			 echo "cannot insert data";
		 }
          $select_query= "SELECT id FROM users WHERE email='$em'";
         $rs=mysqli_query($conn,$select_query);
         while ($arr=mysqli_fetch_assoc($rs)) {
         	$_SESSION['id']=$arr['id'];
         header('location: products.php');
		 }
		 }
}         
?>