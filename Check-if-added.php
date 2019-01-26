<?php
include 'common.php';
function check_if_added_to_cart($item_id)
{
		$dbhost = "localhost";
         $dbuser = "root";
         $dbpass = "root";
         $dbname = 'ecommerce';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		$userid=$_SESSION['id'];
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
$query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$userid' AND status='Added to cart'";
$rs=mysqli_query($conn,$query);
$ch=mysqli_num_rows($rs);
if($ch>=1)
{
	return 1;
}
else return 0;
}
?>