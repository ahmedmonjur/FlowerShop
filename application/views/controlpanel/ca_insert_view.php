<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Categories! | </title>

    <!-- Bootstrap -->
    <link href="site_elements/control panel/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="site_elements/control panel/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="site_elements/control panel/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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

                    <form class="form-horizontal form-label-left" novalidate name="product_form" id="multiselectForm" role="form" autocomplete="off"    method="post" action="<?php echo $action;?>" >

                      

						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo $category_code;?>: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   placeholder="<?php echo $category_code; ?>"  type="text" name="caCode">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo $category_name;?>: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   placeholder="<?php echo $category_name; ?>"  type="text" name="Name">
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo $catalog;?>: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select name="catalog"class="form-control">
									<option value="Women"selected="selected">Women</option>
									<option value="Men">Men</option>
									<option value="Kids" >Kids</option>
									<option value="Others">Others</option>
								</select>
							</div>
						</div>
					
				<!--	<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="inputfile"><?php //echo $category_img;?>: <span ></span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" id="inputfile" name="category_img">
							</div>
						</div> ---->
						
						

				
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"  >Status: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="col-sm-3"> 
									<label class="checkbox-inline">
										<input type="radio" name="status" id="optionsRadios4"value="disable"> Disable
									</label>
								</div>
								 <div class="col-sm-3"> 
									<label class="checkbox-inline">
										<input type="radio" name="status" id="optionsRadios3" value="enable" checked> Enable
									</label>
								</div>						
							</div>
						</div>
						
						
				<!--	<div class="item form-group">                       
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Product Type: <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<select class="form-control col-md-7 col-xs-12" name="prtype">
									<option value="<?php //echo $pr_id; ?>"> <?php //echo $pr_name; ?></option>
									<?php
										//if(isset($producttypes)){
										//	foreach ($producttypes as $pr) {
											//	echo '<option value="'.$pr['product_type_id'].'">'.$pr['product_type'].'</option>';
											//}
										//}
									?>
								</select>
							</div>
						</div>--->
						
                     
                     
                     
                     
                     
                   
                     
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button id="send" type="submit" class="btn btn-success">Cancel</button>
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