
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php echo $title; ?></title>
		
		
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
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="post" action="<?php echo base_url().'auth/loginValidation' ?>">
                              <?php if(isset($_SESSION['signupsuccess'])){ ?>
                                
                                    <div class="alert alert-success"> <?php echo $_SESSION['signupsuccess'] ?></div>


                              <?php } ?>
                              <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>      
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-email" type="text" class="form-control" name="email" value="" placeholder="Enter your email address">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-primary">Login  </button>
                                      
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="<?php echo site_url('auth/signup'); ?>">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>

<script>
$(document).ready(function() {
    $('#loginForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
</script>     



                        </div>                     
                    </div>  
        </div>
    </div>

</body>

</html>