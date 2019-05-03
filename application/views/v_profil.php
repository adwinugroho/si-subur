<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>SI SUBUR - Lihat Profil</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dashboard/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dashboard/css/ready.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/dashboard/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="<?php echo site_url("Home"); ?>" class="logo">
					Beranda - SI SUBUR
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo base_url()?>assets/dashboard/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span ><?php echo $this->session->userdata('nama');?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo base_url()?>assets/dashboard/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $this->session->userdata('nama');?></h4>
											<p class="text-muted">hello@themekita.com</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="<?php echo base_url('Login/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="<?php echo base_url()?>assets/dashboard/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata('nama');?>
									<span class="user-level">User - SI SUBUR</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse">Profil Saya</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">Sunting Profil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="<?php echo site_url("Home"); ?>">
								<i class="la la-home"></i>
								<p>Beranda</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo site_url("Histori"); ?>">
								<i class="la la-history"></i>
								<p>Lihat Histori</p>
							</a>
						</li>
							<li class="nav-item">
							<a href="<?php echo site_url("Siklus"); ?>">
								<i class="la la-calendar"></i>
								<p>Lihat Siklus</p>
							</a>
						</li>
						<li class="nav-item update-pro">
							<button  data-toggle="modal" data-target="#modalUpdate">
								<i class="la la-info-circle"></i>
								<p>Bantuan</p>
							</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Halaman Data Profil</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Form Profil</div>
										<div class="card-category">Halaman profil anda.</div>
									</div>
									<div class="card-body">
										<div class="form">
										<?php echo form_open('Profil/edit');?>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>Username</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="text" id="" name="username" value="<?php echo $profil[0]['username']; ?>">
												</div>
											</div>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>Nama</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="text" id="" name="nama" value="<?php echo $profil[0]['nama']; ?>">
												</div>
											</div>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>Alamat Email</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="email" id="" name="email">
												</div>
											</div>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>New Password</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="password" id="" name="password">
												</div>
											</div>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>Re-type New Password</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="password" id="" name="password_re">
												</div>
											</div>
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12 text-right">
													<label>Calendar</label>
												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<input class="form-control" type="text" id="calendar" name="password_re">
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="form">
											<div class="form-group from-show-notify row">
												<div class="col-lg-3 col-md-3 col-sm-12">

												</div>
												<div class="col-lg-4 col-md-9 col-sm-12">
													<button class="btn btn-success" type="submit"><i class="la la-check"></i> Simpan</button>
												</div>
											</div>
										</div>
									</div>
									<?php echo form_close();?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
						<nav class="pull-left">
							<ul class="nav">
								<li class="nav-item">
									<a class="nav-link" href="http://www.themekita.com">
										ThemeKita
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Help
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">
										Licenses
									</a>
								</li>
							</ul>
						</nav>
						<div class="copyright ml-auto">
							2018, made with <i class="la la-heart heart text-danger"></i> by <a href="http://www.themekita.com">ThemeKita</a>
						</div>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Website ini masih dalam tahap pegembangan</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">
					<p>Untuk menandai data tersebut adalah siklus hari pertama, silahkan tekan tombol bergambar <b>Pensil</b> yang berada dikolom aksi</p>
					<p>Untuk menghapus data, silahkan tekan tombol bergambar <b>X</b> yang berada dikolom aksi, untuk informasi lebih lanjut silahkan email ke</p>
					<p>
						<b>adwinnugroho16@gmail.com, terima kasih</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url()?>assets/dashboard/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/core/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/ready.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
  $( function() {
    $( "#calendar" ).datepicker({
		minDate: 0	
		});
  	});
</script>
</html>
