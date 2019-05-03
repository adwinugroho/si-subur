<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>SI SUBUR - Lihat Siklus</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/ready.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/demo.css">
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
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo base_url() ?>assets/dashboard/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span><?php echo $this->session->userdata('nama'); ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="<?php echo base_url() ?>assets/dashboard/img/profile.jpg" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $this->session->userdata('nama'); ?></h4>
											<p class="text-muted">hello@themekita.com</p><a href="<?php echo site_url('Profil'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo site_url('Profil'); ?>"><i class="ti-user"></i> My Profile</a>
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
						<img src="<?php echo base_url() ?>assets/dashboard/img/profile.jpg">
					</div>
					<div class="info">
						<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
							<span>
								<?php echo $this->session->userdata('nama'); ?>
								<span class="user-level">User - SI SUBUR</span>
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
						<a href="#">
							<i class="la la-calendar"></i>
							<p>Lihat Siklus</p>
						</a>
					</li>
					<li class="nav-item update-pro">
						<button data-toggle="modal" data-target="#modalUpdate">
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
					<h4 class="page-title">Halaman Data Siklus</h4>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Siklus</div>
									<div class="card-category">Dibawah ini data siklus anda</div>
								</div>
								<div class="card-body">
									<?php if ($this->session->flashdata('msg')) : ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											Data Berhasil Ditambahkan<button type="button" class="tutup" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php elseif ($this->session->flashdata('msg_error')) : ?>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											Data Gagal Ditambahkan<button type="button" class="tutup" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php elseif ($this->session->flashdata('msg_delete')) : ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											Data Berhasil Dihapus<button type="button" class="tutup" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php elseif ($this->session->flashdata('msg_update')) : ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											Data Berhasil Diupdate<button type="button" class="tutup" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									<?php endif; ?>
									<?php if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
										<input type="hidden" name="" value="">
									<?php else : ?>
										<button data-toggle="modal" data-target="#modaladdSiklus" class="btn btn-primary">Tambah Data</button>
									<?php endif; ?>
									<div class="form">
										<table class="table mt-3">
											<thead>
												<tr>
													<th>ID</th>
													<th>Tanggal</th>
													<th>Jam</th>
													<?php if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
														<th>ID Entry</th>
													<?php endif; ?>
													<th>Suhu</th>
													<th>Hari Ke-</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($siklus->result_array() as $key) :
													$id = $key['id'];
													if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
														<?php $entry_id = $key['entry_id']; ?>
													<?php endif; ?>
													<?php
													$created_at = $key['created_at'];
													$jam = $key['jam'];
													$field2 = $key['field2'];
													$id_user = $key['id_user'];
													$harike = $key['hari_ke'];
													?>
													<tr>
														<td><?php echo $id; ?></td>
														<td><?php echo $created_at; ?></td>
														<td><?php echo $jam; ?></td>
														<?php if ($this->session->userdata('username') === 'diahrisqiwati') : ?>
															<td><?php echo $entry_id; ?></td>
														<?php endif; ?>
														<td><?php echo $field2; ?></td>
														<td><?php echo $harike; ?></td>
														<td>
															<button data-toggle="modal" class="btn btn-warning" data-target="#modal_edit<?php echo $id; ?>">
																<i class="la la-pencil-square"></i>Tandai Siklus</button>
															<a href="<?php echo base_url() ?>Siklus/delete/<?php echo "$id" ?>">
																<button class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data tersebut?')"><i class="la la-close"></i>Hapus</button></a>
														</td>
													</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer">
									<p>*Silahkan tekan tombol bantuan disebelah kanan bila anda bingung</p>
								</div>
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

	<!-- Modal tambah Siklus -->
	<div id="modaladdSiklus" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h6 class="modal-title">Input Data Siklus</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<form role="form" method="post" action="<?php echo base_url('Siklus/create'); ?>">
						<div class="form-group">
							<input type="hidden" name="id" class="form-control">
							Tanggal<input type="date" class="form-control" name="created_at">
						</div>
						<div class="form-group">
							Jam<input type="time" class="form-control" name="jam">
						</div>
						<div class="form-group">
							Suhu<input type="text" class="form-control" name="field2">
						</div>
						<?php if ($this->session->userdata('username') === 'vinasn') : ?>
							<?php $id_user = 1; ?>
						<?php elseif ($this->session->userdata('username') === 'evidwi') : ?>
							<?php $id_user = 2; ?>
						<?php elseif ($this->session->userdata('username') === 'lailatulhusniah') : ?>
							<?php $id_user = 3; ?>
						<?php elseif ($this->session->userdata('username') === 'gitaindah') : ?>
							<?php $id_user = 4; ?>
						<?php elseif ($this->session->userdata('username') === 'nurhayatin') : ?>
							<?php $id_user = 5; ?>
						<?php elseif ($this->session->userdata('username') === 'budewi_ft') : ?>
							<?php $id_user = 6; ?>
						<?php endif; ?>
						<div class="form-group">
							ID User<input type="text" name="id_user" value="<?php echo $id_user; ?>" class="form-control" readonly>
						</div>
						<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal tandai Siklus -->
	<?php foreach ($siklus->result_array() as $key) :
		$id = $key['id'];
		?>
		<div id="modal_edit<?php echo $id; ?>" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="largeModal" aria-hidden="true">
			<div class="modal-dialog">
				<!-- konten modal-->
				<div class="modal-content">
					<!-- heading modal -->
					<div class="modal-header">
						<h6 class="modal-title">Silahkan input hari ke berapa dalam siklus anda?</h6>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<!-- body modal -->
					<div class="modal-body">
						<form role="form" method="post" action="<?php echo base_url('Siklus/create_hari'); ?>">
							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<label for="exampleFormControlSelect1">Hari ke-berapa?</label>
								<select class="form-control" name="harike" id="exampleFormControlSelect1">
									<?php
									for ($i = 1; $i <= 29; $i++) : ?>
										<option><?php echo $i; ?></option>
									<?php endfor ?>
								</select>
							</div>
							<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
							<button type="button" class="btn btn-danger" name="cancel" data-dismiss="modal">Batal</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</body>
<script src="<?php echo base_url() ?>assets/dashboard/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/core/popper.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/js/ready.min.js"></script>

</html>