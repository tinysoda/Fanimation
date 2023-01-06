<?php
include ('db.php');
$id=$_GET['id'];
$sql="DELETE FROM product WHERE productID=$id";
$result= mysqli_query($db,$sql);
if($result){
    header("Location: product.php?");
}
else "Failed: " .mysqli_error($db);
?>