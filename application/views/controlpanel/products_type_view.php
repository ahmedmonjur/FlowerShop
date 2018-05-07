<!DOCTYPE html>
<html lang="en-US">
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Products</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<!-- Bootstrap -->
		<link href="<?php echo site_url(); ?>site_elements/control panel/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo site_url(); ?>site_elements/control panel/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?php echo site_url(); ?>site_elements/control panel/nprogress/nprogress.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?php echo site_url(); ?>site_elements/control panel/build/css/custom.min.css" rel="stylesheet">

	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<!-- page content -->
					<div class="right_col" role="main">
					  <div class="" style="height:700px;">
				   

						<div class="clearfix"></div>

						<div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
							  <div class="x_title">
								<h2><?php echo $title; ?></h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<ul class="dropdown-menu" role="menu">
									  <li><a href="#">Settings 1</a>
									  </li>
									  <li><a href="#">Settings 2</a>
									  </li>
									</ul>
								  </li>
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							   <div class="x_content">
									
									<table id="datatable" class="table table-striped table-bordered">
									  <thead>
										<tr>
										 <th class="numbr center">No</th>
										<th class="center">Product Type</th>
										<th class="center">Status</th>
										<th class="center">Date Added</th>
										<th class="center">Action</th>
										</tr>
									  </thead>


									  <tbody>
												<?php foreach ($Product_type as $key): $segment++; ?>
											<tr>
												<th scope="row" style="font-weight: normal;" class="center"><?php echo $segment; ?></th>
												<td class="center"><?php   echo $key['product_type'];   ?></td>
												<td class="center"><?php   echo $key['status'];   ?></td>
												<td class="center"><?php   echo $key['doc'];   ?></td>
												

												<td class="center">[ <a href="<?php echo site_url('controlpanel/Product_type/view/'.$key['product_type_id']); ?>">View</a> ]  [ <a onClick='return confirm("Are you sure want to delete this category ?");' href="<?php echo site_url('controlpanel/Product_type/delete/'.$key['product_type_id']); ?>">Delete</a> ]</td>
										  
											</tr>




											
										
										<?php endforeach; ?>
															
									
									 
										  
							  
									  </tbody>
									</table>
										<input id="base_url" type="hidden" value="<?php echo base_url();?>"/>
										<input id="site_url" type="hidden" value="<?php echo site_url();?>"/>
										<div id="page_num"><?php echo $this->pagination->create_links(); ?> </div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				<!-- /page content -->
				
				<!-- footer content -->
				<footer>
				  <div class="pull-right">
					Online flower shop by <a href="#">Murshida</a>
				  </div>
				  <div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>	
		</div>
	</body>
</html>