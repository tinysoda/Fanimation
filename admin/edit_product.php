<?php
include ('db.php');
$id = $_GET['id']; 

if(isset($_POST['submit'])){
    $categoryID = $_POST['categoryID'];
    $productName = $_POST['product_name'];
    $thumbnail = $_POST['thumbnail'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $brand = $_POST['brand'];
    $desc = $_POST['description'];

    $query= "UPDATE product SET categoryID ='$categoryID', product_name ='$productName', thumbnail ='$thumbnail', type ='$type', 
    price ='$price',brand ='$brand',description ='$desc' WHERE productID = $id";
    
    $result= mysqli_query($db,$query);

    if($result){
        header("Location: product.php?msg=Product edited!");
    }
    else "Failed: " .mysqli_error($db);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Edit Product</title>
</head>
<body>
    <nav class="navbar justify-content-center fs-3 mb-5" style="background:#53284f; color:#fff">
        EDIT PRODUCT
    </nav>
    
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Product Info</h3>
            <p class="text-muted">Click update after change any infomation</p>
        </div>

        <?php
        $query = "SELECT * FROM product WHERE productID = $id LIMIT 1";
        $result = mysqli_query($db,$query);
        $row = mysqli_fetch_assoc($result); 
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
                <div class="row mb-3">
                <div class="col">
                        <label class="form-label">catergoryID</label>
                        <input type="number" name="categoryID" class="form-control" min="1" max="5" required value="<?php echo $row['categoryID'] ?>">
                    </div> 
                    <div class="col">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" required value="<?php echo $row['product_name'] ?>">
                    </div>     
                </div>

                <div class="mb-3">
                        <label class="form-label">Thumbnail</label>
                        <input type="text" name="thumbnail" class="form-control" required value="<?php echo $row['thumbnail'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" required value="<?php echo $row['type'] ?>">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" required value="<?php echo $row['price'] ?>">
                    </div> 
                    <div class="col">
                        <label class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" required value="<?php echo $row['brand'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" style="height:150px" required value="<?php echo $row['description'] ?>"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="product.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>