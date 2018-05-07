<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<title>Fashion World</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" />
		<link href="<?php echo base_url();?>/libs/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="<?php echo base_url();?>/libs/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/menu.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/header.css" rel="stylesheet" type="text/css" media="all" />
			    <link rel="stylesheet" href="<?php echo base_url();?>/libs/css/slicknav.css">
        <link href="<?php echo base_url();?>/libs/css/slider_style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/footer.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/responsive.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>/libs/css/style.css" rel="stylesheet" type="text/css" media="all" />	
		
	</head>
	<body>
	<!--header-->
	<div class="header">
	    <div class="container">
		<div class="row">
		<div class="head-top">
				<div class="col-md-2 logo ">
					<a href="<?php echo base_url();?>home"><img src="<?php echo base_url();?>/libs/images/logo.png" alt=""width="250px" height="90px"></a>	

				</div>
		
		 <div class="col-md-8 h_menu4">
				<ul class="memenu skyblue">
					  <li class=" grid"><a  href="<?php echo base_url();?>home">Home</a></li>	
				      <li><a href="<?php echo base_url();?>home/products">Men</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>All Clothing</h4>
									<ul>
									<?php foreach($men_categories as $category)
										{ 
											echo ' <li><a href="'.base_url().'home/category_product/'.$category['catagory_id'].'">'.$category['catagory_name'].'</a></li>';
										}
									?>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Footwear</h4>
									<ul>
										<?php foreach($footwear_categories as $category)
										{ 
											echo ' <li><a href="'.base_url().'home/category_product/'.$category['catagory_id'].'">'.$category['catagory_name'].'</a></li>';
										}
									?>
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<?php foreach($brands as $brand)
										{ 
											echo ' <li><a href="'.base_url().'home/brand_product/'.$brand['brand_id'].'">'.$brand['brand_name'].'</a></li>';
										}
									?>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a href="<?php echo base_url();?>home/products">Women</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<h4>All Clothing</h4>
									<ul>
										<?php foreach($women_categories as $category)
										{ 
											echo ' <li><a href="'.base_url().'home/category_product/'.$category['catagory_id'].'">'.$category['catagory_name'].'</a></li>';
										}
									?>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Footwear</h4>
									<ul>
										<?php foreach($footwear_categories as $category)
										{ 
											echo ' <li><a href="'.base_url().'home/category_product/'.$category['catagory_id'].'">'.$category['catagory_name'].'</a></li>';
										}
									?>
									
									</ul>
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4>Popular Brands</h4>
									<ul>
										<?php foreach($brands as $brand)
										{ 
											echo ' <li><a href="'.base_url().'home/brand_product/'.$brand['brand_id'].'">'.$brand['brand_name'].'</a></li>';
										}
									?>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a  href="#">About</a></li>				
				<li><a  href="<?php echo base_url();?>home/contact">Conact</a></li>
			  </ul> 
			</div>
				<div class=" col-md-2 number">
				<i class="glyphicon glyphicon-phone"></i>085 596 234</span>
					
				</div>
			
				
			</div>
		
		</div>
	</div>	
	</div>
<section id="user text-center">
	    <div class="col-md-offset-2 col-md-2 user-right ">	
			<a href="<?php echo base_url();?>home/show_cart/"><img src="<?php echo base_url();?>libs/images/cart.png"></i>
			<?php if(isset($b))
			{
				
				echo ' ('. count($b).')';
			}
		
			?></a>
		</div>
		<div class="col-md-offset-4 col-md-4 user-left pull-right">	
			
			
		<?php if($this->session->userdata('is_logged_in'))
		{
			echo '<span class="user_profile"><i class="fa fa-user"></i>'.' ' .$this->session->userdata('customer_username').'</span>';
			echo '<span class="logout"><a href="'.base_url().'home/user_logout"><i class="fa fa-lock"></i> Logout</a></span>';
		}?>	
		
		</div>
		
		  
		<div class="clearfix"> </div>		
	</section>
	<section id="search">
	<div class="container">
		<div class="row">							
		<div class="box ">
			<div class="col-sm-4 col-md-4  header-left ">		
				<p class="log"><a href="<?php echo base_url();?>home/user_login_page">Login</a>
				<span>or</span><a href="<?php echo base_url();?>home/register">Signup</a></p>
			</div>		
			<div id="sb-search" class="sb-search col-md-6 col-md-offset-2">
				<?php
					echo form_open('home/search_product');
				
					$search=array(
						 'name'=>'product_search',
						 'class'=>'sb-search-input',
						 'type'=>'search',
						 'id'=>'search',
						 'placeholder'=>'Enter your search term...',
						 'required'=>'required',
						 'value'=>set_value('product_search')
						 
						);	
					echo form_input($search);
						$submit=array(
						 'name'=>'submit',
						 'class'=>'sb-search-submit',
						 'type'=>'submit'
					
						 );
					echo form_submit($submit);
					echo '<span class="sb-icon-search"> </span>';
					echo form_close();
				?>
			</div>
		</div>
		</div>
	</div>				
	</section>
	 <?php 
			if($this->input->get('message'))
			{
			    echo'<h4 class="text-center alert-success" style="width:600px;height:auto;margin:0 auto;color:#005a00;font-family:OleoScript-Regular;">';
				echo '<p style="padding:20px;">'.$this->input->get('message').'</p></h4>';
			}
		
		?>
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1><?php echo $category_name;?></h1>
			<?php

			if(isset($no_product))
			{
				echo'<span class="content-top1">Products of this category are out of stoke.</span>';
			}
		   
		  else if(isset($category_product))
		  {
			
			?>	  
			<div class="content-top1">
					<?php foreach($category_product as $category_products){?>
					<div class="col-md-3 col-md2">
						<div class="col-md1 simpleCart_shelfItem">
							   
							   <a href="<?php echo base_url(); ?>home/product/<?php echo $category_products['product_id'];?>"><img src="<?php echo base_url();?>/libs/products/<?php echo $category_products['product_image']; ?>"class="img-responsive" width="185px" height="207px"></a>

							<h3><?php echo $category_products['product_name']; ?></h3>
							
							<div class="price">
									<h5 class="item_price">TK. &nbsp;<?php echo $category_products['product_price'];?></h5>
									<a href="<?php echo base_url(); ?>/index.php/home/product/<?php echo $category_products['product_id'];?>" class="item_add">View Details</a>
									<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>	
				<?php } ?>
		        <?php } ?>
				<div class="clearfix"> </div>
				
			</div>				
			
		</div>
	</div>
