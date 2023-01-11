<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
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
        PRODUCT LIST
    </nav>

    <div class="container">
        <a href="add_product.php" class="btn mb-3" style="background:#53284f; color:#fff">Add product</a>
        <a href="index.php" class="btn mb-3" style="background:#53284f; color:#fff">Back to admin</a>
        <table class="table table-hover text-center">
            <thead style="background-color: #53284f;color:#fff">
                <tr>
                <th scope="col">productID</th>
                <th scope="col">catergoryID</th>
                <th scope="col">Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Brand</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "db.php";
                    $sql="SELECT * FROM product";
                    $results = mysqli_query($db,$sql); 
                    while($row = mysqli_fetch_assoc($results)){
                        ?>
                         <tr>
                            <td><?php echo $row['productID'] ?></td>
                            <td><?php echo $row['categoryID'] ?></td>
                            <td><?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['thumbnail'] ?></td>
                            <td><?php echo $row['type'] ?></td>
                            <td><?php echo $row['price'] ?></td>
                            <td><?php echo $row['brand'] ?></td>
                            <td><?php echo $row['description']?></td>
                            <td>
                                <a href="edit_product.php?id=<?php echo $row['productID']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                <a href="delete_product.php?id=<?php echo $row['productID']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                            </td>
                        </tr>
                    <?php        
                        }
                    ?>
              
    </table>
    </div>
</body>
</html>