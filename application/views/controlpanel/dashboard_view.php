<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?>! | </title>
		
				<link rel="icon" type="image/png" href="<?php echo site_url(); ?>site_elements/control panel/png/ico.png"/>


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
				<div class="" style="height:500px;">
					

					<div class="clearfix"></div>

					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2><?php  
									if($this->session->flashdata('msg'))
										{
											echo'<div class="grow"style=color:#A5A5A5;"><p>'.$this->session->flashdata('msg').'</div></p>';
										}
									if($this->session->flashdata('error'))
										{
											echo'<div class="grow"style="color:#A5A5A5;"><p>'.$this->session->flashdata('error').'</div></p>';
										}
									?></h2>
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

									Add content to the page ...
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
				Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
			  </div>
			  <div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		  </div>
		</div>
		   
    
   
	</body>
</html>
