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

	<!-- Plugin scripts -->
	<script src="<?= base_url("assets/admin/vendors/bundle.js") ?>"></script>

	<!-- Chartjs -->
	<script src="<?= base_url("assets/admin/vendors/charts/chartjs/chart.min.js") ?>"></script>

	<!-- Apex chart -->
	<script src="<?= base_url("assets/admin/vendors/charts/apex/apexcharts.min.js") ?>"></script>

	<!-- Circle progress -->
	<script src="<?= base_url("assets/admin/vendors/circle-progress/circle-progress.min.js") ?>"></script>

	<!-- Peity -->
	<script src="<?= base_url("assets/admin/vendors/charts/peity/jquery.peity.min.js") ?>"></script>
	<script src="<?= base_url("assets/admin/assets/js/examples/charts/peity.js") ?>"></script>

	<!-- Datepicker -->
	<script src="<?= base_url("assets/admin/vendors/datepicker/daterangepicker.js") ?>"></script>

	<!-- Slick -->
	<script src="<?= base_url("assets/admin/vendors/slick/slick.min.js") ?>"></script>

	<!-- Vamp -->
	<script src="<?= base_url("assets/admin/vendors/vmap/jquery.vmap.min.js") ?>"></script>
	<script src="<?= base_url("assets/admin/vendors/vmap/maps/jquery.vmap.usa.js") ?>"></script>
	<script src="assets/admin/assets/js/examples/vmap.js"></script>

	<!-- Dashboard scripts -->
	<script src="<?= base_url("assets/admin/assets/js/examples/dashboard.js") ?>"></script>
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
			<img src="<?= base_url("assets/admin/assets/media/image/user/josh.jpg") ?>" class="rounded-circle"
				 alt="image">
		</figure>
		<div>
			<h5><?= $this->session->aspiretechnician->firstname . ' ' . $this->session->aspiretechnician->lastname ?></h5>
			<p class="text-muted">Technician</p>
			<ul class="nav">
				<li class="nav-item">
					<a href="<?= base_url('admin/profile') ?>" class="btn nav-link bg-info-bright" title="Profile"
					   data-toggle="tooltip">
						<i data-feather="user"></i>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url("technician/login/logout") ?>" class="btn nav-link bg-danger-bright" title="Logout"
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
				<a href="index-2.html">
					<i class="nav-link-icon" data-feather="bar-chart-2"></i>
					<span>Dashboard</span>
				</a>
				<ul>
					<li><a href="index-2.html">Dashboard</a></li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('admin/requests') ?>">
					<i class="nav-link-icon" data-feather="message-circle"></i>
					<span>Requests</span>
				</a>
				<ul>
					<li><a href="<?=base_url("admin/home/newrequest")?>">New request</a></li>
				</ul>
			</li>
			<li>
				<a href="<?= base_url('admin/register') ?>">
					<i class="nav-link-icon" data-feather="plus"></i>
					<span>Add new Admin</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('admin/services') ?>">
					<i class="nav-link-icon" data-feather="plus"></i>
					<span>Manage Services</span>
				</a>
			</li>
			<li>
				<a href="<?= base_url('admin/services') ?>">
					<i class="nav-link-icon" data-feather="plus"></i>
					<span>Manage Technicians</span>
				</a>
			</li>
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
				<li class="nav-item dropdown">
					<a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
						<i data-feather="grid"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
						<div class="p-3">
							<h6 class="text-uppercase font-size-11 mb-3">Web Apps</h6>
							<div class="row row-xs">
								<div class="col-6">
									<a href="chat.html">
										<div
											class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
											<i class="text-success width-23 height-23"
											   data-feather="message-circle"></i>
											<div class="mt-2">Chat</div>
										</div>
									</a>
								</div>
								<div class="col-6">
									<a href="inbox.html">
										<div
											class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
											<i class="text-info width-23 height-23" data-feather="mail"></i>
											<div class="mt-2">Mail</div>
										</div>
									</a>
								</div>
								<div class="col-6">
									<a href="calendar.html">
										<div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
											<i class="text-warning width-23 height-23" data-feather="calendar"></i>
											<div class="mt-2">Calendar</div>
										</div>
									</a>
								</div>
								<div class="col-6">
									<a href="file-manager.html">
										<div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
											<i class="text-danger width-23 height-23" data-feather="file"></i>
											<div class="mt-2">File Manager</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!-- end::header app list -->

				<!-- begin::header messages dropdown -->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link nav-link-notify" title="Messages" data-toggle="dropdown">
						<i data-feather="message-circle"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
						<div class="p-4 text-center"
							 data-backround-image="<?= base_url("assets/media/image/image1.png") ?>">
							<h6 class="mb-1">Messages</h6>
							<small class="font-size-11 opacity-7">2 unread messages</small>
						</div>
						<div>
							<ul class="list-group list-group-flush">
								<li>
									<a href="#" class="list-group-item d-flex hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
												<img
													src="<?= base_url("assets/admin/assets/media/image/user/man_avatar1.jpg") ?>"
													class="rounded-circle" alt="user">
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Herbie Pallatina
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
											</p>
											<div class="small text-muted">
												<span class="mr-2">02:30 PM</span>
												<span>Have you madimage</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#"
									   class="list-group-item d-flex align-items-center hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
												<img
													src="<?= base_url("assets/admin/assets/media/image/user/women_avatar5.jpg") ?>"
													class="rounded-circle" alt="user">
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Andrei Miners
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
											</p>
											<div class="small text-muted">
												<span class="mr-2">08:36 PM</span>
												<span>I have a meetinimage</span>
											</div>
										</div>
									</a>
								</li>
								<li class="text-divider small pb-2 pl-3 pt-3">
									<span>Old chats</span>
								</li>
								<li>
									<a href="#"
									   class="list-group-item d-flex align-items-center hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
												<img
													src="<?= base_url("assets/admin/assets/media/image/user/man_avatar3.jpg") ?>"
													class="rounded-circle" alt="user">
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Kevin added
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<div class="small text-muted">
												<span class="mr-2">11:09 PM</span>
												<span>Have you madimage</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="list-group-item d-flex hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
												<img
													src="<?= base_url("assets/admin/assets/media/image/user/man_avatar2.jpg") ?>"
													class="rounded-circle" alt="user">
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Eugenio Carnelley
												<i title="Mark as read" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<div class="small text-muted">
												<span class="mr-2">Yesterday</span>
												<span>I have a meetinimage</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#"
									   class="list-group-item d-flex align-items-center hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
												<img
													src="<?= base_url("assets/admin/assets/media/image/user/women_avatar1.jpg") ?>"
													class="rounded-circle" alt="user">
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Neely Ferdinand
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<div class="small text-muted">
												<span class="mr-2">Yesterday</span>
												<span>I have a meetinimage</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="p-2 text-right">
							<ul class="list-inline small">
								<li class="list-inline-item">
									<a href="#">Mark All Read</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<!-- end::header messages dropdown -->

				<!-- begin::header notification dropdown -->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
						<i data-feather="bell"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
						<div class="p-4 text-center" data-backround-image="assets/media/image/image1.png">
							<h6 class="mb-1">Notifications</h6>
							<small class="font-size-11 opacity-7">1 unread notifications</small>
						</div>
						<div>
							<ul class="list-group list-group-flush">
								<li>
									<a href="#" class="list-group-item d-flex hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
                                                <span
													class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												New customer registered
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
											</p>
											<span class="text-muted small">20 min ago</span>
										</div>
									</a>
								</li>
								<li class="text-divider small pb-2 pl-3 pt-3">
									<span>Old notifications</span>
								</li>
								<li>
									<a href="#" class="list-group-item d-flex hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
                                                <span
													class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												New Order Recieved
												<i title="Mark as read" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<span class="text-muted small">45 sec ago</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#"
									   class="list-group-item d-flex align-items-center hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Server Limit Reached!
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<span class="text-muted small">55 sec ago</span>
										</div>
									</a>
								</li>
								<li>
									<a href="#"
									   class="list-group-item d-flex align-items-center hide-show-toggler">
										<div>
											<figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
											</figure>
										</div>
										<div class="flex-grow-1">
											<p class="mb-0 line-height-20 d-flex justify-content-between">
												Apps are ready for update
												<i title="Make unread" data-toggle="tooltip"
												   class="hide-show-toggler-item fa fa-check font-size-11"></i>
											</p>
											<span class="text-muted small">Yesterday</span>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="p-2 text-right">
							<ul class="list-inline small">
								<li class="list-inline-item">
									<a href="#">Mark All Read</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
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
