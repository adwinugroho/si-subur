<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Beranda - SI SUBUR</title>
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
				<a href="#" class="logo">
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
											<p class="text-muted">hello@sisubur.com</p><a href="<?php echo site_url('Profil'); ?>" class="btn btn-rounded btn-danger btn-sm">Lihat Profil</a></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo site_url('Profil'); ?>"><i class="ti-user"></i> Profil Saya</a>
									<div class="dropdown-divider"></div>
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
									<span class="user-level">User SI SUBUR</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="<?php echo site_url('Profil'); ?>">
											<span class="link-collapse">Profil Saya</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('Profil'); ?>">
											<span class="link-collapse">Sunting Profil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="#">
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
						<h4 class="page-title">Beranda</h4>
						<div class="row">
							<div class="col-md-5">
								<div class="card card-stats card-danger">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
											<div class="icon-big text-center">
											<i class="la la-bar-chart"></i>
											</div>
											</div>
										<div class="col-7 d-flex align-items-center">
											<div class="numbers">
												<p class="card-category">Hari Ovulasi Di Siklus Berikutnya</p>
											<h4 class="card-title">Hari ke-14</h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Statistik Siklus</h4>
										<p class="card-category">
										Grafik Siklus</p>
										<?php if($this->session->userdata('username') === 'diahrisqiwati'):?>
										<form class="form-group" action="<?php echo site_url('Home/create'); ?>" method="post">
											<button class="btn btn-primary" type="submit" name="button">Refresh</button>
										</form>
										<?php else:?>
											<form class="form-group" action="<?php echo site_url('Siklus'); ?>" method="post">
												<button class="btn btn-primary" type="submit" name="button">Tambah Data</button>
											</form>
											<?php endif;?>
									</div>
									<div class="card-body">
										<canvas id="myChart" width="400" height="400"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container-fluid">
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
					<p>Untuk melihat data terbaru silahkan tekan tombol <b>Refresh</b> yang berada diatas grafik, untuk informasi lebih lanjut silahkan email ke</p>
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
<script src="<?php echo base_url()?>assets/dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url()?>assets/dashboard/js/ready.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script type="text/javascript">
var ctx = document.getElementById("myChart").getContext('2d');
	var data_tanggal = [];
	var data_suhu = [];
	$.post("<?php echo site_url('Home/getGrafik') ?>",
	function (data){
		var obj = JSON.parse(data);
		$.each(obj, function (test, item) {
			data_tanggal.push(item.created_at);
			data_suhu.push(item.field2);
		});

var myChart = new Chart(ctx, {
	type: 'line',
	data: {
			labels: data_tanggal,
			datasets: [{
					label: 'Besar Suhu',
					data: data_suhu,
					backgroundColor:"pink",
					borderColor:"red",
					fill:false,
					lineTension:0,
					pointRadius:5,
					borderWidth: 1
			}]
	},
	options: {
			scales: {
					yAxes: [{
							ticks: {
									beginAtZero:true
							}
					}]
			}
	}
});
});

</script>
</html>
