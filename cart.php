<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" href="assets/css/slider.css">
	<link rel="stylesheet" href="assets/css/template.css">
	<link rel="stylesheet" href="assets/css/product.css">
	<link rel="stylesheet" href="assets/css/cart.css">
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
</head>
<body>
<div class="header">
		<div class="anh">
			<a href=""><img src="images/2.jpg"> </a>
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
				<li><a href="">Product</a>
					<ul class="menu11">
						<li><a href="">All Products</a></li>
						<li><a href="">Damp Rated Fans</a></li>
						<li><a href="">Wet Rated Fans</a></li>
					</ul>
				</li>
				<li><a href="">Help center</a>
					<ul class="menu11">
						<li><a href="">Contact Tech Support</a></li>
						<li><a href="">Product Registration</a></li>
						<li><a href="">Find an Authorized Dealer</a></li>
						<li><a href="">Choosing a Fan</a></li>
						<li><a href="">Dealer Portal</a></li>
						<li><a href="">General Inquiries</a></li>
					</ul>
				</li>
				<li><a href="">Explore</a>
					<ul class="menu11">
						<li><a href="">CCT Select</a></li>
						<li><a href="">Smart Controls</a></li>
						<li><a href="">Virtual Showroom</a></li>
						<li><a href="">Antique Fan Museum</a></li>
						<li><a href="">Download Product Catalog</a></li>
					</ul>
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

	<section class="slider-homepage" data-flickity='{
	"cellAlign" : "left",
	"contain" : true,
	"pageDots" : false,
	"wrapAround" : false,
	"draggable": true
   }'>
   <div class="slider" style="background-image: url('images/coop_sale_head2-copy.jpg');">
			<div class="slider-chars">
				<div class="sl-chars">
					<div class="chars wow animate__fadeInDown" data-wow-duration="2s">C</div>
					<div class="chars wow animate__fadeInUp" data-wow-duration="2s">a</div>
					<div class="chars sl-chars_margin wow animate__fadeInDown" data-wow-duration="2s">r</div>
					<div class="chars wow animate__fadeInUp" data-wow-duration="2s">t</div>
					
				</div>
				<div class="layer ">
					<p>The Coop.See it and other deals on our Closerout Store</p>

				</div>
				<div class="btn">
					<a>Shop Now</a>
				</div>
			</div>
		</div>
	</section>
   <div class="small-container main-cart">
   	<table class="cart-table">
		<tr>
			<th>Product</th>
			<th>Quantity</th>
			<th>SubTotal</th>
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/2022_new.jpg" class="cart-img">

					<div class="info">
						<p>Scythe of Death</p>
						<small>Price:50.000</small>
						<br>
						<a href="" style="font-size: 20px;">Remove</a> 
					</div>
				</div>
			</td>
			<td><input type="number" name="" min="0" max="50"></td>
			<td>50.000</td>	
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/air-apparent-banner-bkgr-2.jpg" class="cart-img">

					<div class="info">
						<p>Scythe of Death</p>
						<small>Price:50.000</small>
						<br>
						<a href="" style="font-size: 20px;">Remove</a> 
					</div>
				</div>
			</td>
			<td><input type="number" name="" min="0" max="50"></td>
			<td>50.000</td>	
		</tr>
		<tr>
			<td>
				<div class="cart-info">
					<img src="images/quat-tran-5-canh-go-co-den-mrvu-villa-300x300.jpg" class="cart-img">

					<div class="info">
						<p>Scythe of Death</p>
						<small>Price:50.000</small>
						<br>
						<a href="" style="font-size: 20px;">Remove</a> 
					</div>
				</div>
			</td>
			<td><input type="number" name="" min="0" max="50"></td>
			<td>50.000</td>	
		</tr>
	</table>
	<div class="total-price">
		<table class="price-table">
			<tr>
				<td>Subtotal</td>
				<td>150.000</td>
			</tr>
			<tr>
				<td>Tax</td>
				<td>50.000</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>200.000</td>
			</tr>
		</table>	
	</div>
	<button class="submit" type="submit">Submit</button>
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

	
</body>
</html>