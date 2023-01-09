<?php
require_once('del.php');
$sql = "SELECT cartad.user_name,cartad.product_name,cartad.price,cartad.quantity,orderr.address,orderr.fullname,orderr.phonenumber,orderr.city from cartad,orderr WHERE cartad.orderid=orderr.orderid ";
$list = queryResult($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" >
<tr>
	<td>tene khasch hafng</td>
	<td>tên hàng</td>
	<td>giá</td>
	<td>số lượng</td>
	<td>tổng</td>
	<td>thông tin</td>
</tr>
	<?php

	foreach ($list as $item) 
                            {
                            	$a=$item['price']*$item['quantity'];
                             ?>
               <tr>
               	<td><?=$item['user_name']?></td>
               	<td><?=$item['product_name']?></td>
               	<td><?=$item['price']?></td>
               	<td><?=$item['quantity']?></td>
               	<td><?=$a?></td>
               	<td><?=$item['fullname']?><br><?=$item['phonenumber']?> <br> <?=$item['address']?><br><?=$item['city']?></td>
               </tr>
               <?php } ?>

</table>
</body>
</html>