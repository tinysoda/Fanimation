<?php
include ('db.php');
$id = $_GET['id']; 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    

    $query= "UPDATE user SET username='$username', email ='$email', tel ='$tel' WHERE ID = $id";
    
    $result= mysqli_query($db,$query);

    if($result){
        header("Location: user.php");
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
        EDIT USER 
    </nav>
    
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit user Info</h3>
            <p class="text-muted">Click update after change any infomation</p>
        </div>

        <?php
        $query = "SELECT * FROM user WHERE ID = $id LIMIT 1";
        $result = mysqli_query($db,$query);
        $row = mysqli_fetch_assoc($result); 
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px">
                <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required value="<?php echo $row['username'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required value="<?php echo $row['email'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Tel</label>
                        <input class="form-control" name="tel" required value="<?php echo $row['tel'] ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="user.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>