</div>
<!--//content-->
<section>
		<div class="other-products">
			<div class="container">
			<div class="content-top">
				<h1 style="padding-bottom:1.5em!important;">Similar Products In <?php echo $category_name;?> collection</h1>      			
				     <ul id="flexiselDemo3">
					 <?php foreach($featured_products as $featured){?>
						<li>
                        <div class="col-md">						
							<a href="<?php echo base_url(); ?>home/product/<?php echo $featured['product_id'];?>"><img src="<?php echo base_url();?>/libs/products/<?php echo $featured['product_image']; ?>"class="img-responsive" ></a>
							<h3><?php echo $featured['product_name']; ?></h3>
							<h3>TK. &nbsp;<?php echo $featured['product_price'];?></h3>
						</div>	
						</li>
						<?php } ?>
				     </ul>
			</div>
        </div>			
<!--footer-->
<div class="footer">
		<div class="container">
		
		</div>
		<div class="footer-bottom">
			<div class="container text-center">
			<div class="row">
					<div class="col-md-3 footer-bottom-cate">
					<?php ?>
						<h6>Top Categories</h6>
						<ul>
						<?php foreach($categories as $category)
		                        { 
									echo ' <li><a href="'.base_url().'home/category_product/'.$category['catagory_id'].'">'.$category['catagory_name'].'</a></li>';
								}
					        ?>
						</ul>
					</div>
					<div class=" col-md-3 footer-bottom-cate">
						<h6>Top Brands</h6>
						<ul>
							<?php foreach($brands as $brand)
										{ 
											echo ' <li><a href="'.base_url().'home/brand_product/'.$brand['brand_id'].'">'.$brand['brand_name'].'</a></li>';
										}
									?>
						</ul>
					</div>
					<div class="col-md-3 footer-bottom-cate">
						<h6>Term & Policy</h6>
						<ul>
							<li><a href="#">Curabitur sapien</a></li>
							<li><a href="#">Dignissim purus</a></li>
							<li><a href="#">Tempus pretium</a></li>
							<li><a href="#">Dignissim neque</a></li>
							<li><a href="#">Ornared id aliquet</a></li>
							<li><a href="#">Ornared id aliquet</a></li>
							
							
						</ul>
					</div>
					<div class="col-md-3 footer-bottom-cate">
						<h6>Our Address</h6>
						<ul>
							<li><a href="#">9870 St Vincent Place. </a></li>
							<li><a href="#">Telephone: +1 800 547 5478</a></li>
							<li><a href="#">Mobile: +88 085 596 234</a></li>
							<li><a href="#">shopping@fashionworld.com</li>
							<li><a href="#">
								<ul class="social-media">
									<li><a href="http://www.twitter.com"><span class="fa fa-facebook"><span></a> </li>
									<li><a href="http://www.twitter.com"><span class="fa fa-twitter"><span> </a></li>
									<li><a href="http://www.twitter.com"><span class="fa fa-google-plus"><span> </a></li>
									<li><a href="http://www.twitter.com"><span class="fa fa-pinterest"><span> </a></li>

								</ul>
							</li>
							
						</ul>
					</div>
					
				</div>	
				</div>
		
		</div>
			<div class="clearfix"> </div>
	   <p class="footer-class"style="background:#000;"> © 2015 Fashion World. All Rights Reserved </p>	
	</div>
 
	<!--//footer-->
	
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/memenu.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/function.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/modernizr.custom.min.js"></script>    
	<!-- search-scripts -->
		<script src="<?php echo base_url();?>/libs/js/classie.js"></script>
		<script src="<?php echo base_url();?>/libs/js/uisearch.js"></script>
			<script>
				new UISearch( document.getElementById( 'sb-search' ) );
			</script>
		<!-- //search-scripts -->			
 <script src="<?php echo base_url();?>/libs/js/jquery.slicknav.js"></script>
	<script>$(document).ready(function(){$(".memenu").memenu();});</script>
	<script src="<?php echo base_url();?>/libs/js/simpleCart.min.js"> </script>
	
  <script type="text/javascript">
	 $(window).load(function() {
		$("#flexiselDemo3").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,    		
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: { 
				portrait: { 
					changePoint:480,
					visibleItems: 1
				}, 
				landscape: { 
					changePoint:640,
					visibleItems: 2
				},
				tablet: { 
					changePoint:768,
					visibleItems: 3
				}
			}
		});
		
	});
   </script>
   <script type="text/javascript" src="<?php echo base_url();?>/libs/js/jquery.flexisel.js"></script>
	<!--script-->
	<script>					
			$(".memenu").click(function(){
				$(".skyblue ul").slideToggle("slow" , function(){
				});
			});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/libs/js/easing.js"></script>
	 <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	<!--/script-->
	<!--script-->
	<script type="text/javascript">
			$(document).ready(function() {
					/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
					*/
			$().UItoTop({ easingType: 'easeOutQuart' });
	});
	</script>
	
	<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--script-->
	</body>
</html>