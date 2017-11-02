<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

        <title>bootstrap-imageupload</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/bootstrap-imageupload.css" rel="stylesheet">

<style>
   .imageupload {
        margin: 20px 0;
    }
</style>

</head> <!--header-->

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
								<li><a href="sell.php" class="active"><i class="fa fa-money"></i> SELL On Deallo</a></li>
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
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
										<li><a href="cart.html">Cart</a></li> 
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
	</header><!--Header-->
    
    <section id="upload_page">
        <form method="post" action='shop.php' enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Category</h2>
                    <select class="form-control" name="category" id="category" sel_id="">
                        <option value="0" selected="selected">Select your category</option>
                        <option  value='main' style='background-color:#dcdcc3;font-weight:bold;color:#000000;' disabled id='cat1000'  data-label="">-- SPORTSWEAR --</option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label01">  ADIDAS  </option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label02">  NIKE  </option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label02">  ASICS  </option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label02">  PUMA  </option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label02">  SKETCHERS  </option>
                        <option  value='SPORTSWEAR'  id='xxxxx'  data-label="label02">  OTHERS  </option>
                        <option  value='mainb' style='background-color:#dcdcc3;font-weight:bold;color:#000000;' disabled id='cat1000'  data-label="">-- MENS --</option>
                        <option  value='MENS'  id='xxxxx'  data-label="label01">  HUGO BOSS  </option>
                        <option  value='MENS'  id='xxxxx'  data-label="label02">  RALPH LAUREN  </option>
                        <option  value='MENS'  id='xxxxx'  data-label="label01">  LEVI  </option>
                        <option  value='MENS'  id='xxxxx'  data-label="label01">  GUCCI  </option>
                        <option  value='MENS'  id='xxxxx'  data-label="label01">  TIMBERLAND  </option>
                        <option  value='MENS'  id='xxxxx'  data-label="label01">  OTHERS  </option>
                    </select>
                </div>
            </div>
            
            <hr>
            
            <div class="row">
            <h2>Photos</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="imageupload panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title pull-left">Image (1)</h3>
                            </div>
                            <div class="file-tab panel-body">
                                <label class="btn btn-default btn-file">
                                    <span>Browse</span>
                                    <!-- The file is stored here. -->
                                    <input type="file" name="image">
                                </label>
                                <button type="button" class="btn btn-default">Remove</button>
                            </div>
                     
                        </div>
                    </div>
                 
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-sm-9">
                    <h2>Ad Details</h2> 
                    <div id="product_title" class="form-group row">
                        <label class="control-label col-sm-3 hidden-xs">Ad title:</label>
                        
                        
                        <div class="control-group col-xs-12 col-sm-9">
                            <input class="form-control" placeholder="Ad Title" id="title" name="image_text" maxlength="50" value="" type="text"/>
                        </div>
                    </div>
                    <div id="product_desc" class="form-group row">
                        <label class="control-label col-sm-3 hidden-xs">Ad Description:</label>
                        <div class="control-group col-xs-12 col-sm-9">
                            <textarea class="form-control" placeholder="Ad Description" id="desc" name="desc" maxlength="8100" cols="43" rows="10" value="" type="text"></textarea>
                        </div>
                    </div>
                    <span class="help-block"> 
                                                <div tabindex="-1" id="err_company_ad" style="display: none">
	                                               <div class="warning nohistory"></div>
                                                </div>
                                            </span>
			<div id="price" class="form-group row">
                        <label class="control-label col-sm-3 hidden-xs">Price:</label>
                        
                        
                        <div class="control-group col-xs-12 col-sm-9">
                            <input class="form-control" placeholder="Price" id="price" name="price" maxlength="50" value="" type="text"/>
                        </div>
                    </div>
                </div>
            </div>
                
            <hr>
                
            <div class="row">
                <div class="col-sm-9">
                    <h2>My Details</h2> 
                    <div id="name_label_row" class="form-group row"> 
                        <label class="control-label col-sm-3 hidden-xs">Full name (as per NRIC/Passport)</label> 
                        <div class="control-group col-xs-12 col-sm-9">  
                            <input class="form-control" placeholder="Full name (as per NRIC/Passport)" id="name" name="name" maxlength="50" value="" type="text"/> 
                           
                        </div>
                        <div class="col-xs-12"> 
                            <span class="help-block"> 
                                <div tabindex="-1" id="err_company_ad" style="display: none">
	                               <div class="warning nohistory"></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    
                    <div id="seller_lvl" class="form-group row" style="display:visible;">
                        <label class="control-label col-xs-12 col-sm-3" style="padding-top: 9px;">I am a</label> 
                        <div class="control-group col-xs-12 col-sm-9"> 
                            <div class="row"> 
                                <div>    
                                    <div id="seller_lvl"> 
                                        <div class="col-xs-12" id="p_ad_h" > 
                                            <div class="checkbox" style="padding-left: 0px;"> 
                                                <label> 
                                                    <input id="private_ad" name="company_ad" value="0" checked="checked" type="radio" /> 
                                                    <label style="display: inline; font-weight: normal;" id="private_ad_label" for="private_ad">Private Seller</label> 
                                                </label> 
                                            </div> 
                                        </div> 
                                        <div class="clearfix"></div> 
                                        <div class="col-xs-12" id="pro_ad_h" > 
                                            <div class="checkbox" style="padding-left: 0px;"> 
                                                <input id="pro_ad" name="company_ad" value="1"  type="radio" />
                                                <label style="display: inline; font-weight: normal;" id="pro_ad_label" for="pro_ad">Professional Seller
                                                </label> 
                                            </div>
                                        </div> 
                                        <div class="clearfix"></div>
                                        <div class="col-xs-12" id="c_ad_h" > 
                                            <div class="checkbox" style="padding-left: 0px;"> 
                                                <input id="comp_ad" name="company_ad" value="1"  type="radio" />
                                                <label style="display: inline; font-weight: normal;" id="comp_ad_label" for="comp_ad">Company
                                                </label> </div> 
                                        </div> <div class="clearfix"></div> 
                                        <div class="col-xs-12"> 
                                            <span class="help-block"> 
                                                <div tabindex="-1" id="err_company_ad" style="display: none">
	                                               <div class="warning nohistory"></div>
                                                </div>
                                            </span>
                                        </div>
                                    </div> 
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div id="product_title" class="form-group row">
                        <label class="control-label col-sm-3 hidden-xs">Email Address:</label>
                        <div class="control-group col-xs-12 col-sm-9">
                            <input class="form-control" placeholder="Email Address" id="email" name="email" maxlength="50" value="" type="email"/>
                        </div>
                        <div class="col-xs-12"> 
                            <span class="help-block"> 
                                <div tabindex="-1" id="err_company_ad" style="display: none">
	                               <div class="warning nohistory"></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    
                    <div id="product_title" class="form-group row">
                        <label class="control-label col-sm-3 hidden-xs">Phone Number:</label>
                        <div class="control-group col-xs-12 col-sm-9">
                            <input class="form-control" placeholder="Phone Number" id="phone" name="phone" maxlength="11" value="" type="tel">
                        </div>
                        <div class="col-xs-12"> 
                            <span class="help-block"> 
                                <div tabindex="-1" id="err_company_ad" style="display: none">
	                               <div class="warning nohistory"></div>
                                </div>
                            </span>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <input type="submit"  name="upload" value="Upload">
                
        </div>
            
        </form>
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

        <script src="js/jquery.js"></script>
        <script src="js/price-range.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/bootstrap-imageupload.js"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>

    </body>

</html>
