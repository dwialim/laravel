<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Obat</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
	@stack('stylesheet')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<div class="wrapper">
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<div class="media">
								<img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<div class="media">
								<img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<div class="media">
								<img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
			</ul>
		</nav>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<a href="index3.html" class="brand-link">
				<img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">AdminLTE 3</span>
			</a>

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="{{url('/')}}" class="nav-link">
								<i class="nav-icon fas fa-th"></i>
								<p>
									Dashboard
									<!-- <span class="right badge badge-danger">New</span> -->
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/obat')}}" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Data Obat
									<!-- <i class="fas fa-angle-left right"></i> -->
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/transaksi')}}" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Data Transaksi
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/distributor')}}" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Data Distributor
								</p>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>

		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Dashboard</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Dashboard v1</li>
							</ol>
						</div>
					</div>
				</div>
			</div>

			<section class="content">
				@yield('content')
			</section>
		</div>
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0-rc
			</div>
		</footer>
	</div>
	<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
	<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
	<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
	<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
	<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
	<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
	<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
	<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
	<script src="{{asset('dist/js/adminlte.js')}}"></script>
	<script src="{{asset('dist/js/demo.js')}}"></script>
	@stack('scripts')
</body>
</html>
