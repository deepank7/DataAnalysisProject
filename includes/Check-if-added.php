<?php
session_start();
function check_if_added_to_cart($item_id)
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
$query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$_SESSION['id']' and status='Added to cart'";
$rs=mysqli_query($conn,$query);
if(mysqli_num_rows($rs)>0)
{
	return 1;
}
else return 0;
}
?>