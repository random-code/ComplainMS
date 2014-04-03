<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Complain - CMS</title>

		<meta name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="assets/css/prettify.css" />

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
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">


					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li>
						<a href="index.php">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>

					<li class="active">
						<a href="complain.php">
							<i class="icon-headphones"></i>
							<span class="menu-text"> complain </span>
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
					<li>
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
							<i class="icon-pencil"></i>
							<li class="active">Main Menu</li>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">Dashboard</li>
							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
							<a href="#">Complain</a>
					</ul><!--.breadcrumb-->

					
				</div>

				<div class="page-content">
					<div class="page-header position-relative">
						<h1><li class ="icon-phone"></li>
							Complain
							
						</h1>
					</div><!--/.page-header-->

					
				</div><!--/.page-content-->


			</div><!--/.main-content-->
		</div><!--/.main-container-->

		

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

		<script src="assets/js/prettify.js"></script>

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			$(function() {
			
				window.prettyPrint && prettyPrint();
				$('#id-check-horizontal').removeAttr('checked').on('click', function(){
					$('#dt-list-1').toggleClass('dl-horizontal').prev().php(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
				});
			
			})
		</script>
	</body>
</html>
