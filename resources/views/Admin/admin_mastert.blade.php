<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
	<link id="base-style" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	<link id="base-style-responsive" href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->

	<!-- start: Header -->
	
		<div class="container-fluid-full" >
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2" >
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="{{ url('/dashbord') }}"><i class="icon-bar-chart"></i><span class="hidden-tablet"style="color:white"> Dashboard</span></a></li>	
						{{-- <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
						<li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li> --}}
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">Category</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/categories/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add category</span></a></li>
								
								<li><a class="submenu" href="{{  url('/categories')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All category</span></a></li>
								
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">sub Category</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/subcat-categories/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add sub category</span></a></li>
								
								<li><a class="submenu" href="{{  url('/subcat-categories')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All sub category</span></a></li>
								
							</ul>	
						</li>

                          <li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">Add brand</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/brands/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add brand</span></a></li>
								
								<li><a class="submenu" href="{{  url('/brands')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All brand</span></a></li>
								
							</ul>	
						</li>

						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">Unit</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/units/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add unit</span></a></li>
								
								<li><a class="submenu" href="{{  url('/units')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All unit</span></a></li>
								
							</ul>	
						</li>
						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">size</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/sizes/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add size</span></a></li>
								
								<li><a class="submenu" href="{{  url('/sizes')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All size</span></a></li>
								
							</ul>	
						</li>
						
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"style="color:white">product</span><span class="label label-important"style="color:white"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="{{ url('/products/create') }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> Add product</span></a></li>
								
								<li><a class="submenu" href="{{  url('/products')  }}"><i class="icon-file-alt"></i><span class="hidden-tablet"style="color:white"> All product</span></a></li>
								
							</ul>	
						</li>
						
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"style="color:white"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"style="color:white"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"style="color:white"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"style="color:white"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"style="color:white"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"style="color:white"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet" style="color:white"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet" style="color:white"> Icons</span></a></li>
						<li><a href="login.html" ><i class="icon-lock"></i><span class="hidden-tablet" style="color:white"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			
			
				
						
		@yield('admin_content')
			
			{{-- <div class="row-fluid">
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white list"></i><span class="break"></span>Weekly Stat</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li>
								<a href="#">
									<i class="icon-arrow-up green"></i>                               
									<strong>92</strong>
									New Comments                                    
								</a>
							</li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>15</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>36</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>45</strong>
							  User reviews                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-up green"></i>                               
							  <strong>112</strong>
							  New Comments                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-arrow-down red"></i>
							  <strong>31</strong>
							  New Registrations
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-minus blue"></i>
							  <strong>93</strong>
							  New Articles                                    
							</a>
						  </li>
						  <li>
							<a href="#">
							  <i class="icon-comment yellow"></i>
							  <strong>256</strong>
							  User reviews                                    
							</a>
						  </li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4" onTablet="span6" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Last Users</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
							<li class="green">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Approved             
							</li>
							<li class="yellow">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Pending                                
							</li>
							<li class="red">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Banned                                  
							</li>
							<li class="blue">
								<a href="#">
									<img class="avatar" alt="Dennis Ji" src="img/avatar.jpg">
								</a>
								<strong>Name:</strong> Dennis Ji<br>
								<strong>Since:</strong> Jul 25, 2012 11:09<br>
								<strong>Status:</strong> Updated                                 
							</li>
						</ul>
					</div>
				</div><!--/span-->
				
				<div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
					<div class="box-header">
						<h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="todo metro">
							<ul class="todo-list">
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>	
									Windows Phone 8 App 
									<strong>today</strong>
								</li>
								<li class="red">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>today</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>tommorow</strong>
								</li>
								<li class="yellow">
									<a class="action icon-check-empty" href="#"></a>
									Windows Phone 8 App
									<strong>tommorow</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this week</strong>
								</li>
								<li class="green">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this week</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									New frontend layout
									<strong>this month</strong>
								</li>
								<li class="blue">
									<a class="action icon-check-empty" href="#"></a>
									Hire developers
									<strong>this month</strong>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			
			</div> --}}
			
			{{-- <div class="row-fluid">	

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Comments</p>
					<span class="badge">46</span>
				</a>
				<a class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Products</p>
				</a>
				<a class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Messages</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div><!--/row-->
			 --}}
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	
	<!-- start: JavaScript-->

		<script src="{{ asset('admin/js/jquery-1.9.1.min.js') }}"></script>
	<script src="{{ asset('admin/js/jquery-migrate-1.0.0.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery-ui-1.10.0.custom.min.js') }}"></script>
	
		<script src="j{{ asset('admin/s/jquery.ui.touch-punch.js') }}"></script>
	
		<script src="{{ asset('admin/js/modernizr.js') }}"></script>
	
		<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.cookie.js') }}"></script>
	
		<script src='{{ asset('admin/js/fullcalendar.min.js') }}'></script>
	
		<script src='{{ asset('admin/js/jquery.dataTables.min.js') }}'></script>

		<script src="{{ asset('admin/js/excanvas.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('admin/js/jquery.flot.resize.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.chosen.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.uniform.min.js') }}"></script>
		
		<script src="{{ asset('admin/js/jquery.cleditor.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.noty.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.elfinder.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.raty.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.iphone.toggle.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.uploadify-3.1.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.gritter.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.imagesloaded.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.masonry.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.knob.modified.js') }}"></script>
	
		<script src="{{ asset('admin/js/jquery.sparkline.min.js') }}"></script>
	
		<script src="{{ asset('admin/js/counter.js') }}"></script>
	
		<script src="{{ asset('admin/js/retina.js') }}"></script>

		<script src="{{ asset('admin/js/custom.js') }}"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
