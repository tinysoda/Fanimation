<?php
include ('admin/db.php');
$sql = "select * from product";
$all_product = mysqli_query($db,$sql);
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link rel="stylesheet" href="assets/css/template.css">
	<script src="assets/js/slider.js"></script>
	<script src="assets/js/custom.js"></script>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/css/category.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
	<section class="header">
		<div class="anh">
			<a href="trangchu.php"><img src="images/2.jpg"> </a>
		</div>
		<div class="search">
			<form>
				<input class="searchinput" type="text" name="aaaa">
				<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>

		
			
		</div>
		<div class="menu">
			<ul class="menu1">
			<?php	
			if (!isset($_SESSION['username'])) : ?>
				<li><a href="product.php">Product</a>
					
				</li>
				
				<li><a href="user_login.php">Login</a>
					
				</li>
				<li><a href="user_register.php">Register</a>
					
				</li>
			<?php elseif (isset($_SESSION['username'])):?>
				<li><a href="product.php">Product</a>
					
				</li>
				
				<li><a href="#">Welcome, <strong><?php echo $_SESSION['username']; ?></strong>!</a>
					
				</li>
				<li><a href="index.php?logout='1'">Logout</a>
					
				</li>
			<?php endif ?>		
				<li  ><a href="cart.php"><i class="fa fa-shopping-cart" ></i></a>
					
				</li>
			
			</ul>
		</div>
	</section>
    </section>

    <div class = "main-container">
        <h2>Categories</h2>
        <div class = "filter-container">
            <div class = "category-head">
                <ul>
                    <div class = "category-title active" id = "all">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>All Products</li>
                    </div>
                    <div class = "category-title" id = "celling-fans">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Celling Fans</li>
                    </div>
                    <div class = "category-title" id = "pedestal-fans">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Pedestal Fans</li>
                    </div>
                    <div class = "category-title" id = "wall-fans">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Wall Fans</li>
                    </div>
                    <div class = "category-title" id = "exhaust-fans">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Exhaust Fans</li>
                    </div>
                    <div class = "category-title" id = "accessories">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Accessories</li>
                    </div>
                </ul>
            </div>

            <div class = "posts-collect">
                <div class = "posts-main-container">
				<?php
                while ($row = mysqli_fetch_assoc($all_product)) {
                    ?>
                    <div class = "all <?php echo $row["type"]; ?>">
                        <div class = "post-img">
                            <img src = "<?php echo $row["thumbnail"]; ?>" alt = "post">
                            <span class = "category-name"><?php echo $row["type"]; ?></span>
                        </div>

                        <div class = "post-content">
                            <div class = "post-content-top">
                                <span><i class = "fas fa-dollar"></i><?php echo $row["price"]; ?></span>
                                <span>
                                    <i class = "fas fa-comment"></i>
                                </span>
                            </div>
                            <h2><?php echo $row["product_name"]; ?></h2>
                        </div>
                        <a href="cart.php?id=<?php echo $row["productID"]?>"> <button>Add To Cart</button> </a>
                    </div>
                    <?php
                }
                    ?>
                </div>
            </div>
        </div>
    </div>

<section class="footer">
		<div class="tren">
			<div class="trai">
				<h2>Fanimation Catalog</h2>
			</div>
			<div class="giua">
				<h2>Fanimation’s focus is producing creative and functional fans that provide ultimate personal comfort
					using the latest technology for energy efficiency and seamless control.</h2>
			</div>
			
			<div class="phai">
				<h2>DOWNLOAD</h2>
			</div>
		</div>
		<div class="giuatonhat">
		<div class="giuato">
			<div class="giuatotrai1">
				<b>Fanimation</b>	<br>
				10983 Bennett Parkway <br>
				Zionsville, IN 46077 <br>
				Phone: 888.567.2055 <br>
				Fax: 866.482.5215
			</div>
			
			<div class="giuatotrai">
				<a href="">Home <br></a>
					<a href="">Blog<br></a>
						<a href="">Antique Fan Museum<br></a>
							<a href="">Contact </a>
			</div>
			<div class="giuatotrai">
				<a href="">Products <br></a>
					
			</div>
			<div class="giuatotrai">
				<a href="">Product Support</a> <br>
				
			</div>
			<div class="giuatotrai2">
				Enter your email address below to receive periodic communication from Fanimation.
			</div>
			<div class="email">
				<form>
					<input type="text" name="aaac" placeholder="Email Address">
					<button type="submit">SUBSCRIBE</button>
				</form>
			</div>
		</div>
		<div class="icon">
				<a href=""><i class="fa-brands fa-twitter"></i>
					<a href=""><i class="fa-brands fa-facebook"></i>
						<a href=""><i class="fa-brands fa-youtube"></i>
			</div>
			</div>
		<div class="cuoi">
			<div class="trai">
				© 2022 Fanimation. All rights reserved.
			</div>
			<div class="phai">
				<a id="aa" href="policy.html">PRIVACY POLICY</a>
					<a href="term.html">TERMS & CONDITIONS</a>
			</div>
		</div>
	</section>
	</div>

	<script src="./assets/js/wow.min.js">
	</script>
    <script src = "assets/js/category_product.js"></script>
	<script>
		new WOW().init();
	</script>
</body>



</html>
