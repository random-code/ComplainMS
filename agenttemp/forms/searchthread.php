<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Complain_Search - CMS</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.css" />

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />





		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-sun"></i>
							CMS
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/avatar2.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									[TF_AGENT]&nbsp;[TF_EXT]
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								
								
								<li class="divider"></li>

								<li>         
						       <a href="login.php">
							   <i class="icon-off"></i>
							   <span class="menu-text"> Logout </span>
						        </a>
					             </li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				
                    <ul class="nav nav-list">
					<li>
						<a href="index.php">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					<li>
						<a href="home.php">
							<i class="icon-compass"></i>
							<span class="menu-text"> Be Ready For Call </span>

				
						</a>

						
					</li>
					 <li class='active'>
						<a href="complain_search.php">
							<i class="icon-list"></i>
							<span class="menu-text"> Complain Search </span>
						</a>
					</li>
				
                    <li >
						<a href="newcomplain.php">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Register New Complain </span>
						</a>
					</li>
					
					
				</ul><!--/.nav-list--><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-pencil pencil-icon"></i>
							<li class="active">Main Menu</li>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Dashboard</li>
						<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
							<li class="active">Complain</li>
							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
		                       <a href="#">Complain Thread</a>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Complain Thread Search
							<small>
								<i class="icon-double-angle-right"></i>
								Search
							</small>
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<div class="row-fluid">
									<div class="span10">
															<div class="row-fluid">
																<div class="span6 label label-large label-info arrowed-in arrowed-right">
																	<b>Search Complain Thread</b>
																</div>
															</div>

													<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" class="tableheaders2">
          
            <td colspan="4" align="center"><div align="center"><strong>[TF_ERR]</strong></div></td>
          </tr>
          
            <tr>
              <td width="141" >Date and Time </td>
            <td width="161">[TF_Date]</td>
            <td width="137">Complain Number</td>
            <td width="155">[TF_ComplainNo]</td>
            </tr>
          
            <tr>
              <td>Accomodation</td>
            <td colspan="3" >
              <label>[TF_Acc]</label>
                      </td>
            </tr>
          
            <tr>
              <td>Phone</td>
            <td>[TF_Phn]</td>
            <td>Name</td>
            <td>[TF_Name]</td>
            </tr>
          
            <tr>
              <td>Division
                </td>
              <td >[TF_ComplainNature]</td>
              <td colspan="2" ></td>
            </tr>
          
            <tr>
              <td>Previous Complain</td>
            <td >[TF_ComplainPrev]</td>
            <td>Current Status</td>
            <td><label>[TF_CStatus]</label></td>
            </tr>
          
            <tr>
              <td>Text </td>
            <td>
              <label>[TF_text]</label>
         </td>
            <td colspan="2"></td>
          </tr>
          
            <tr>
              <td >Update Complain:</td>
            <td ></td>
            <td colspan="2"></td>
          </tr>
          
            <tr>
              <td>Text</td>
            <td>
              <textarea name="text" id="text"></textarea>
           </td>
            <td colspan="2">
              <label></label>
           </td>
          </tr>
          
            <tr>
              <td>New Status</td>
            <td><select name="status" id="status">
              <option value="1">Solved</option>
              <option value="0">Pending</option>
            </select></td>
            <td colspan="2">
              <label></label>
            </td>
          </tr>

        </table>

	<div style = 'display:table'class="form-actions" >
						<a href="index.php">
							 <button class="btn btn-info" type="button">
								 <i class="icon-ok bigger-110"></i>
									Submit
									    </button>
									      </a>

									  &nbsp; &nbsp; &nbsp;
									     <button class="btn" type="reset">
										<i class="icon-undo bigger-110"></i>
										   Reset
									      </button>
								         </div>
														

										</div><!--/span-->
							               </div><!--/row-->
							

							                   <b>[TF_DOC_TABLE] </b>

                                                            
												<div style ='margin-width:4px'></div>
															
												<div class="row-fluid">
												<div class="span5 label label-large label-info arrowed-in arrowed-right">
												<b>Attached Documents</b>
												</div>

												</div>
												<b>[TF_TABLE]</b>

							                     <div class="hr hr-18 dotted hr-double"></div>

							                       <div class="row-fluid">
								
															
                                                    
								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											
											<th>Thread ID</th>
											<th>Date</th>
											<th class="hidden-480">Admin</th>

											<th class="hidden-phone">
												
												Text
											</th>
											<th class="hidden-480">Address</th>
                                             
                                             <th class="hidden-480">Status</th>
											
										</tr>
									</thead>

									<tbody>
										
					
									</tbody>
								</table>

                              

							</div>

						</div><!--/.span-->
					</div><!--/.row-fluid-->
				</div><!--/.page-content-->

				<div class="ace-settings-container" id="ace-settings-container">
					
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->

		<!--[if !IE]>-->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!--<![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/date-time/moment.min.js"></script>
		<script src="assets/js/date-time/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize-min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">

                  $(function() {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})



			$(function() {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:15px;top:-8px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small'
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.php
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
				//dynamically change allowed formats by changing before_change callback function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var before_change
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "icon-picture";
						before_change = function(files, dropped) {
							var allowed_files = [];
							for(var i = 0 ; i < files.length; i++) {
								var file = files[i];
								if(typeof file === "string") {
									//IE8 and browsers that don't support File Object
									if(! (/\.(jpe?g|png|gif|bmp)$/i).test(file) ) return false;
								}
								else {
									var type = $.trim(file.type);
									if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
											|| ( type.length == 0 && ! (/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
										) continue;//not an image so don't keep this file
								}
								
								allowed_files.push(file);
							}
							if(allowed_files.length == 0) return false;
			
							return allowed_files;
						}
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "icon-cloud-upload";
						before_change = function(files, dropped) {
							return files;
						}
					}
					var file_input = $('#id-input-file-3');
					file_input.ace_file_input('update_settings', {'before_change':before_change, 'btn_choose': btn_choose, 'no_icon':no_icon})
					file_input.ace_file_input('reset_input');
				});
			
			
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('#id-date-range-picker-1').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				})
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
					tag_input.tag({placeholder:tag_input.attr('placeholder')});
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
			
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('show', function () {
					$(this).find('.chzn-container').each(function(){
						$(this).find('a:first-child').css('width' , '200px');
						$(this).find('.chzn-drop').css('width' , '210px');
						$(this).find('.chzn-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element has a width now and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
	</body>
</html>
