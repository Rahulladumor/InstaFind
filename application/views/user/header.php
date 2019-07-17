<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Listing - Classified Listing HTML Template">
	<meta name="keywords" content="Listing,HTML,CSS,Classified,blog,business,corporate,clean,responsive">
	<meta name="author" content="Muqadass Aleem, Muammad Asif">
	
	<title>Insta-find</title>
	
    <!--================================FAVICON================================-->
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>assets/user/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>assets/user/images/favicon/favi.png">
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/user/images/favicon/favi.png" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url();?>assets/user/images/favicon/favi.png" type="image/x-icon">
	<link rel="manifest" href="<?php echo base_url();?>assets/user/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url();?>assets/user/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/bootstrap/css/bootstrap.min.css">


	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/preloader.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/color/color.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/user_info.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/css/font-awesome.css">
    
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/fonts/fontawesome-all.css">         -->
	<!--================================GOOGLE FONTS=========================================-->
	
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- <style>
      body {
        font-family: 'Montserrat', serif;
        font-size: 48px;
      }
    </style> -->
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/user/assets/revolution_slider/css/revslider.css" media="screen" />

	<!-- <script src="<?php echo base_url()?>assets/user/js/jquery-3.2.1.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/user/js/jquery-1.11.3.min.js"></script>
	<style>
	/* mPopup box style */
	.mpopup {
	    display: none;
	    position: fixed;
	    z-index: 1;
	    padding-top: 100px;
	    left: 0;
	    top: 0;
	    width: 100%;
	    height: 100%;
	    overflow: auto;
	    background-color: rgb(0,0,0);
	    background-color: rgba(0,0,0,0.4);
	}
	.mpopup-content {
	    position: relative;
	    background-color: #fefefe;
	    margin: auto;
	    padding: 0;
	    width: 60%;
	    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	    -webkit-animation-name: animatetop;
	    -webkit-animation-duration: 0.4s;
	    animation-name: animatetop;
	    animation-duration: 0.4s
	}

	.mpopup-head {
	    padding: 2px 16px;
	    background-color: #08c2f3;
	    color: white;
	}
	.mpopup-main {padding: 2px 16px;}
	.mpopup-main input[type="text"]{
	    width: 30%;
	    height: 25px;
	    font-size: 15px;
	}
	.mpopup-main input[type="submit"]{
	    /*padding: 5px;
	    font-size: 15px;
	    font-weight: bold;
	    background-color: #333;
	    outline: none;
	    border: none;
	    color: #fff;*/
	    border: none;
	    border-radius: 4px;
	    color: #fff;
	    text-transform: uppercase;
	    cursor: pointer;
	    padding: 15px 30px;
	    border: 1px solid #eee;
	    margin-bottom: 10px;
	    box-shadow: none;
	}
	.mpopup-foot {
	    padding: 5px 16px;
	    background-color: #08c2f3;
	    color: white;
	}

	/* add animation effects */
	@-webkit-keyframes animatetop {
	    from {top:-300px; opacity:0}
	    to {top:0; opacity:1}
	}

	@keyframes animatetop {
	    from {top:-300px; opacity:0}
	    to {top:0; opacity:1}
	}

	/* close button style */
	.close {
	    color: white;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	}
	.close:hover, .close:focus {
	    color: #000;
	    text-decoration: none;
	    cursor: pointer;
	}
	</style>
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }
      .pac-container.pac-logo
      {
      	position: absolute !important; 
      }
      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 450px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
      #floating-panel {
        width: 440px;
      }
      #place-id {
        width: 250px;
      }
    </style>
</head>
<body style="position: relative;">
	<!-- <div class="preloader preloader2" id="loader">
		 <span class="preloader-gif"></span> 
		<div class="cssload-loader cssload2-loader">
			<div class="cssload-square cssload-square--main">
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
			</div>
		</div>
	</div> -->
