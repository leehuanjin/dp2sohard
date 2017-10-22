<?php
include("server.php");
        
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Shop | E-Shopper</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/price-range.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href=""><i class="fa fa-phone"></i> +60123456789</a></li>
                                    <li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img src="images/home/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <?php  if (isset($_SESSION['username'])) : ?>
                                    <li><a href="sell.php"><i class="fa fa-money"></i> SELL On Deallo</a></li>
                                    <?php endif ?>
                                    
                                    
                                    <li><a href="" class="active"><i class="fa fa-user"></i> Account</a></li>
                                    <li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
                                    <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                    <li><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                                        <!-- Seller's business to collect the payments. -->
                                        <input type="hidden" name="business" value="seller@deallocraft.com">

                                        <!-- Specify a PayPal Shopping Cart View Cart button. -->
                                        <input type="hidden" name="cmd" value="_cart">

                                        <!-- Continue shopping on the current webpage of the merchant site. -->
                                        <!-- The below value is replaced when buyers click View Cart -->
                                        <input type="hidden" name="shopping_url" value="">

                                        <!--display the view cart button-->
                                        <input type="image" onclick=getContinueShoppingURL(this.form) src="https://www.paypal.com/en_US/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="">
                                        <img alt="" border="0" src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                                        <input type="hidden" name="display" value="1">
                                        </form>
                                         <?php 
                                        if (!isset($_SESSION['username'])){
                                        echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
                                        }
                                        else 
                                        {
                                            echo "<li><a href='login.php'><i class='fa fa-lock'></i> Logout</a></li>";
                                        }

                                        ?>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.php">Products</a></li>
                                            <li><a href="checkout.html">Checkout</a></li> 
                                            <li><a href="cart.php">Cart</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li> 
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<?php
$user = $_SESSION["username"];

if($user)
{
    //user login
    
    if(isset($_POST['submit']))
    {


        $oldpassword = md5($_POST['oldpassword']);
        $newpassword = md5($_POST['newpassword']);
        $repeatnewpassword = md5($_POST['repeatnewpassword']);
        
        $connect = mysqli_connect("localhost","root",'',"deallo_db");
        
        $row = mysqli_fetch_assoc(mysqli_query($connect,"SELECT password FROM users WHERE username='$user'"));
        //$queryget = mysql_query("SELECT password FROM users WHERE username ='$username'")or die("Query didn't work");
        //$row = mysql_fetch_assoc($queryget);
    
       // $query = "SELECT password FROM users WHERE username='$username' AND password='$password'";
       // $results = mysqli_query($db, $query);
        // $select = mysqli_fetch_assoc(mysqli_query($db,"SELECT image_text FROM images WHERE id='$id'"));
        
        $oldpassworddb = $row['password'];
       
        //check password
        if($oldpassword==$oldpassworddb)
        {
            //checking
            if($newpassword==$repeatnewpassword)
            {
                $querychange = mysqli_query($connect,"UPDATE users SET password='$newpassword' WHERE username = '$user'");
                die("Your password has been changed");
            }
            else
                die("New password doesn't match");
        }
        else
            die("Old password doesn't match");
        
    }
    else
    {
    
    echo" 
    <div class='container'>
    <h2>Account details</h2><hr>
    <form action='changepassword.php' method='POST'>
        Old password: <input type='text' name='oldpassword'><br><br>
        New password: <input type='text' name='newpassword'><br><br>
        Repeat new password: <input type='text' name='repeatnewpassword'><br><br>
        <input type='submit' name='submit' value='Change Password'>
    </form>
    
    </div>"
    ;
        
    }
}
else
    die("You must be logged in to change your password!");
    
?>

          <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2><span>D</span>-eallo craft house</h2>
                                <p>paragrah here</p>
                            </div>
                        </div>
                        <div class="col-sm-7">

                        </div>
                        <div class="col-sm-3">
                            <div class="address">
                                <img src="images/home/map.png" alt="" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Service</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Online Help</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Order Status</a></li>
                                    <li><a href="#">Change Location</a></li>
                                    <li><a href="#">FAQ’s</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Quick Shop</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">T-Shirt</a></li>
                                    <li><a href="#">Mens</a></li>
                                    <li><a href="#">Womens</a></li>
                                    <li><a href="#">Gift Cards</a></li>
                                    <li><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>Policies</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privecy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Billing System</a></li>
                                    <li><a href="#">Ticket System</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <h2>About Shopper</h2>
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#">Company Information</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Store Location</a></li>
                                    <li><a href="#">Affillate Program</a></li>
                                    <li><a href="#">Copyright</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2017 Deallo Craft House Inc. All rights reserved.</p>

                    </div>
                </div>
            </div>

        </footer><!--/Footer-->


        <!--paypal get url-->
        <script type="text/javascript">
            <!--
                function getContinueShoppingURL(form){

                // -- Get the href of the currently displayed webpage --
                form.shopping_url.value = window.location.href;
            }
            //-->
        </script>
        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>