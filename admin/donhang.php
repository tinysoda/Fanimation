<?php
require_once('../del.php');
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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="donhang.css"> -->
</head>
<style>
    table tbody td{
        max-width: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    } 
</style>
<body>
<nav class="navbar justify-content-center fs-3 mb-5" style="background:#53284f; color:#fff">
        ORDER LIST
    </nav>	
<div class="container">
	<a href="index.php" class="btn mb-3" style="background:#53284f; color:#fff">Back to admin</a>
	<table class="table table-hover text-center">
				<thead style="background-color: #53284f;color:#fff">
					<tr>
					<th scope="col">User</th>
					<th scope="col">Product</th>
					<th scope="col">Price</th>
					<th scope="col">Quantity</th>
					<th scope="col">Total</th>
					<th scope="col">Info</th>
					<th scope="col">Action</th>
					</tr>
				</thead>
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
					<td><?=$item['user_name']?></td>
					</tr>
	<?php
		foreach ($list as $item) 
								{
									$a=$item['price']*$item['quantity'];
								?>
									<form method="POST" >
								<tr>
								
					<td><?=$item['cartID']?></td>
					<td><?=$item['product_name']?></td>
					<td><?=$item['price']?>$</td>
					<td><?=$item['quantity']?></td>
					<td><?=$a?>$</td>
					<td>Name:<?=$item['fullname']?><br><br>PhoneNumber:<?=$item['phonenumber']?> <br><br>Address: <?=$item['address']?><br><br>City:<?=$item['city']?></td>
					<td><a href="delete_product.php?id=<?php echo $row['cartID']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>
				</tr>
				</form>
				<?php }}} ?>

	</table>
</div>
</body>
</html>