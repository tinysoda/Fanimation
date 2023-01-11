<?php
require_once('del.php');
session_start();
$us=$_SESSION['username'];

if(!empty($_GET)) {
	if(isset($_GET['id'])){
	$id=$_GET['id'];
$sql = "select * from cart where productID='$id' and user_name ='$us'" ;
$a = queryResult($sql);
if ($a == null){
$sql= "insert into cart (productID,thumbnail,product_name,price)select productID,thumbnail,product_name,price from product where productID=".$id;
query($sql);
$sql="update cart set quantity = 1";
query($sql);

if(isset($_SESSION['username'])){
$sql="UPDATE `cart` SET user_name = '$us' WHERE cartID = ( select MAX(cartid)FROM cart)";
query($sql);
}
header('Location: cart.php');
}
else{
	echo '<script>alert(" sp đã tồn tại trong giỏ hàng ")</script>';
	 echo("<script>window.location = 'product.php';</script>");
}
}
if(isset($_GET['tru'])){
	$tru=$_GET['tru'];
	$soluong=$_GET['soluong'];
	$soluong=$soluong-1;
	if($soluong<1){
		$soluong=1;
	}
$sql="update cart set quantity=$soluong where cartID=".$tru;
query($sql);
}
if(isset($_GET['cong'])){
	$cong=$_GET['cong'];
	$soluong=$_GET['soluong'];
	$soluong=$soluong+1;
$sql="update cart set quantity=$soluong where cartID=".$cong;
query($sql);
}
}

$sql = "select * from cart where user_name ='$us'";
$list = queryResult($sql);



if(!empty($_POST)) {
	if(isset($_POST['cartID'])){
	$id=$_POST['cartID'];

$sql = "delete from cart where cartID= ".$id;
query($sql);
header('Location: cart.php');
}
}
if(!empty($_POST)) {
	if(isset($_POST['fake'])){
		header('Location: checkout.php');
	}
}
?>


<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="xx.js" ></script>
	<link rel="stylesheet" href="assets/css/cart.css">
</head>
<body>
	<h2>Đơn Hàng Của  Bạn</h2>
	<div class="tonhat" >
	<div class="to" >
<table >
				<tr class="a" >
					<td class="anh" >Ảnh</td>
  					<td  class="title">Product</td>
  					<td class="gia">Price</td>
  					<td class="soluong">Số Lượng</td>
  					<td  class="total">Total</td>
  					<td  class="thaotac">Thao tác</td>
  				</tr>
                            <?php
                            $b=0;
                             foreach ($list as $item) 
                            {
                            	$a=$item['price']*$item['quantity'];
                            	$b+=$a;
                             ?>

  			<form method="POST" >
  				
            <tr>
            	<input name="cartID" type="hidden" value="<?=$item['cartID']?>" >
                <td ><img src='<?=$item['thumbnail']?>' class="anh" /> </td>
                <td class="title" ><?=$item['product_name']?> </td>
                <td class="gia">
                <?=$item['price']?> $</td>
                 <td class="soluong"> <a href="cart.php?tru=<?=$item['cartID']?>&soluong=<?=$item['quantity']?>"><label class="alo">-</label></a>  <?=$item['quantity']?>  <a href="cart.php?cong=<?=$item['cartID']?>&soluong=<?=$item['quantity']?>"><label class="aloa">+</label></a>
            	</td>
                <td class="total"><?=$a?>$</td>
                 <td class="thaotac">
               	<button>Xoá</button>
               </td>
            </tr>
				
              </form>
               <?php } ?>
               <tr class="b">
               	<td ></td>
               	<td >tổng tiền :</td>
               	<td ></td>
               	<td ></td>
               	<td style="color: red;" ><?=$b?>$</td>
               	<td></td>
               </tr>
        </table>

        </div>
          </div>
          <div class="cuoi">
      
      <form method="POST">
      	<a class="aab"  href="product.php">Tiếp tục mua hàng</a>

      <?php 
      if($b!=0){
      echo ' <button class="aaa">Đặt Hàng</button>';
			}?> 
      <input type="hidden" name="fake">
      </form>
      </div>
</body>
</html>