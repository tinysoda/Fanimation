<?php
include ('db.php');
$id=$_GET['id'];
$sql="DELETE FROM user WHERE ID=$id";
$result= mysqli_query($db,$sql);
if($result){
    header("Location: user.php?");
}
else "Failed: " .mysqli_error($db);
?>