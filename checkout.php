<?php
require_once('del.php');
session_start();
$us=$_SESSION['username'];


if(!empty($_POST)) {
	$fullname=$_POST['fullname'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$phonenumber=$_POST['phonenumber'];

$sql ="insert into `ordere`(address, fullname, phonenumber, city) values
 ('$address','$fullname','$phonenumber','$city')";
 query($sql);

$sql= "insert into cartad (productID,thumbnail,product_name,price,quantity,user_name)select productID,thumbnail,product_name,price,quantity,user_name from cart where user_name= '$us'";
query($sql);

$sql="update `cartad` set orderID = (select MAX(orderID) FROM `ordere`) where user_name= '$us' ";
query($sql);

	$sql = "delete from cart where user_name= '$us'";
	query($sql);

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/css/checkout.css">
</head>
<body>
	<form method="POST" >
<div class="trai">
	<div class="Billing">
	<h3>Billing Address</h3>
		 <label>Full Name</label>
	     <input type="text"  name="fullname" >
	     <label>Email</label>
	     <input type="email" name="email" >
	     <label> Address</label>
	     <input type="text"  name="address" >
	     <label> City</label>
	     <input type="text"  name="city" >
	      <label> Phone number</label>
	     <input type="number"  name="phonenumber" >
	</div>
</div>
<button> Continue to checkout</button>
</form>

</body>
</html>