<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>New - CMS</title>

		<meta name="description" content="Static &amp; Dynamic Tables" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles related to this page-->
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
							   <span class="menu-text"> Signout </span>
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
					 <li>
						<a href="complain_search.php">
							<i class="icon-list"></i>
							<span class="menu-text"> Complain Search </span>
						</a>
					</li>
				
                    <li class='active'>
						<a href="newcomplain.php">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Register New Complain </span>
						</a>
					</li>
					
					

                     

					
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-pencil pencil-icon"></i>
							<li class ="active">Main Menu</li>
							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i></span>
								<li class="active">Dashboard</li>
								<span class="divider">
                                <i class="icon-angle-right arrow-icon"></i></span>
                                <li class="active">Complain</li>
								<span class="divider">
                                <i class="icon-angle-right arrow-icon"></i></span>
							<a href="#">Register New</a>

							
					</ul><!--.breadcrumb-->

					
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Complain
							<small>
								<i class="icon-double-angle-right"></i>
								Register New Complain
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
																	<b>New Complain</b>
																</div>
															</div>

															<div class="row-fluid">
																<ul class="unstyled spaced">
																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Date And Time
                                                                      
																		
																		<input style='margin-left:29px;width:206px;' id="rank" type="text" name="Block">
																	</li>

																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Phone
																		<b class="red"></b>
																		<input style='margin-left:77px;width:208px;' id="rank" type="text" name="Rank">
																	    <a href=""  style='margin:left:30px' class="" >
                                                                        <i class="icon-camera"></i>
                                                                        <span class="menu-text"> LOOKUP </span>
                                                                         </a>
																	</li>

																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Name
																		<b class="red"></b>
																		<input style='margin-left:82px;width:207px;' id="rank" type="text" name="Name">
																	</li>

																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Accomodation 
																		
                                                                        
                                                                        <input style='margin-left:32px;width:207px;' id="rank" type="text" name="P.No">
                                                                        
                                                                        
																	</li>

																	
																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Complain Nature
																		<b class="red"></b>
																		<!-- <input style='background-color:#F8F8F8;margin-left:7px;width:200px;' id="rank" type="text" name="Phone" -->
																		<td class="hidden-480">
													                    <select name="sample-table-2_length" style='margin-left:18px;width:222px;'size="1" aria-controls="sample-table-2">
														                <option value="E&amp;M" selected="selected">E&amp;M</option>
                                                                        <option value="B&amp;R1">B&amp;R1</option>
                                                                        <option value="B&amp;R2">B&amp;R2</option>
                                                                        <option value="F&amp;S">F&amp;S</option>
                                                                        </select>
												                    </td>
                                                                     </li>

																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Previous Complain
																		<b class="red"></b>
																		<input style='margin-left:10px;width:207px;' id="rank" type="text" name="Name">
																	</li>
                                                                     <li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Complain Details
																		<b class="red"></b>
																		<textarea  rows="4" cols="50" style=' padding-right: 10px; margin-left:20px' >
																		</textarea><!-- </div> -->
																	</li>
																	<li style='line-height:50px'>
																		<i class="icon-caret-right blue"></i>
																		Status
																		<b class="red"></b>
																		<!-- <input style='background-color:#F8F8F8;margin-left:7px;width:200px;' id="rank" type="text" name="Phone" -->
																		<td class="hidden-480">
													                    <select name="sample-table-2_length" style='margin-left:86px;width:224px;'size="1" aria-controls="sample-table-2">
														                <option value="Both" selected="selected">Both</option>
                                                                        <option value="Solve">Solved</option>
                                                                        <option value="Pending">Pending</option></select>
												                    </td>
                                                                     </li>
																	
																</ul>
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
															</div>

														</div><!--/span-->
							</div><!--/row-->

							<div class="hr hr-18 dotted hr-double"></div>


				</div><!--/.page-content-->

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

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

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
		</script>
	</body>
</html>
