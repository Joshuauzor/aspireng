<!doctype html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url("assets/admin/assets/media/image/favicon.png") ?>"/>


	<!-- Plugin styles -->
	<link rel="stylesheet" href="<?= base_url("assets/admin/vendors/bundle.css") ?>" type="text/css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="<?= base_url("assets/admin/vendors/datepicker/daterangepicker.css") ?>">

	<!-- Slick -->
	<link rel="stylesheet" href="<?= base_url("assets/admin/vendors/slick/slick.css") ?>">
	<link rel="stylesheet" href="<?= base_url("assets/admin/vendors/slick/slick-theme.css") ?>">

	<!-- Vmap -->
	<link rel="stylesheet" href="<?= base_url("assets/admin/vendors/vmap/jqvmap.min.css") ?>">

	<!-- App styles -->
	<link rel="stylesheet" href="<?= base_url("assets/admin/assets/css/app.min.css") ?>" type="text/css">

	<!-- Css -->
	<link rel="stylesheet" href="<?= base_url("assets/vendors/dataTable/dataTables.min.css") ?>" type="text/css">

	<!-- Javascript -->
	<script src="<?= base_url("assets/vendors/dataTable/jquery.dataTables.min.js") ?>"></script>

	<!-- Bootstrap 4 and responsive compatibility -->
	<script src="<?= base_url("assets/vendors/dataTable/dataTables.bootstrap4.min.js") ?>"></script>
	<script src="<?= base_url("assets/vendors/dataTable/dataTables.responsive.min.js") ?>"></script>
</head>
<body>

<!-- begin::preloader-->
<div class="preloader">
	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
		 xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
		<g>
			<path
				d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z"
				fill="#000000" fill-opacity="1"/>
			<animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
							  dur="500ms" repeatCount="indefinite">
			</animateTransform>
		</g>
    </svg>
</div>
<!-- end::preloader -->

<!-- begin::navigation -->
<div class="navigation">

	<!-- begin::logo -->
	<div id="logo">
		<a href="index-2.html">
			<img class="logo" src="<?= base_url("assets/admin/assets/media/image/logo.png") ?>" alt="logo">
			<img class="logo-sm" src="<?= base_url("assets/admin/assets/media/image/logo-sm.png") ?>" alt="small logo">
			<img class="logo-dark" src="<?= base_url("assets/admin/assets/media/image/logo-dark.png") ?>"
				 alt="dark logo">
		</a>
	</div>
	<!-- end::logo -->

	<!-- begin::navigation header -->
	<header class="navigation-header">
		<figure class="avatar avatar-state-success">
			<img src="<?= base_url("assets/admin/assets/media/image/user/avatar.jpg") ?>" class="rounded-circle"
				 alt="image">
		</figure>
		<div>
			<h5><?= $this->session->aspireUser->username ?></h5>
			<p class="text-muted">User</p>
			<ul class="nav">
				<li class="nav-item">
					<a href="<?=base_url('user/home/profile')?>" class="btn nav-link bg-info-bright" title="Profile" data-toggle="tooltip">
						<i data-feather="user"></i>
					</a>
				</li>
				<!-- <li class="nav-item">
					<a href="#" class="btn nav-link bg-success-bright" title="Settings" data-toggle="tooltip">
						<i data-feather="settings"></i>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url("user/login/logout") ?>" class="btn nav-link bg-danger-bright" title="Logout"
					   data-toggle="tooltip">
						<i data-feather="log-out"></i>
					</a>
				</li>
			</ul>
		</div>
	</header>
	<!-- end::navigation header -->

	<!-- begin::navigation menu -->
	<div class="navigation-menu-body">
		<ul>
			<li class="navigation-divider">Main</li>
			<li>
				<a href="<?= base_url('user/home')?>">
					<i class="nav-link-icon" data-feather="mail"></i>
					<span>Make request</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('user/requests') ?>">
					<i class="nav-link-icon" data-feather="message-circle"></i>
					<span>Requests</span>
				</a>
				<ul>
				<li><a href="<?= base_url('user/home/userpending') ?>">Pending request</a></li>
				<li><a href="<?= base_url('user/home/approvedrequest') ?>">Approved request</a></li>
				<li><a href="<?= base_url('user/home/declinedrequest') ?>">Declined request</a></li>
				</ul>
			</li>
			<li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="user"></i>
                    <span>Authentication</span>
                </a>
                <ul>
                	<li><a href="<?=base_url('homepage/index')?>">Register account</a></li>
					<li><a href="<?=base_url('user/home/error')?>">Recovery Password</a></li>
					<!-- <li><a href="<?=base_url('user/home/deleteaccount')?>">Delete Account</a></li> -->
                </ul>
			</li>
			<li>
                <a href="<?= base_url('homepage/contact')?>">
                    <i class="nav-link-icon" data-feather="send"></i>
                    <span>Contact us</span>
				</a>
			</li>
            <li>
		</ul>
	</div>
	<!-- end::navigation menu -->

</div>
<!-- end::navigation -->

<!-- begin::main -->
<div id="main">

	<!-- begin::header -->
	<div class="header">

		<!-- begin::header left -->
		<ul class="navbar-nav">

			<!-- begin::navigation-toggler -->
			<li class="nav-item navigation-toggler">
				<a href="#" class="nav-link">
					<i data-feather="menu"></i>
				</a>
			</li>
			<!-- end::navigation-toggler -->

			<!-- begin::header-logo -->
			<li class="nav-item" id="header-logo">
				<a href="index-2.html">
					<img class="logo" src="<?= base_url("assets/admin/assets/media/image/logo.png") ?>" alt="logo">
					<img class="logo-sm" src="<?= base_url("assets/admin/assets/media/image/logo-sm.png") ?>"
						 alt="small logo">
					<img class="logo-dark" src="<?= base_url("assets/admin/assets/media/image/logo-dark.png") ?>"
						 alt="dark logo">
				</a>
			</li>
			<!-- end::header-logo -->
		</ul>
		<!-- end::header left -->

		<!-- begin::header-right -->
		<div class="header-right">
			<ul class="navbar-nav">

				<!-- begin::search-form -->
				<li class="nav-item search-form">
					<div class="row">
						<div class="col-md-6">
							<form>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<div class="input-group-append">
										<button class="btn btn-default" type="button">
											<i data-feather="search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</li>
				<!-- end::search-form -->


				<!-- begin::header app list -->
				
				<!-- end::header notification dropdown -->
			</ul>

			<!-- begin::mobile header toggler -->
			<ul class="navbar-nav d-flex align-items-center">
				<li class="nav-item header-toggler">
					<a href="#" class="nav-link">
						<i data-feather="arrow-down"></i>
					</a>
				</li>
			</ul>
			<!-- end::mobile header toggler -->
		</div>
		<!-- end::header-right -->
	</div>
	<!-- end::header -->
