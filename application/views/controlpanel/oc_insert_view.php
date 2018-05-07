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
							<label class="control-label col-md-3 col-sm-3 col-xs-12" ><?php echo $occasion_name;?>: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   placeholder="<?php echo $occasion_name; ?>"  type="text" name="Name">
							</div>
						</div>
						
					<!--
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" >Description: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								   <div id="alerts"></div>
									  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
										<div class="btn-group">
										  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
										  <ul class="dropdown-menu">
										  </ul>
										</div>

										<div class="btn-group">
										  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
										  <ul class="dropdown-menu">
											<li>
											  <a data-edit="fontSize 5">
												<p style="font-size:17px">Huge</p>
											  </a>
											</li>
											<li>
											  <a data-edit="fontSize 3">
												<p style="font-size:14px">Normal</p>
											  </a>
											</li>
											<li>
											  <a data-edit="fontSize 1">
												<p style="font-size:11px">Small</p>
											  </a>
											</li>
										  </ul>
										</div>

										<div class="btn-group">
										  <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
										  <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
										  <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
										  <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
										</div>

										<div class="btn-group">
										  <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
										  <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
										  <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
										  <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
										</div>

										<div class="btn-group">
										  <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
										  <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
										  <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
										  <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
										</div>

										<div class="btn-group">
										  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
										  <div class="dropdown-menu input-append">
											<input class="span2" placeholder="URL" type="text" data-edit="createLink" />
											<button class="btn" type="button">Add</button>
										  </div>
										  <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
										</div>

										<div class="btn-group">
										  <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
										  <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
										</div>

										<div class="btn-group">
										  <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
										  <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
										</div>
									  </div>

									  <div id="editor" class="editor-wrapper"></div>

									  <textarea name="des" id="descr" style="display:none;"></textarea>
									  
									  <br />

									  <div class="ln_solid"></div>
							</div>
						</div>  --->
						
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Description: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<textarea id="textarea" required="required" name="des" class="form-control col-md-7 col-xs-12"></textarea>
							</div>
						</div>
						
						
				<!--	<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="product-title">Image: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" name="image" class="form-control col-md-7 col-xs-12"  >
								<span class="text-muted">Only PNG/JPG file format is allowed.<br/>The image resolution should be exact 3000X2500 PX.</span>
							</div>
						</div>-->
						
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12"  >Status: <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="col-sm-3"> 
									<label class="checkbox-inline">
										<input type="radio" name="status" id="status"value="disable"> Disable
									</label>
								</div>
								 <div class="col-sm-3"> 
									<label class="checkbox-inline">
										<input type="radio" name="status" id="status" value="enable" checked> Enable
									</label>
								</div>						
							</div>
						</div>
						
                     
                     
                     
                     
                     
                   
                     
                     
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
		 <!-- bootstrap-progressbar -->
		<script src="site_elements/control panel/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- iCheck -->
		<script src="site_elements/control panel/iCheck/icheck.min.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="site_elements/control panel/js/moment/moment.min.js"></script>
		<script src="site_elements/control panel/js/datepicker/daterangepicker.js"></script>
		<!-- bootstrap-wysiwyg -->
		<script src="site_elements/control panel/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
		<script src="site_elements/control panel/jquery.hotkeys/jquery.hotkeys.js"></script>
		<script src="site_elements/control panel/google-code-prettify/src/prettify.js"></script>
		
		

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