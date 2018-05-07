<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $name; ?> -Flower Shop</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>site_elements/filter.css"/>
	<link rel="stylesheet" href="<?php echo site_url(); ?>site_elements/Home_view/product/css/bootstrap.min.css"/>
	<script src="<?php echo site_url(); ?>site_elements/Home_view/product/jquery/jquery-1.11.3.min.js"></script>
	<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/bootstrap.min.js"></script>
	<script src="<?php echo site_url(); ?>site_elements/Home_view/product/js/script-items.js"> </script>


</head>
<body>
	<div id="f_main">

	
		
	
	
		<div id="canvas">
			<div style="padding-left:0" class="col-md-12" >
			<ul> 
				<?php
							if($row >'0')
							{
								foreach ($results as $key) { ?>
									<li class="f_block">

											<div class="block_img"><div class="imghover"><a href="<?php echo site_url(); ?>item/template/<?php echo $key['product_id'] ?>" class="btn btn-default ">View detail</a></div><img src="<?php echo site_url(); ?>site_elements/Product_Image/<?php echo $key['image']; ?>" width="280px" height="192px"/></div>
											<div class="block_info"> 
												<div class="theme_title"><h3> <?php echo $key['product_name']; ?> </h3></div>
												<div class="theme_info">
													<h4 class="price"><?php echo $key['product_unit_price']; ?></h4>

				




												</div>

											</div>
										</li>   

								<?php } }
								else
								{
									echo '<p style="padding:20px">There is no product in this category.</p>';
								} ?>
				
			</ul>
			 
			</div>
		</div>
    	
   	</div>





</body>

</html>


