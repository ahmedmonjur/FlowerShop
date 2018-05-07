
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Flower Shop</title>
		
		
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
	
		<!--======== Container=========-->
		<div id="container-fluid">
			<main class="cd-main-content">
				<!-- your content here -->
				<div class="content-center">
					
				  <!--======== slide =========-->
					<section id="what-we-do" class="what-we-do">
						<div class="container">
							  
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="row">
									   <div class="col-md-12 col-xs-12 p-l-r-0">
											<div id="about" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner" role="listbox">
													<div class="item active">
														<img src="<?php echo site_url(); ?>site_elements/Home_view/img/nice.jpg" width="100%" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo site_url(); ?>site_elements/Home_view/img/IMG_1348.JPG" width="100%" alt="" />
													</div>
													<div class="item">
														<img src="<?php echo site_url(); ?>site_elements/Home_view/img/1.JPG" width="100%" alt="" />
													</div>
												</div>
											</div>
											
										</div>
									</div>   
								</div>   
							</div>   
						</div>
					</section>
					<!--======== slide =========-->
					
				</div>
				
		
			</main>
			<div class="col-md-12 col-xs-12 p-l-r-0">
				<div class="product">
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
														<a data-toggle="collapse" data-parent="#accordian" href="#Occasion">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Occasion
														</a>
													</h4>
												</div>
												<div id="Occasion" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<?php foreach($Occasions as $key)
																{
																	echo ' <li><a href="'.base_url().'home/occasions_product/'.$key['occasion_id'].'">'.$key['occasion_name'].'</a></li>';
																	
																}
															?>
														
														</ul>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Type">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Type
														</a>
													</h4>
												</div>
												<div id="Type" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<?php foreach($product_type as $key)
																{
																	echo ' <li><a href="'.base_url().'home/category_product_type/'.$key['product_type_id'].'">'.$key['product_type'].'</a></li>';
																	
																}
															?>
															
														</ul>
													</div>
												</div>
											</div>	
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Jewelery">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Jewelery
														</a>
													</h4>
												</div>
												<div id="Jewelery" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li><a href="#">Wedding</a></li>
															<li><a href="#">Holud</a></li>
															<li><a href="#">Mehedi</a></li>
															<li><a href="#">1st Falgun</a></li>
															<li><a href="#">1st Boishak</a></li>
															<li><a href="#">Cultural Function</a></li>
															
														</ul>
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Bouquets">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Bouquets
														</a>
													</h4>
												</div>
												<div id="Bouquets" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li><a href="#">Bride Bouquet/Wedding Flower </a></li>
															<li><a href="#">Bride's maid</a></li>
															<li><a href="#">Valentine</a></li>
															<li><a href="#">Gift</a></li>
															<li><a href="#">Other</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Decoration">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Decoration
														</a
													</h4>
												</div>
												<div id="Decoration" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li><a href="#">Wedding hall </a></li>
															<li><a href="#">Holud Stage</a></li>
															<li><a href="#">Reciption</a></li>
															<li><a href="#">Outdoor</a></li>
															<li><a href="#">Door Lintel Flower/Mirror Flower</a></li>
															<li><a href="#">Leaf-shaped </a></li>
															<li><a href="#">Wreaths</a></li>
															<li><a href="#">Display Flower</a></li>
															<li><a href="#">Floor Mounted</a></li>
															<li><a href="#">Wall Mounted </a></li>
															<li><a href="#">Hanging Baskets</a></li>
															<li><a href="#">Other</a></li>
														</ul>
													</div>
												</div>
												
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a href="#">Wedding</a></h4>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a href="#">Receiption</a></h4>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a href="#">Flower</a></h4>
												</div>
											</div>
												<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Die">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Die collection
														</a>
													</h4>
												</div>
												<div id="Die" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<li><a href="#">Silk Flower</a></li>
															<li><a href="#">Ribbon Flower</a></li>
															<li><a href="#">Valentine</a></li>
															<li><a href="#">Gift</a></li>
															<li><a href="#">Other</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title"><a href="#">aaaa</a></h4>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#Category">
															<span class="badge pull-right"><i class="fa fa-plus"></i></span>
															Category
														</a>
													</h4>
												</div>
												<div id="Category" class="panel-collapse collapse">
													<div class="panel-body">
														<ul>
															<?php foreach($Category as $key)
																{
																	echo ' <li><a href="'.base_url().'home/category_product/'.$key['category_id'].'">'.$key['category_name'].'</a></li>';
																	
																}
															?>
														
														</ul>
													</div>
												</div>
											</div>
										</div><!--/category-products-->
									
										<div class="brands_products"><!--brands_products-->
											<h2>Colors</h2>
											<div class="brands-name">
												<ul class="nav nav-pills nav-stacked">
													<li><a href="#"> <span class="pull-right">(10)</span>Red</a></li>
													<li><a href="#"> <span class="pull-right">(5)</span>Blue</a></li>
													<li><a href="#"> <span class="pull-right">(27)</span>White</a></li>
													<li><a href="#"> <span class="pull-right">(32)</span>Yellow</a></li>
													<li><a href="#"> <span class="pull-right">(5)</span>Green</a></li>
													<li><a href="#"> <span class="pull-right">(2)</span>Purple</a></li>
													<li><a href="#"> <span class="pull-right">(8)</span>Orange</a></li>
													<li><a href="#"> <span class="pull-right">(4)</span>Sky Blue </a></li>
													<li><a href="#"> <span class="pull-right">(11)</span>Pink</a></li>
													<li><a href="#"> <span class="pull-right">(0)</span>Black</a></li>
													<li><a href="#"> <span class="pull-right">(15)</span>Multi</a></li>
												</ul>
											</div>
										</div><!--/brands_products-->
										
										<div class="price-range"><!--price-range-->
											<h2>Price Range</h2>
											<div class="well text-center">
												 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
												 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
											</div>
										</div><!--/price-range-->
										
										<div class="shipping text-center"><!--shipping-->
											<img src="<?php echo site_url(); ?>site_elements/Home_view/other\cart logo/1.PNG" alt="" />
										</div><!--/shipping-->
									
									</div>
								</div>
								
								<div class="col-sm-9 padding-right">
									<div class="features_items"><!--features_items-->
										<h2 class="title text-center">Features Items</h2>
									<?php foreach($lat_prods as $prod){?>
										<div class="col-sm-4">																				
											<div class="product-image-wrapper">
												<div class="single-products">												
													<div class="productinfo text-center">
														<ul class="projects list">
															
															<li>	
																	<figure><a href="<?php echo site_url(); ?>site_elements/Product_Image/<?php echo $prod['image'];?>" rel="work"><img src="<?php echo site_url(); ?>site_elements/Product_Image/<?php echo $prod['image'];?>"alt="Image" width="225px" /></a>
																	</figure>								
															</li>	
																
														</ul>
														<h2>BDT. &nbsp;<?php echo $prod['product_unit_price'];?></h2>
														<p><?php echo $prod['product_name']; ?></</p>
														<h3><a href="<?php echo base_url(); ?>home/product/<?php echo $prod['product_id'];?>">View Details</a></h3>
														<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													</div>
												</div>
												<div class="choose">
													<ul class="nav nav-pills nav-justified">
														<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
														<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
													</ul>
												</div>
											</div>
										</div>
															<?php 
					}  
						?>

									
									
										
									</div><!--features_items-->
									
							
							
									
						
									
								</div>
							</div>
						</div>
					</section>
				</div>
			</div> 
		</div>	
		<!--======== Container end=========-->
		
		<!--======== search=========-->
		<div id="search" class="cd-main-search">
			<form>
				<input type="search" placeholder="Search...">

				<div class="cd-select">
					<span>in</span>
					<select name="select-category">
						<option value="all-categories">all Categories</option>
						<option value="category1">Category 1</option>
						<option value="category2">Category 2</option>
						<option value="category3">Category 3</option>
					</select>
					<span class="selected-value">all Categories</span>
				</div>
			</form>

			<div class="cd-search-suggestions">
				<div class="news">
					<h3>News</h3>
					<ul>
						<li>
							<a class="image-wrapper" href="#0"><img src="<?php echo site_url(); ?>site_elements/Home_view/img/placeholder.png" alt="News image"></a>
							<h4><a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<time datetime="2016-01-12">Feb 03, 2016</time>
						</li>

						<li>
							<a class="image-wrapper" href="#0"><img src="<?php echo site_url(); ?>site_elements/Home_view/img/placeholder.png" alt="News image"></a>
							<h4><a class="cd-nowrap" href="#0">Incidunt voluptatem adipisci voluptates fugit beatae culpa eum, distinctio, assumenda est ad</a></h4>
							<time datetime="2016-01-12">Jan 28, 2016</time>
						</li>

						<li>
							<a class="image-wrapper" href="#0"><img src="<?php echo site_url(); ?>site_elements/Home_view/img/placeholder.png" alt="News image"></a>
							<h4><a class="cd-nowrap" href="#0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, esse.</a></h4>
							<time datetime="2016-01-12">Jan 12, 2016</time>
						</li>
					</ul>
				</div> <!-- .news -->

				<div class="quick-links">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="#0">Find a store</a></li>
						<li><a href="#0">Accessories</a></li>
						<li><a href="#0">Warranty info</a></li>
						<li><a href="#0">Support</a></li>
						<li><a href="#0">Contact us</a></li>
					</ul>
				</div> <!-- .quick-links -->
			</div> <!-- .cd-search-suggestions -->

			<a href="#0" class="close cd-text-replace">Close Form</a>
		</div> <!-- .cd-main-search -->

		<div class="cd-cover-layer"></div> <!-- cover main content when search form is open -->
		<!--======== search=========-->

		 <!--======== footer =========-->
		   
		<!--======== end footer =========-->
		
			 <!--======== All Javascript =========-->
			<script src="<?php echo site_url(); ?>site_elements/Home_view/jquery-2.1.1.js"></script>
			
			<!--========  =========-->
			
			  
			
			
			<!--========  Dropdown  searchber =========-->
			<script src="<?php echo site_url(); ?>site_elements/Home_view/js/jquery-2.1.4.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/js/main.js"></script> <!-- Resource jQuery -->
			
			
			<!--========  Product =========-->
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/jquery.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/bootstrap.min.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/jquery.scrollUp.min.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/price-range.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/jquery.prettyPhoto.js"></script>
			<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/main.js"></script>
			
			<!--========  Pclick =========-->
			<script type="text/javascript" src="<?php echo site_url(); ?>site_elements/Home_view/pclick_js/jquery-1.4.3.min.js"></script> 
			<script type="text/javascript" src="<?php echo site_url(); ?>site_elements/Home_view/pclick_js/jquery_003.js"></script> 

			<!-- The JavaScript --> 
			<script type="text/javascript">
						/*
						the images preload plugin
						*/
						(function($) {
							$.fn.preload = function(options) {
								var opts 	= $.extend({}, $.fn.preload.defaults, options),
									o		= $.meta ? $.extend({}, opts, this.data()) : opts;
								return this.each(function() {
									var $e	= $(this),
										t	= $e.attr('rel'),
										i	= $e.attr('href'),
										l	= 0;
									$('<img/>').load(function(i){
										++l;
										if(l==2) o.onComplete();
									}).attr('src',i);	
									$('<img/>').load(function(i){
										++l;
										if(l==2) o.onComplete();
									}).attr('src',t);	
								});
							};
							$.fn.preload.defaults = {
								onComplete	: function(){return false;}
							};
						})(jQuery);
					</script> 
			<script type="text/javascript">
						$(function() {
							//some elements..
							var $ps_container		= $('#ps_container'),
								$ps_image_wrapper 	= $ps_container.find('.ps_image_wrapper'),
								$ps_next			= $ps_container.find('.ps_next'),
								$ps_prev			= $ps_container.find('.ps_prev'),
								$ps_nav				= $ps_container.find('.ps_nav'),
								$tooltip			= $ps_container.find('.ps_preview'),
								$ps_preview_wrapper = $tooltip.find('.ps_preview_wrapper'),
								$links				= $ps_nav.children('li').not($tooltip),
								total_images		= $links.length,
								currentHovered		= -1,
								current				= 0,
								$loader				= $('#loader');
							
							/*check if you are using a browser*/	
							var ie 				= false;
							if ($.browser.msie) {
								ie = true;//you are not!Anyway let's give it a try
							}
							if(!ie)
								$tooltip.css({
									opacity	: 0
								}).show();
								
								
							/*first preload images (thumbs and large images)*/
							var loaded	= 0;
							$links.each(function(i){
								var $link 	= $(this);
								$link.find('a').preload({
									onComplete	: function(){
										++loaded;
										if(loaded == total_images){
											//all images preloaded,
											//show ps_container and initialize events
											$loader.hide();
											$ps_container.show();
											//when mouse enters the pages (the dots),
											//show the tooltip,
											//when mouse leaves hide the tooltip,
											//clicking on one will display the respective image	
											$links.bind('mouseenter',showTooltip)
												  .bind('mouseleave',hideTooltip)
												  .bind('click',showImage);
											//navigate through the images
											$ps_next.bind('click',nextImage);
											$ps_prev.bind('click',prevImage);
										}
									}
								});
							});
							
							function showTooltip(){
								var $link			= $(this),
									idx				= $link.index(),
									linkOuterWidth	= $link.outerWidth(),
									//this holds the left value for the next position
									//of the tooltip
									left			= parseFloat(idx * linkOuterWidth) - $tooltip.width()/2 + linkOuterWidth/2,
									//the thumb image source
									$thumb			= $link.find('a').attr('rel'),
									imageLeft;
								
								//if we are not hovering the current one
								if(currentHovered != idx){
									//check if we will animate left->right or right->left
									if(currentHovered != -1){
										if(currentHovered < idx){
											imageLeft	= 75;
										}
										else{
											imageLeft	= -75;
										}
									}
									currentHovered = idx;
									
									//the next thumb image to be shown in the tooltip
									var $newImage = $('<img/>').css('left','0px')
															   .attr('src',$thumb);
									
									//if theres more than 1 image 
									//(if we would move the mouse too fast it would probably happen)
									//then remove the oldest one (:last)
									if($ps_preview_wrapper.children().length > 1)
										$ps_preview_wrapper.children(':last').remove();
									
									//prepend the new image
									$ps_preview_wrapper.prepend($newImage);
									
									var $tooltip_imgs		= $ps_preview_wrapper.children(),
										tooltip_imgs_count	= $tooltip_imgs.length;
										
									//if theres 2 images on the tooltip
									//animate the current one out, and the new one in
									if(tooltip_imgs_count > 1){
										$tooltip_imgs.eq(tooltip_imgs_count-1)
													 .stop()
													 .animate({
														left:-imageLeft+'px'
													  },150,function(){
															//remove the old one
															$(this).remove();
													  });
										$tooltip_imgs.eq(0)
													 .css('left',imageLeft + 'px')
													 .stop()
													 .animate({
														left:'0px'
													  },150);
									}
								}
								//if we are not using a "browser", we just show the tooltip,
								//otherwise we fade it
								//
								if(ie)
									$tooltip.css('left',left + 'px').show();
								else
								$tooltip.stop()
										.animate({
											left		: left + 'px',
											opacity		: 1
										},150);
							}
							
							function hideTooltip(){
								//hide / fade out the tooltip
								if(ie)
									$tooltip.hide();
								else
								$tooltip.stop()
										.animate({
											opacity		: 0
										},150);
							}
							
							function showImage(e){
								var $link				= $(this),
									idx					= $link.index(),
									$image				= $link.find('a').attr('href'),
									$currentImage 		= $ps_image_wrapper.find('img'),
									currentImageWidth	= $currentImage.width();
								
								//if we click the current one return
								if(current == idx) return false;
								
								//add class selected to the current page / dot
								$links.eq(current).removeClass('selected');
								$link.addClass('selected');
								
								//the new image element
								var $newImage = $('<img/>').css('left',currentImageWidth + 'px')
														   .attr('src',$image);
								
								//if the wrapper has more than one image, remove oldest
								if($ps_image_wrapper.children().length > 1)
									$ps_image_wrapper.children(':last').remove();
								
								//prepend the new image
								$ps_image_wrapper.prepend($newImage);
								
								//the new image width. 
								//This will be the new width of the ps_image_wrapper
								var newImageWidth	= $newImage.width();
							
								//check animation direction
								if(current > idx){
									$newImage.css('left',-newImageWidth + 'px');
									currentImageWidth = -newImageWidth;
								}	
								current = idx;
								//animate the new width of the ps_image_wrapper 
								//(same like new image width)
								$ps_image_wrapper.stop().animate({
									width	: newImageWidth + 'px'
								},350);
								//animate the new image in
								$newImage.stop().animate({
									left	: '0px'
								},350);
								//animate the old image out
								$currentImage.stop().animate({
									left	: -currentImageWidth + 'px'
								},350);
							
								e.preventDefault();
							}				
							
							function nextImage(){
								if(current < total_images){
									$links.eq(current+1).trigger('click');
								}
							}
							function prevImage(){
								if(current > 0){
									$links.eq(current-1).trigger('click');
								}
							}
						});
					</script>
					<script type="text/javascript" src="<?php echo site_url(); ?>site_elements/Home_view/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
			<script type="text/javascript" src="<?php echo site_url(); ?>site_elements/Home_view/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
			<script type="text/javascript">

					$(document).ready(function() {
						
						
						$('.projects li figure a img').animate({'opacity' : 1}).hover(function() {
							$(this).animate({'opacity' : .5});
						}, function() {
							$(this).animate({'opacity' : 1});
						});
						$('.zoom img').animate({'opacity' : 1}).hover(function() {
							$(this).animate({'opacity' : .5});
						}, function() {
							$(this).animate({'opacity' : 1});
						});

						$("a[rel=work]").fancybox({
							'transitionIn'		: 'elastic',
							'transitionOut'		: 'elastic',
							'titlePosition' 	: 'over',
							'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
								return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
							}
						});
						$("a[rel=recent_work]").fancybox({
							'transitionIn'		: 'elastic',
							'transitionOut'		: 'elastic',
							'titlePosition' 	: 'over',
							'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
								return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
							}
						});

						
					});
				</script>
				<!--========  Pclick  END =========-->


	</body>
</html>