<!-- 		<div class="preloader2" hidden="">
		<span class="preloader-gif"></span> 
		<div class="cssload2-loader">
			<div class="cssload-square cssload-square--main">
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
				<div class="cssload-square cssload-square--mini"></div>
			</div>
		</div>
	</div> -->

	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="<?php echo site_url("user/login_con/index"); ?>" class="smallogo"><img src="<?php echo base_url();?>assets/user/images/logo.png" width="120" alt="" /></a>
		</div>
		<!--================================HEADER==========================================-->
		<div class="header">
			<!-- <div class="top-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12 pull-left">
						<ul class="mobile-sub wsmenu-list pull-right">
							<li><a href="<?php echo site_url("admin/login");?>" target="_blank">Admin</a></li>
							<li><a href="<?php echo site_url("user/login_con");?>" target="_blank">User</a></li>
							<li><a href="<?php echo site_url("cityadmin/dashboard_con");?>" target="_blank">City Admin</a></li>
							<li><a href="<?php echo site_url("business/owner_con");?>" target="_blank">Business</a></li>
						</ul>
						</div>
					</div>
				</div>
			</div> -->
			<!-- =========================================================================== -->
			<div class="top-toolbar"><!--header toolbar-->
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12 col-xs-12 pull-left">
							<div class="social-content">
								<ul class="social-links">
									<li><a class="linkedin" href="#" target="_blank">
										<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a class="youtube" href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
									<li id="loginli">
										<button class = "login" data-toggle = "modal" data-target = "#login" <?php if(isset($userinfo)) echo "hidden"; ?> >login</button>
									</li>
									<li>
										<button class = "register" data-toggle = "modal" data-target = "#register" <?php if(isset($userinfo)) echo "hidden"; ?>>register</button>
									</li>
									<li id="logoutli">
										<button class = " profile "  <?php if(isset($userinfo)){ echo "visible"; }else{
										echo "hidden";}?> >
											<a id="logoutbtn" href="<?php echo site_url("user/login_con/user_info"); ?>"> <?php echo @$userinfo['name']; ?>
											</a>
										</button>
									</li>
									<li>
										<button class = "register" <?php if(isset($userinfo)) {echo "visible";}else{echo "hidden";} ?>><a href="<?php echo site_url("user/login_con/logout_user"); ?>">  logout </a> </button>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
							<div class="top-contact-info">
								<ul>
									<li class="toolbar-email"><i class="fa fa-envelope-o"></i> Instafindsupport@india.com</li>
									<li class="toolbar-contact"><i class="fa fa-phone"></i> +91 70464 11292</li>
									<li><a class="toolbar-new-listing" href="<?php echo site_url("business/owner_con/index"); ?>" target="_blank"><i class="fa fa-plus-circle"></i> Add Business</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--header toolbar end-->
			<div class="nav-wrapper"><!--main navigation-->
				<div class="container">
					<!--Main Menu HTML Code-->
					<nav class="wsmenu slideLeft clearfix">
						<div class="logo pull-left"><a href="<?php echo site_url("user/login_con/index"); ?>" title="Responsive Slide Menus"><img src="<?php echo base_url();?>assets/user/images/logoi.png" alt="" /></a></div>
						<!-- <ul class="mobile-sub wsmenu-list pull-right">
							<li><a href="index.html" class="">Home</a>
								<ul class="wsmenu-submenu">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
									<li><a href="index-3.html">Home 3</a></li>
									<li><a href="index-4.html">Home 4</a></li>
									<li><a href="index-5.html">Home 5</a></li>
									<li><a href="index-6.html">Home 6</a></li>
									<li><a href="index-7.html">Home 7</a></li>
									<li><a href="index-8.html">Home 8</a></li>
								</ul>
							</li>
							<li><a href="pricing.html" class="">Pricing</a>
								<ul class="wsmenu-submenu">
									<li><a href="pricing.html">Pricing 1</a></li>
									<li><a href="pricing-2.html" class="">Pricing 2</a></li>
								</ul>
							</li>
							<li><a href="category.html">categories <span class="arrow"></span></a></li>
							<li><a href="listing-archive.html">listings <span class="arrow"></span></a></li>
							<li><a href="#">Shortcodes <span class="arrow"></span></a>
								<div class="megamenu clearfix">
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-rs-slider1.html">Revolution Slider</a></li>
										<li><a href="sc-rs-slider2.html">Post Slider</a></li>
										<li><a href="sc-map.html">Geo Location Map</a></li>
										<li><a href="sc-services.html">Services</a></li>
										<li><a href="sc-locations.html">Locations</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-category.html">Categories</a></li>
										<li><a href="sc-listing.html">Listings</a></li>
										<li><a href="sc-feature-carousel.html">Feature Listing</a></li>
										<li><a href="sc-testimonial.html">Testimonial</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-funfacts.html">FunFacts Counter</a></li>
										<li><a href="sc-pricing.html">Pricing Tables</a></li>
										<li><a href="sc-blog.html">Blog Style</a></li>
										<li><a href="sc-callout.html">Callout</a></li>
									</ul>
									<ul class="col-lg-3 col-md-3 col-xs-12 link-list">
										<li><a href="sc-sidebar.html">SideBars</a></li>
										<li><a href="sc-social.html">Social Styles</a></li>
										<li><a href="sc-partner.html">Partners</a></li>
										<li><a href="sc-search-form.html">Search Form</a></li>
									</ul>
								</div>
							  </li>
							<li><a href="#">pages <span class="arrow"></span></a>
								<ul class="wsmenu-submenu">
									<li><a href="about.html">Features <span class="arrow"></span></a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="single.html">Blog Single</a></li>
									<li><a href="single-listing.html">listing Single</a></li>
									<li><a href="401.html">Error 401</a></li>
									<li><a href="403.html">Error 403</a></li>
									<li><a href="404.html">Error 404</a></li>
									
								</ul>
							</li>
						  <li><a href="contact.html">Contact Us <span class="arrow"></span></a></li>
						</ul> -->
					</nav>
				</div>
			</div><!--main navigation end-->
		</div><!-- header end -->