<?php
require_once 'connection.php';
$sql = "select * from product";
$all_product = $conn->query($sql);
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
	<div class="header">
		<div class="anh">
			<a href="index.html"><img src="images/2.jpg"> </a>
		</div>
		<div class="search">
			<form>
				<input class="searchinput" type="text" name="aaaa">
				<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>

			<!-- <div class="email">
				<form>
					<input type="text" name="aaac" placeholder="Email Address">
					<button type="submit">SUBSCRIBE</button>
				</form>
			</div> -->
			
		</div>
		<div class="menu">
			<ul class="menu1">
				<li><a href="product.html">Product</a>
				</li>
				<li><a href="">Help center</a>
				</li>
				<li><a href="">Explore</a>
				</li>
				<li><a onclick="document.getElementById('id01').style.display = 'block'"><strong>Login</strong></a></li>
                <li><a onclick="document.getElementById('id02').style.display = 'block'"><strong>Register</strong></a></li>
			</ul>
		</div>
	</div>
	<div id="id01" class="modal container">
		<form class="modal-content animate" method="post">
			<div class="">
				<span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="close"> &times; </span>
			</div>
			<div class="container">
				<br><br>
				<h3><strong>Login<strong></h3>
							<br>
							<label>Username: </label>
							<br>
							<input type="text" name="user_name" required>
							<br>
							<label>Password:  </label>
							<br>
							<input type="password" name="password" required>
							<br><br>
							<label>
								<input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
							</label>
							<br>
							<span class="psw">Forgot <a href="#"> password?</a></span>
							<br>
							<span>Need an account ?<a onclick="document.getElementById('id02').style.display = 'block'"> Register</a> now.<span>
							<br><br>
							<button type="submit" name="login" style="width: auto;" class="btn btn-success">Login</button>
							<br><br>
			</div>
			<br><br>                            
		</form>
		<br><br>
	</div>
	<div id="id02" class="modal container">
		<form class="modal-content animate">
			<div class="">
				<span onclick="document.getElementById('id02').style.display = 'none'" class="close" title="Đóng">&times;</span>
			</div>
			<div class="container">
				<br><br>
				<h3><strong>Register<strong></h3>
							<br>
							<label>Username: </label>
							<br>
							<input type="text" name="user_name" required>
							<br>
							<label>Email: </label>
							<br>
							<input type="email" name="email" required>
							<br>
							<label>Tel number: </label>
							<br>
							<input type="tel" name="tel_num" required>
							<br>
							<label>Address: </label>
							<br>
							<input type="text" name="address" required>
							<br>
							<label>Password:  </label>
							<br>
							<input type="password" name="password" required>
							<br>
							<label>Re-enter password: </label>
							<br>
							<input type="password" name="repass" required>
							<br><br>
							<button type="submit" style="width: auto;" class="btn btn-success">Register</button>
							<br><br>
			</div>
			<br><br>
		</form>
		<br><br>
	</div>
    <div id="id03" class="product-modal container">
			<div class="">
				<span onclick="document.getElementById('id03').style.display = 'none'" class="close" title="Đóng">&times;</span>
			</div>
			<div class="container">
                <?php
                while($row = mysqli_fetch_assoc($all_product)){
                ?>
                    <div class="card">
                        <div class="image">
                            <img src="<?php echo $row["thumbnail"]; ?>" alt="">
                        </div>
                        <div class="caption">
                            <p class="product_name"><?php echo $row["product_name"]; ?></p>
                            <p class="price"><b><?php echo $row["price"]; ?> $</b></p>
                            <p class="type"><?php echo $row["type"]; ?></p>
                            <p class="brand"><?php echo $row["brand"]; ?></p>
                            <p class="description"><?php echo $row["description"]; ?></p>
                        </div>
                        <button class="add">Add to cart</button>
                    </div>
                <?php
                }
                ?>
			</div>
	</div>
    <section class="slider-homepage" data-flickity='{
        "cellAlign" : "left",
        "contain" : true,
        "pageDots" : false,
        "wrapAround" : false,
        "draggable": true
       }'>
            <div class="slider" style="background-image: url('images/2022_new.jpg');">
                <div class="slider-chars">
                    <div class="sl-chars">
                        <div class="chars wow animate__fadeInDown" data-wow-duration="2s">P</div>
                        <div class="chars wow animate__fadeInUp" data-wow-duration="2s">R</div>
                        <div class="chars sl-chars_margin wow animate__fadeInDown" data-wow-duration="2s">O</div>
                        <div class="chars wow animate__fadeInUp" data-wow-duration="2s">D</div>
                        <div class="chars wow animate__fadeInDown" data-wow-duration="2s">U</div>
                        <div class="chars sl-chars_margin wow animate__fadeInUp" data-wow-duration="2s">C</div>
                        <div class="chars wow animate__fadeInDown" data-wow-duration="2s">T</div>
                        <div class="chars wow animate__fadeInUp" data-wow-duration="2s">S</div>
                    </div>
                    <div class="layer ">
                        <p>All Products In One Page</p>
                    </div>
                </div>
            </div>
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
                    <div class = "category-title" id = "celling fan">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Celling Fans</li>
                    </div>
                    <div class = "category-title" id = "pedestal fan">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Pedestal Fans</li>
                    </div>
                    <div class = "category-title" id = "wall fan">
                        <span><i class = "fas fa-navicon"></i></span>
                        <li>Wall Fans</li>
                    </div>
                    <div class = "category-title" id = "exhaust fan">
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
                                <span><i class = "fas fa-coins"></i><?php echo $row["price"]; ?></span>
                                <span>
                                    <i class = "fas fa-comment"></i>
                                </span>
                            </div>
                            <h2><?php echo $row["product_name"]; ?></h2>
                        </div>
                        <a onclick="document.getElementById('id03').style.display = 'block'"><button type = "button" class = "read-btn">More Info</button></a>
                    </div>
                    <?php
                }
                    ?>
                </div>
            </div>
        </div>
    </div>

	<div class="footer">
		<div class="tren">
			<div class="trai">
				<h2>Fanimation Catalog</h2>
			</div>
			<div class="giua">
				<h2>Fanimation’s focus is producing creative and functional fans that provide ultimate personal comfort
					using the latest technology for energy efficiency and seamless control.</h2>
			</div>
			<div class="icon">
				<a href=""><i class="fa-brands fa-twitter"></i>
					<a href=""><i class="fa-brands fa-facebook"></i>
						<a href=""><i class="fa-brands fa-youtube"></i>
			</div>
			<div class="phai">
				<h2>DOWNLOAD</h2>
			</div>
		</div>
		<div class="giuato">
			<div class="giuatotrai1">
				Fanimation <br>
				10983 Bennett Parkway <br>
				Zionsville, IN 46077 <br>
				Phone: 888.567.2055 <br>
				Fax: 866.482.5215
			</div>
			<div class="giuatotrai">
				<a href="">Home <br>
					<a href="">Blog<br>
						<a href="">Antique Fan Museum<br>
							<a href="">Contact
			</div>
			<div class="giuatotrai">
				<a href="">Products <br>
					<a href="">Product Catalog<br>
						<a href="">Choosing a Fan<br>
							<a href="">Smart Controls
			</div>
			<div class="giuatotrai">
				<a href="">Product Support <br>
					<a href="">Product Registration<br>
						<a href="">Find an Authorized Dealer<br>
							<a href="">Sales Agent Locator <br>
								<a href="">Dealer Portal
			</div>
			<div class="giuatotrai2">
				Enter your email address below to receive periodic communication from Fanimation.
			</div>
		</div>
		<div class="cuoi">
			<div class="trai">
				© 2020 Fanimation. All rights reserved.
			</div>
			<div class="phai">
				<a id="aa" href="">PRIVACY POLICY
					<a href="">TERMS & CONDITIONS
			</div>
		</div>
	</div>

	<script src="./assets/js/wow.min.js">
	</script>
    <script src = "assets/js/category_product.js"></script>
	<script>
		new WOW().init();
	</script>
</body>



</html>
