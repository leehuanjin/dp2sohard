<?php include('server.php'); ?>


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
                                    
                                    
                                    <li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
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
                                    <li class="dropdown"><a href="shop.php" class="active">Shop<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="shop.php" class="active">Products</a></li>
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

        <section id="advertisement">
            <div class="container">
                <img src="images/shop/advertisement.jpg" alt="" />
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="sportswear.php" class="active">
                                                Sportswear
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                      <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="mens.php">
                                                MENS
                                            </a>
                                        </h4>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Womens
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="womens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="womens.php">Fendi</a></li>
                                                <li><a href="womens.php">Guess</a></li>
                                                <li><a href="womens.php">Valentino</a></li>
                                                <li><a href="womens.php">Dior</a></li>
                                                <li><a href="womens.php">Versace</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="kids.php">Kids</a></h4>
                                    </div>
                                </div>
              
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="households.php">Households</a></h4>
                                    </div>
                                </div>
                 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="bags.php">Bags</a></h4>
                                    </div>
                                </div>
                      
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a href="electronics.php">Electronics</a></h4>
                                    </div>
                                </div>
                            </div><!--/category-productsr-->

                            <div class="brands_products"><!--brands_products-->
                                <h2>Brands</h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                        <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                        <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                        <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                        <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                        <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                        <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                                    </ul>
                                </div>
                            </div><!--/brands_products-->

                            <div class="price-range"><!--price-range-->
                                <h2>Price Range</h2>
                                <div class="well">
                                    <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                    <b>$ 0</b> <b class="pull-right">$ 600</b>
                                </div>
                            </div><!--/price-range-->

                            <div class="shipping text-center"><!--shipping-->
                                <img src="images/home/shipping.jpg" alt="" />
                            </div><!--/shipping-->

                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">WOMENS</h2>
                        
                           <?php
                            while ($row = mysqli_fetch_array($result)) {
                                
                                if($row['category'] =="WOMENS"){
                                echo "<form enctype='multipart/form-data' method='post' action='https://www.paypal.com/cgi-bin/webscr'>";
                                echo "<div class='col-sm-4' enctype='multipart/form-data' method='post'>";

                                echo "<div class='product-image-wrapper'>";

                                echo "<div class='single-products'>";

                                echo "<div class='productinfo text-center'>";

                                echo "<div id='img_div'>";
                                echo "<img height='250' src='images/".$row['image']."' >";
                                echo "<h2>$".$row['price']."</h2>";
                                echo "<h3>".$row['image_text']."</h3>";
                                
                                echo "</div>";

                                
                                echo "<div>";
                                echo " <form target='paypal' action='https://www.paypal.com/cgi-bin/webscr' method='post'>";

                                echo " <input type='hidden' name='business' value='seller@deallocraft.com'>";

                                 
                                    echo "<input type='hidden' name='cmd' value='_cart'>";
                                    echo "<input type='hidden' name='add' value='1'>";

                              
                                    echo "<input type='hidden' name='item_name' value='".$row['image_text']."'>";
                                    echo "<input type='hidden' name='amount' value='".$row['price']."'>";
                                    echo "<input type='hidden' name='currency_code' value='USD'>";

                        
                                    echo "<input type='hidden' name='shopping_url' value=''>";

                                 
                                        
                                    echo "<input type='image' name='submit' onclick=getContinueShoppingURL(this.form) 
                                    src='https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png' alt='Add to Cart'>";
                                        
                                        
                                        
                                    echo "<img alt='' width='1' height='1' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' >";

                                   echo "</form>";	
                                echo"</div>";
                                 


                                $_SESSION['Fid'] = $row['product_id'];

                                echo "<div class='choose'>";
                                echo  "<ul class='nav nav-pills nav-justified'>";

                   
                                echo  "</ul>";
                                echo  "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</form>";
                            }
                            }
                            ?>  
                         

                        </div><!--features_items-->
                    </div>
                </div>
            </div>
        </section>

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
