<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Occasions! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				


				   

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
						  <div class="title_left">
							<h3><?php echo $title; ?></h3>
						  </div>

						  <div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							  <div class="input-group">
								
							  </div>
							</div>
						  </div>
						</div>
						<div class="clearfix"></div>

						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Single View</h2>
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
									  
										<?php foreach ($info as $key) {  ?>
										<form class="form-horizontal form-label-left" novalidate name="product_form" id="multiselectForm" role="form" autocomplete="off"   method="post" action="<?php echo $action;?>">

										
											<input style="display:none" type="hidden" name="id" value="<?php  echo $key['occasion_id']; ?>"/>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo $occasion_name; ?>: <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  value="<?php  echo $key['occasion_name']; ?>" name="ocName" type="text">
												</div>
											</div>
											
											
											<?php if($des=='1'){ ?>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Description: <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<textarea id="textarea" required="required" name="des" class="form-control col-md-7 col-xs-12"><?php echo $key['description']; ?></textarea>
												</div>
											</div>
											<?php } ?>
											
			
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12"  >Status: <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
												
														<div class="col-sm-3"> 
															<label class="checkbox-inline">
																<input type="radio" name="status" value="enable"> Enable
															</label>
														</div>
													
														<div class="col-sm-3"> 
															<label class="checkbox-inline">
																<input type="radio" name="status"  value="disable" checked> Disable
															</label>
														</div>
													
												</div>
											</div>
										
										 
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" >Date added: <span ></span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<?php echo $key['doc'].' (GMT)'; ?>									
												</div>
											</div>
											
											<?php if($lmod=='1'){ ?>
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" >Last Modified: <span ></span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<?php echo $key['dom'].' (GMT)'; ?>			
												</div>
											</div>
											<?php } ?>
										 
										 
										 
									   
										 
										 
											<div class="ln_solid"></div>
											<div class="form-group">
												<div class="col-md-6 col-md-offset-3">
													<button type="submit" class="btn btn-primary">Update</button>
													<button id="send" type="submit" class="btn btn-success">Reset</button>
												</div>
											</div>
										</form>
										<?php } ?>
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

		<!-- jQuery -->
		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="../vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="../vendors/nprogress/nprogress.js"></script>
		<!-- validator -->
		<script src="../vendors/validator/validator.js"></script>

		<!-- Custom Theme Scripts -->
		<script src="../build/js/custom.min.js"></script>

		<!-- validator -->
		<script>
		  // initialize the validator function
		  validator.message.date = 'not a real date';

		  // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
		  $('form')
			.on('blur', 'input[required], input.optional, select.required', validator.checkField)
			.on('change', 'select.required', validator.checkField)
			.on('keypress', 'input[required][pattern]', validator.keypress);

		  $('.multi.required').on('keyup blur', 'input', function() {
			validator.checkField.apply($(this).siblings().last()[0]);
		  });

		  $('form').submit(function(e) {
			e.preventDefault();
			var submit = true;

			// evaluate the form using generic validaing
			if (!validator.checkAll($(this))) {
			  submit = false;
			}

			if (submit)
			  this.submit();

			return false;
		  });
		</script>
		<!-- /validator -->
  </body>
</html>