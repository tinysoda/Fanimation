<?php
include ('admin/db.php'); 
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/page.css">
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
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
</head>
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
            <li><a href="fansync.php">Explore</a>

            </li>
            <?php elseif (isset($_SESSION['username'])):?>
            <li><a href="product.php">Product</a>

            </li>

            <li><a href="#">Welcome, <strong>
                        <?php echo $_SESSION['username']; ?>
                    </strong>!</a>

            </li>
            <li><a href="index.php?logout='1'">Logout</a>

            </li>
            <li><a href="fansync.php">Explore</a>

            </li>
            <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
            <?php endif ?>
            

            </li>
            <li></li>
        </ul>
    </div>
</section>


<section class="banner-section">
    <div class="banner flex-align_center flex-justify-content_center" style="background-image: url('images/subpage-header-7-sculpt.jpg');">
        <div class="banner-chars">
            <div class="sl-chars">
                <div class="chars ">
                    <h1>FanSync</h1>
                </div>

            </div>
        </div>
</section>

<section class="box-section">
    <div class="box-section_row flex-align_center " style="margin-bottom: 70px;">
        <div class="box-section_col-right">
            <div class="col-detail">
                <img src="./images/receiver-fansync.png" alt="Girl in a jacket" width="500" height="600">
            </div>
        </div>
        <div class="box-section_col-left">
            <div class="col-detail">
                <h3>Control your ceiling fans with your smart devices and personal voice assistants</h3>
                <p>Power to control your ceiling fan with your voice or the swipe of the finger.  Developed by Fanimation, fanSync now integrates Bluetooth or Wifi technology into a ceiling fan receiver so you can operate your fan right from your smart device.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="box-section function-box" style="background-color: #f3f3f3; padding: 30px 0;">
    <div class="box-section_row flex-align_center flex-justify-content_center">
        <div class="title-box">
            <h6>
                Choose between WiFi or Bluetooth
            </h6>
        </div>
    </div>
    <div class="box-section_row flex-align_center flex-direction-row_rev ">
        <div class="box-section_col-right flex-direction-col">
            <div class="col-detail flex-justify-content_center">
                <img src="./images/fansync-wifi-phone-2.png" alt="Girl in a jacket" width="500" height="600">
            </div>
        </div>
        <div class="box-section_col-left">
            <div class="col-detail">
                <h4>BLUETOOTH</h4>
                <ul>
                    <li>fanSync is universal and works with most brands of 3-speed AC ceiling fans.</li>
                    <li>Easily wire and install the fanSync receiver into your ceiling fan’s hanger bracket/canopy.</li>
                    <li>Download the fanSync app to your smart device from Google Play or the App Store.</li>
                    <li>Easily find and set up your fan(s) in the fanSync app.</li>
                    <li>Explore and enjoy the many features of the fanSync app!</li>
                </ul>
            </div>
            <p class="app-icon"> 
                <a href="#" target="_blank" ><img class="alignnone" src="https://fanimation.com/wp-content/uploads/2019/12/fansync-button-app-store.png" alt="" width="203" height="60"></a>
                <a href="#" target="_blank" ><img class="alignnone" src="https://fanimation.com/wp-content/uploads/2019/12/fansync-button-google-play.png" alt="" width="203" height="60"></a>
            </p>
        </div>
    </div>
</section>

<section class="box-section function-box" style="background-color: #f3f3f3; padding: 30px 0;">
    <div class="box-section_row flex-align_center">
        <div class="box-section_col-right flex-direction-col">
            <div class="col-detail flex-justify-content_center">
                <img src="./images/fansync-wifi-phone-2.png" alt="Girl in a jacket" width="500" height="600">
            </div>
        </div>
        <div class="box-section_col-left">
            <div class="col-detail">
                <h4>WIFI</h4>
                <ul>
                    <li>AC Motor fanSync WiFi (WFR50) is universal and works with most brands of 3-speed AC ceiling fans.</li>
                    <li>DC Motor WiFi receiver part numbers are fan specific and <strong><a href="#" style="color: #000;">listed here.</a></strong></li>
                    <li>Wire and install the fanSync WiFi receiver into your ceiling fan’s hanger bracket/canopy.</li>
                    <li>Download the fanSync Wifi app in the Google Play or App Store and follow the simple setup instructions.</li>
                </ul>
            </div>
            <p class="app-icon"> 
                <a href="#" target="_blank" ><img class="alignnone" src="https://fanimation.com/wp-content/uploads/2019/12/fansync-button-app-store.png" alt="" width="203" height="60"></a>
                <a href="#" target="_blank" ><img class="alignnone" src="https://fanimation.com/wp-content/uploads/2019/12/fansync-button-google-play.png" alt="" width="203" height="60"></a>
            </p>
        </div>
    </div>
</section>


<section class="box-section function-box" style="padding: 50px 0 90px;">
    <div class="box-section_row flex-align_center flex-justify-content_center">
        <div class="title-box">
            <h6>
                Choose between WiFi or Bluetooth
            </h6>
        </div>
    </div>
    <div class="box-section_row flex-align_center" style="flex-wrap: wrap;">
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-amazon-echo.png" alt="" width="500" height="600">
            </div>
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-google-1.png" alt="" width="500" height="600">
            </div>
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-ecobee.png" alt="" width="500" height="600">
            </div>
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-smart-things.png" alt="" width="500" height="600">
            </div>
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-nest.png" alt="" width="500" height="600">
            </div>
            <div class="col-img-detail flex-justify-content_center">
                <img src="./images/fansync-logo-others.png" alt="" width="500" height="600">
            </div>
    </div>
</section>



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
                <b>Fanimation</b> <br>
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