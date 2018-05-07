
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Flower Shop</title>
		
		
		<!--======== All Stylesheet =========-->
		
		<!--========  Single product view =========-->
			<link rel="stylesheet" href="<?php echo site_url(); ?>site_elements/Home_view/single_product/css/flexslider.css" type="text/css" media="screen" />
			<link href="<?php echo site_url(); ?>site_elements/Home_view/single_product/css/style.css" rel="stylesheet" type="text/css" media="all" />	
			
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
			<div class="small-menu small-menu-2">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 col-xs-12 p-l-r-0">
						
						</div>
						<div class="col-md-3 col-xs-12 p-l-r-0">

						</div>
						<div class="col-md-3 col-xs-12 p-l-r-0">

						</div>
						
						<div class="col-md-3 col-xs-12">	
							<div id="LS">						
								<a href="<?php echo site_url('log_in'); ?>" id="btn_login" class="btn btn-success loginbtn">Sign in</a>						
								<a href="<?php echo site_url('Sign_in'); ?>" id="btn_login" class="btn btn-success loginbtn">Create account</a>						
							</div>
						</div>
						
					</div>
				</div>
			</div>
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
					</ul> <!-- .cd-main-nav -->
				</nav> <!-- .cd-main-nav-wrapper -->

				<a href="#0" class="cd-nav-trigger cd-text-replace">Menu<span></span></a>
			</header>
	
		<!--======== Container=========-->
		<div id="container-fluid">
			<main class="cd-main-content">
				<!-- your content here -->

				
		
			</main>
			<div class="col-md-12 col-xs-12 p-l-r-0">
				<div class="product">
					<section>
						<div class="container">
							<div class="row">
							
								
								<div class="col-sm-9 padding-right">
								
										<h2 >Occasions</h2>

									
										
										
									<div class="content-top">
										<h1> <?php 	//echo $occasion_name; ?>	</h1>
										<?php
											if(isset($no_product))
											  {
												echo'<span class="content-top1">Products of this category are out of stoke.</span>';
											  }											   
											else if(isset($occasions_product))
											  {										
										?>	  
										<div class="content-top1">
											<?php foreach($occasions_product as $occasions_products){?>
												<div class="col-md-3 col-md2">
													<div class="col-md1 simpleCart_shelfItem">														   
													    <a href="<?php echo base_url(); ?>home/product/<?php echo $occasions_products['product_id'];?>"><img src="<?php echo base_url();?>site_elements/Product_Image/<?php echo $occasions_products['image']; ?>"class="img-responsive" width="185px" height="207px"></a>
														<h3><?php echo $occasions_products['product_name']; ?></h3>														
														<div class="price">
															<h5 class="item_price">TK. &nbsp;<?php echo $occasions_products['product_unit_price'];?></h5>
															<a href="<?php echo base_url(); ?>/index.php/home/product/<?php echo $occasions_products['product_id'];?>" class="item_add">View Details</a>
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
			 
			 <!--========  Single product view  =========-->
			 
			<script src="<?php echo site_url(); ?>site_elements/Home_view/single_product/js/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo site_url(); ?>site_elements/Home_view/single_product/js/modernizr.custom.min.js"></script>

			<script src="<?php echo site_url(); ?>site_elements/Home_view/single_product/js/imagezoom.js"></script>
			<!-- FlexSlider -->
			<script defer src="<?php echo site_url(); ?>site_elements/Home_view/single_product/js/jquery.flexslider.js"></script>
				<script>
				// Can also be used with $(document).ready()
				$(window).load(function() {
				  $('.flexslider').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				  });
				});
				</script>
			 
			 <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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