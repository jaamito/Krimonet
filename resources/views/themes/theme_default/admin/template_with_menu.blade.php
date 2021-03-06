<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Krimonet :: @yield('title')</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
		<!-- iCheck -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
		<!-- JQVMap -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jqvmap/jqvmap.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/css/adminlte.min.css') }}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/daterangepicker/daterangepicker.css') }}">
		<!-- summernote -->
		<link rel="stylesheet" href="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/summernote/summernote-bs4.css') }}">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		@yield('css')
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="index3.html" class="nav-link">@lang('admin.system.home')</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">@lang('admin.system.contact')</a>
					</li>
				</ul>

				<!-- SEARCH FORM -->
				<form class="form-inline ml-3">
					<div class="input-group input-group-sm">
						<input class="form-control form-control-navbar" type="search" placeholder="@lang('admin.system.search')" aria-label="@lang('admin.system.dashboard.search')">
						<div class="input-group-append">
							<button class="btn btn-navbar" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</form>

				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<!-- Messages Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#" title="@choice("admin.system.messages.num_messages", count($messages ?? []))">
							<i class="far fa-comments"></i>
							<span class="badge badge-danger navbar-badge">{{ count($messages ?? []) }}</span>
						</a>
						@isset($messages)
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							@foreach ($messages as $message)
							<a href="#" class="dropdown-item">
								<!-- Message Start -->
								<div class="media">
									<img src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
									<div class="media-body">
										<h3 class="dropdown-item-title">
											Brad Diesel
											<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
										</h3>
										<p class="text-sm">Call me whenever you can...</p>
										<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
									</div>
								</div>
								<!-- Message End -->
							</a>
							<div class="dropdown-divider"></div>
							@endforeach
							<a href="#" class="dropdown-item dropdown-footer">@lang('admin.system.messages.seeall')</a>
						</div>
						@endisset
					</li>
					<!-- Notifications Dropdown Menu -->
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#" title="@choice("admin.system.notifies.num_notifies", count($notifies ?? []))">
							<i class="far fa-bell"></i>
							<span class="badge badge-warning navbar-badge">{{ count($notifies ?? []) }}</span>
						</a>
						@isset($notifies)
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<span class="dropdown-item dropdown-header">@lang("admin.system.notifies.num_notify")</span>
							@foreach ($notifies as $notify)
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">
								<i class="fas fa-envelope mr-2"></i> 4 new messages
								<span class="float-right text-muted text-sm">3 mins</span>
							</a>
							@endforeach
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item dropdown-footer">@lang('admin.system.notifies.seeall')</a>
						</div>
						@endisset
					</li>
					<!--
					<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
							<i class="fas fa-th-large"></i>
						</a>
					</li>
					-->
				</ul>
			</nav>
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="index3.html" class="brand-link">
					<img src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/img/KrimoNetLogo.png') }}" alt="KrimoNet Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">KrimoNet</span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user panel (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">{{Auth::user()->user_name}}</a>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
							with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a href="{{ route('logout') }}" class="nav-link">
									<i class="fa fa-sign-out-alt nav-icon"></i>
									<p>@lang('admin.system.logout')</p>
								</a>
							</li>
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="container-fluid">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1 class="m-0 text-dark">Dashboard</h1>
							</div><!-- /.col -->
							<div class="col-sm-6">
								<ol class="breadcrumb float-sm-right">
									@yield("breadcrumb")								
								</ol>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.container-fluid -->
				</div>
				<!-- /.content-header -->

				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						@yield('content')
					</div><!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">
				<strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
				All rights reserved.
				<div class="float-right d-none d-sm-inline-block">
					<b>Version</b> 3.0.3-pre
				</div>
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jquery/jquery.min.js') }}"></script>
		<!-- jQuery UI 1.11.4 -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
			$.widget.bridge('uibutton', $.ui.button)
		</script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- ChartJS -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/chart.js/Chart.min.js') }}"></script>
		<!-- Sparkline -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/sparklines/sparkline.js') }}"></script>
		<!-- JQVMap -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
		<!-- daterangepicker -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/moment/moment.min.js') }}"></script>
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<!-- Tempusdominus Bootstrap 4 -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
		<!-- Summernote -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
		<!-- overlayScrollbars -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/js/adminlte.js') }}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/js/pages/dashboard.js') }}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset(config('view.themes_defaultTheme_url') . '/admin/dist/js/demo.js') }}"></script>
		@yield('scripts')
	</body>
</html>