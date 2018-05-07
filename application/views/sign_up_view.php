<html lang="en" class="no-js">
	<head>
		<title> <?php echo $title; ?> </title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		
		<!--======== All Stylesheet =========-->
		
		<!--========  Slider =========-->
		<!--<link href="bootstrap.min.css" rel="stylesheet">-->
		<link href="<?php echo site_url(); ?>site_elements/Home_view/Slider/producta.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/Slider/slider.css" rel="stylesheet">
		<!--============-->		
		<!--========  Product =========-->
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/price-range.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/animate.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/main.css" rel="stylesheet">
		<link href="<?php echo site_url(); ?>site_elements/Home_view/product/css/responsive.css" rel="stylesheet">
		<!--============-->
			
		<!--=== Dropdown  searchber ===-->
		<link rel="stylesheet" href="<?php echo site_url(); ?>site_elements/Home_view/css/reset.css"> <!-- CSS reset -->
		<link rel="stylesheet" href="<?php echo site_url(); ?>site_elements/Home_view/css/searchberdrop.css"> <!-- Resource style -->
		<script src="<?php echo site_url(); ?>site_elements/Home_view/js/modernizr.js"></script> <!-- Modernizr -->
		<!--============-->

		<!--========  Pclick =========-->
		<link href="<?php echo site_url(); ?>site_elements/Home_view/css/pclick_style.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>site_elements/Home_view/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
		<!--============-->
		

		<!--=== end plugins =============================================-->

		
	</head>
	
	<body>
			
			<header class="cd-main-header animate-search">
				<!--
					<div class="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>-->
					<div class="cd-logo"><a class="navbar-brand default-logo" href="#">Flower Shop</a> </div>

				<nav class="cd-main-nav-wrapper">										
					<a href="#search" class="cd-search-trigger cd-text-replace">Search</a>
					
					<ul class="cd-main-nav">
						<li><a href="<?php echo base_url();?>home">Home</a></li>
						<li><a href="#0">Products</a></li>
						<li><a href="#0">Store</a></li>
						<li><a href="#0">Order</a></li>
						<li><a href="#0">Payments</a></li>
						<li><a href="<?php echo site_url('auth/login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<li><a href="<?php echo site_url('auth/signup'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						
					</ul> <!-- .cd-main-nav -->
				</nav> <!-- .cd-main-nav-wrapper -->

				<a href="#0" class="cd-nav-trigger cd-text-replace">Menu<span></span></a>
			</header>


			<div class="container"> 
				 <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="<?php echo base_url().'/auth/signupValidation' ?>">
                                <?php if(isset($_SESSION['signupsuccess'])){ ?>
                                
                                	<div class="alert alert-success"> <?php echo $_SESSION['signupsuccess'] ?></div>


                                <?php } ?>
                                <?php  echo validation_errors('<div class="alert alert-danger">', '</div>'); ?> 
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passconf" placeholder="Confirm Password">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="register" value="1" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%; text-align:center" >
                                            Already have an account! 
                                        <a href="<?php echo site_url('auth/login'); ?>">Sign In Here</a>
                                        </div>
                                    </div>
                                </div>  
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 


			</div>
</body>
</html>