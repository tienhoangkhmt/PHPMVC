<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 1/17/2019
 * Time: 6:23 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Login :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link href="<?php echo ADMIN_URL_ASSETS ?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="<?php echo ADMIN_URL_ASSETS ?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="<?php echo ADMIN_URL_ASSETS ?>js/jquery-2.1.1.min.js"></script>
    <!--icons-css-->
    <link href="<?php echo ADMIN_URL_ASSETS ?>css/font-awesome.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <!--static chart-->
</head>
<body>
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <?php if (isset($_SESSION['login_fail']) && ($_SESSION['login_fail'])) : ?>
                <div class="alert alert-danger">
                    <strong>Danger!</strong> <?php echo $_SESSION['login_fail'] ?>
                </div>
                <?php unset($_SESSION['login_fail']); ?>
            <?php endif; ?>

            <form name="login" action="<?php echo ADMIN_URL . 'index.php?controller=login&action=login' ?>" method="post">
                <input type="text" name="email" placeholder="Email" required="">
                <input type="password" name="password" class="lock" placeholder="Password">
                <div class="forgot-top-grids">
                    <div class="forgot-grid">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" name="remember" value="1">
                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" name="Sign In" value="Login">
                <h3>Not a member?<a href="signup.html"> Sign up now</a></h3>
                <h2>or login with</h2>
                <div class="login-icons">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </form>
            <h5><a href="index.html">Go Back to Home</a></h5>
        </div>
    </div>
</div>
<div class="copyrights">
    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<script src="<?php echo ADMIN_URL_ASSETS ?>js/jquery.nicescroll.js"></script>
<script src="<?php echo ADMIN_URL_ASSETS ?>js/scripts.js"></script>
<script src="<?php echo ADMIN_URL_ASSETS ?>js/bootstrap.js"> </script>
</body>
</html>




