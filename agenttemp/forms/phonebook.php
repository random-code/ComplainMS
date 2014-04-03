<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Phonebook - CMS</title>

		<meta name="description" content="" />
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
							<i class="icon-sun white"></i>
							CMS
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">


						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/avatar2.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Admin
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								

								<li class="divider"></li>

                              <li>         
						       <a href="login.php">
							   <i class="icon-off red"></i>
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
						<a href="phonebook.php">
							<i class="icon-headphones pink"></i>
							<span class="menu-text"> Phonebook Info </span>
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
							<li class="active">Main Menu</li?

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>

						<li>
							<li class ="active">Dashboard</li>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						
						<a href="#">Phonebook Info</a>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>

				<div class="page-content">
					<div class="row-fluid">
						<div class="span12">
							<!--PAGE CONTENT BEGINS-->

							<div class="space-6"></div>

							<div class="row-fluid">
								<div class="span10 offset1">
									<div class="widget-box transparent invoice-box">
										<div class="widget-header widget-header-large">
											<h3 class="grey lighter pull-left position-relative">
												<i class="icon-book grey"></i>
												Phonebook Information
											</h3>

										
										</div>

										<div class="widget-body">
											<div class="widget-main padding-24">
												<div class="row-fluid">
													<div class="row-fluid">
														<div class="span10">
															<div class="row-fluid">
																<div class="span6 label label-large label-info arrowed-in arrowed-right">
																	<b>Customer Info</b>
																</div>
															</div>

															<div class="row-fluid">
																<ul class="unstyled spaced">
																	<li>
																		<i class="icon-caret-right blue"></i>
																		Block
                                                                      
																		
																		<input style='background-color:#F8F8F8;margin-left:10px;width:200px;' id="rank" type="text" name="Block">
																	</li>

																	<li>
																		<i class="icon-caret-right blue"></i>
																		Flat
																		<input style='background-color:#F8F8F8;margin-left:19px;width:203px;' id="rank" type="text" name="Flat">
																	</li>

																	<li>
																		<i class="icon-caret-right blue"></i>
																		P.No. 
																		
                                                                        
                                                                        <input style='background-color:#F8F8F8;margin-left:10px;width:203px;' id="rank" type="text" name="P.No">
                                                                        
                                                                        
																	</li>

																	<li>
																		<i class="icon-caret-right blue"></i>
																		Rank
																		<b class="red"></b>
																		<input style='background-color:#F8F8F8;margin-left:11px;width:205px;' id="rank" type="text" name="Rank">
																	</li>

																	<li>
																		<i class="icon-caret-right blue"></i>
																		Name
																		<b class="red"></b>
																		<input style='background-color:#F8F8F8;margin-left:7px;width:203px;' id="rank" type="text" name="Name">
																	</li>

																	<li>
																		<i class="icon-caret-right blue"></i>
																		Phone
																		<b class="red"></b>
																		<input style='background-color:#F8F8F8;margin-left:7px;width:200px;' id="rank" type="text" name="Phone">
																		<div style = 'display:table'class="form-actions" >
									                            <button class="btn btn-info" type="button">
										                        <i class="icon-ok bigger-110"></i>
										                        Submit
									                            </button>

									                             &nbsp; &nbsp; &nbsp;
									                              <button class="btn" type="reset">
										                         <i class="icon-undo bigger-110"></i>
										                          Reset
									                               </button>
								                                    </div>
																	
																</ul>
															</div>

															<div class="row-fluid">
								
															<div class="row-fluid">
																<div class="span6 label label-large label-info arrowed-in arrowed-right">
																	<b>Related Results</b>
																</div>
															</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th>id #</th>
											<th>Block</th>
											<th class="hidden-480">Flat</th>

											<th class="hidden-phone">
												
												Name
											</th>
											<th class="hidden-480">Phone</th>
                                             
                                             <th class="hidden-480">Status</th>
											
										</tr>
									</thead>

									<tbody>
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-warning"></span>
											</td>

											<td class="td-actions">
												
												
											</td>

										</tr>


					
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-warning"></span>
											</td>

											<td class="td-actions">
												
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-inverse arrowed-in"></span>
											</td>

											<td class="td-actions">
												
												
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-success"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-inverse arrowed-in"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-info arrowed arrowed-righ"></span>
											</td>

											<td class="td-actions">
												
												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-warning"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-info arrowed arrowed-righ"></span>
											</td>

											<td class="td-actions">
												
												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-inverse arrowed-in"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-warning"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-info arrowed arrowed-righ"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-success"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-inverse arrowed-in"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-warning"></span>
											</td>

											<td class="td-actions">
												

												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>

										<tr>
											<td class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</td>

											<td>
												<a href="#"></a>
											</td>
											<td></td>
											<td class="hidden-480"></td>
											<td class="hidden-phone"></td>

											<td class="hidden-480">
												<span class="label label-info arrowed arrowed-righ"></span>
											</td>

											<td class="td-actions">
												
												<div class="hidden-desktop visible-phone">
													
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div id="modal-table" class="modal hide fade" tabindex="-1">
								<div class="modal-header no-padding">
									<div class="table-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										Results for "Latest Registered Domains"
									</div>
								</div>

								<div class="modal-body no-padding">
									<div class="row-fluid">
										<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
											<thead>
												<tr>
													<th>Domain</th>
													<th>Price</th>
													<th>Clicks</th>

													<th>
														<i class="icon-time bigger-110"></i>
														Update
													</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>
														<a href="#">ace.com</a>
													</td>
													<td>$45</td>
													<td>3,330</td>
													<td>Feb 12</td>
												</tr>

												<tr>
													<td>
														<a href="#">base.com</a>
													</td>
													<td>$35</td>
													<td>2,595</td>
													<td>Feb 18</td>
												</tr>

												<tr>
													<td>
														<a href="#">max.com</a>
													</td>
													<td>$60</td>
													<td>4,400</td>
													<td>Mar 11</td>
												</tr>

												<tr>
													<td>
														<a href="#">best.com</a>
													</td>
													<td>$75</td>
													<td>6,500</td>
													<td>Apr 03</td>
												</tr>

												<tr>
													<td>
														<a href="#">pro.com</a>
													</td>
													<td>$55</td>
													<td>4,250</td>
													<td>Jan 21</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<div class="modal-footer">
									<button class="btn btn-small btn-danger pull-left" data-dismiss="modal">
										<i class="icon-remove"></i>
										Close
									</button>

									<div class="pagination pull-right no-margin">
										<ul>
											<li class="prev disabled">
												<a href="#">
													<i class="icon-double-angle-left"></i>
												</a>
											</li>

											<li class="active">
												<a href="#">1</a>
											</li>

											<li>
												<a href="#">2</a>
											</li>

											<li>
												<a href="#">3</a>
											</li>

											<li class="next">
												<a href="#">
													<i class="icon-double-angle-right"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!--PAGE CONTENT ENDS-->
						</div><!--/.span-->
					</div><!--/.row-fluid-->
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
