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
          <div class="" >
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
                    <h2>Insert New </h2>
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

                    <form class="form-horizontal form-label-left" novalidate name="product_form" id="multiselectForm" role="form" autocomplete="off"   action="<?php echo site_url('controlpanel/products/f_addpr'); ?>" enctype="multipart/form-data" method="post" >

                      

						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Product Title: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input id="prTitle" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Title" required="required" type="text" name="prTitle">
							</div>
						</div>
						
						<div class="item form-group">                       
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Category: <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control" name="caId">
										<option> Select Category</option>
										<?php
											if(isset($Categories)){
												foreach ($Categories as $key) {
													echo '<option value="'.$key['category_id'].'">'.$key['category_name'].'</option>';
												}
											}
										?>
								  </select>
							</div>
						</div>						
						<div class="item form-group">                       
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Occasion: <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								  <select class="form-control" name="ocId">
										<option> Select Occasion</option>
										<?php
											if(isset($Occasions)){
												foreach ($Occasions as $key) {
													echo '<option value="'.$key['occasion_id'].'">'.$key['occasion_name'].'</option>';
												}
											}
										?>
								  </select>
							</div>
						</div>
						
						<div class="item form-group">                       
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Product Type: <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control col-md-7 col-xs-12" name="prtype">
									<option> Select Product Type</option>
									<?php
										if(isset($product_type)){
											foreach ($product_type as $key) {
												echo '<option value="'.$key['product_type_id'].'">'.$key['product_type'].'</option>';
											}
										}
									?>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Product Code: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="prCode" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Product Code" required="required" type="text">
							</div>
						</div>
						
				<!--		<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Picture Thumbnail: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="product_picture" class="form-control col-md-7 col-xs-12"  >
								<span class="text-muted">Upload a thumbnail of product picture. Only PNG file format is allowed.<br/>The image resolution should be exact 850X660 PX.</span>
							</div>
						</div> -->
						
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Product Unit price: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input name="prprice" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Product Unit price" required="required" type="text">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-discount">Discount: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Discount"  name="discount" type="text">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="textarea" required="required" name="des" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Quantity: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Quantity"  name="quantity"  type="text">
							</div>
						</div>
			<!---		<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Status: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  placeholder="Status"  name="status"  type="text">
							</div>
						</div> -->
									 
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Picture Thumbnail: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="image" class="form-control col-md-7 col-xs-12"  >
								<span class="text-muted">Upload a thumbnail of product picture. Only PNG/JPG file format is allowed.<br/>The image resolution should be exact 3000X2500 PX.</span>
							</div>
						</div>
                     
                     
                     
                   
                     
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" name="prosubmit" class="btn btn-primary">Submit</button>
                          <button id="send" type="cancel" class="btn btn-success">Cancel</button>
                        </div>
                      </div>
                    </form>
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
    <script src="site_elements/control panel/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="site_elements/control panel/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="site_elements/control panel/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="site_elements/control panel/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="site_elements/control panel/validator/validator.js"></script>
	
	
	<!--TEXT Area-->
	    <!-- bootstrap-daterangepicker -->
			<script src="site_elements/control panel/js/datepicker/daterangepicker.js"></script>
			
			   <!-- bootstrap-daterangepicker -->
				<script>
				  $(document).ready(function() {
					$('#birthday').daterangepicker({
					  singleDatePicker: true,
					  calender_style: "picker_4"
					}, function(start, end, label) {
					  console.log(start.toISOString(), end.toISOString(), label);
					});
				  });
				</script>
				<!-- /bootstrap-daterangepicker -->
				
				
				
				
		<!-- bootstrap-wysiwyg -->
			<script src="site_elements/control panel/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
			<script src="site_elements/control panel/jquery.hotkeys/jquery.hotkeys.js"></script>
			<script src="site_elements/control panel/google-code-prettify/src/prettify.js"></script>
			

				<!-- bootstrap-wysiwyg -->
				<script>
				  $(document).ready(function() {
					function initToolbarBootstrapBindings() {
					  var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
						  'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
						  'Times New Roman', 'Verdana'
						],
						fontTarget = $('[title=Font]').siblings('.dropdown-menu');
					  $.each(fonts, function(idx, fontName) {
						fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
					  });
					  $('a[title]').tooltip({
						container: 'body'
					  });
					  $('.dropdown-menu input').click(function() {
						  return false;
						})
						.change(function() {
						  $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
						})
						.keydown('esc', function() {
						  this.value = '';
						  $(this).change();
						});

					  $('[data-role=magic-overlay]').each(function() {
						var overlay = $(this),
						  target = $(overlay.data('target'));
						overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
					  });

					  if ("onwebkitspeechchange" in document.createElement("input")) {
						var editorOffset = $('#editor').offset();

						$('.voiceBtn').css('position', 'absolute').offset({
						  top: editorOffset.top,
						  left: editorOffset.left + $('#editor').innerWidth() - 35
						});
					  } else {
						$('.voiceBtn').hide();
					  }
					}

					function showErrorAlert(reason, detail) {
					  var msg = '';
					  if (reason === 'unsupported-file-type') {
						msg = "Unsupported format " + detail;
					  } else {
						console.log("error uploading file", reason, detail);
					  }
					  $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
						'<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
					}

					initToolbarBootstrapBindings();

					$('#editor').wysiwyg({
					  fileUploadError: showErrorAlert
					});

					window.prettyPrint;
					prettyPrint();
				  });
				</script>
				<!-- /bootstrap-wysiwyg -->
	<!--TEXT-->

    <!-- Custom Theme Scripts -->
    <script src="site_elements/control panel/build/js/custom.min.js"></script>

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