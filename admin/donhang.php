<?php
require_once('del.php');
if(!empty($_POST)) {
	$id=$_POST['id'];

	$sql = "delete from cartad where cartID= '$id'";
	query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="donhang.css">
</head>
<body>

	<table>
<tr>
	<td>user</td>
	<td>Product</td>
	<td>Price</td>
	<td>Quantity</td>
	<td>Total</td>
	<td>Info</td>
	<td>Thao tác</td>
</tr>
	<?php
$sql ="select user_name from user";
$listt = queryResult($sql);
foreach ($listt as $item){
	$a=$item['user_name'];

	$sql = "SELECT cartad.cartID,cartad.product_name,cartad.price,cartad.quantity,ordere.address,ordere.fullname,ordere.phonenumber,ordere.city from cartad,ordere WHERE cartad.orderID=ordere.orderID and cartad.user_name='$a'";
$list = queryResult($sql);
if ($list != null){
?>
<tr>			
               	<td class="name" ><?=$item['user_name']?></td>
               	</tr>
<?php
	foreach ($list as $item) 
                            {
                            	$a=$item['price']*$item['quantity'];
                             ?>
                             	<form method="POST" >
                             <tr>
                             
                <td><input type="" name="id" value="<?=$item['cartID']?>"></td>
               	<td><?=$item['product_name']?></td>
               	<td><?=$item['price']?>$</td>
               	<td><?=$item['quantity']?></td>
               	<td><?=$a?>$</td>
               	<td>Name:<?=$item['fullname']?><br><br>PhoneNumber:<?=$item['phonenumber']?> <br><br>Address: <?=$item['address']?><br><br>City:<?=$item['city']?></td>
               	<td><button>Xác Nhận</button></td>
               </tr>
               </form>
               <?php }}} ?>

</table>

</body>
</html>