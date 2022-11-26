<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/customize.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title><?= $header; ?></title>
</head>

<body class="bg">
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top cust">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="https://github.com/maswangskuy04/DisnavPNBP/blob/main/assets/img/logo.png?raw=true" alt="logo" width="70" height="70">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('welcome'); ?>">Beranda</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Menu
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="<?= base_url('agen/payment'); ?>">Pembayaran</a></li>
							<li><a class="dropdown-item active" href="<?= base_url('agen/registrasi'); ?>">Registrasi</a></li>
							<li><a class="dropdown-item" href="<?= base_url('agen/upload'); ?>">Upload</a></li>
						</ul>
					</li>
				</ul>
				<div class="d-flex">
					<a href="<?= base_url('petugas/login/logout'); ?>" class="btn btn-light">Masuk</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="container mt-5 justify-content-center d-flex mb-5">
		<div class="card p-5 col-12 cust">
			<div class="card-body text-light col-xs-8">
				<h1 class="text-center mb-5 text-light">Form Registrasi</h1>
				<form action="<?= base_url('agen/registrasi/tambahDataAksi'); ?>" method="POST">
					<div class="row g-3">
						<div class="col">
							<label for="nama_agen" class="form-label">Nama Agen</label>
							<input type="text" class="form-control" name="nama_agen" id="nama_agen">
							<?php echo form_error('nama_agen', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="col">
							<label for="email_agen" class="form-label">Email Agen</label>
							<input type="email" class="form-control" name="email_agen">
							<?php echo form_error('email_agen', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="col">
							<label for="telpon" class="form-label">Telpon Agen</label>
							<input type="number" class="form-control" name="telpon" id="telpon">
							<?php echo form_error('telpon', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-3">
							<label for="perusahaan_pelayaran" class="form-label">Perusahaan Pelayaran</label>
							<input type="text" class="form-control" name="perusahaan_pelayaran" id="perusahaan_pelayaran">
							<?php echo form_error('perusahaan_pelayaran', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-3">
							<label for="alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" id="alamat">
							<?php echo form_error('alamat', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-3">
							<label for="nama_kapal" class="form-label">Nama Kapal</label>
							<input type="text" class="form-control" name="nama_kapal" id="nama_kapal">
							<?php echo form_error('nama_kapal', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-3">
							<label for="kebangsaan" class="form-label">Kebangsaan</label>
							<input type="text" class="form-control" name="kebangsaan" id="kebangsaan">
							<?php echo form_error('kebangsaan', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="col">
							<label for="gt" class="form-label">GT (Gross Tonnage)</label>
							<input type="number" class="form-control" name="gt" id="gt">
							<?php echo form_error('gt', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="col">
							<label for="lp" class="form-label">Tanggal Masuk</label>
							<input type="date" class="form-control" name="lp" id="lp">
							<?php echo form_error('lp', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="col">
							<label for="np" class="form-label">Tanggal Keluar</label>
							<input type="date" class="form-control" name="np" id="np">
							<?php echo form_error('np', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-3">
							<label for="jenis_pelayaran" class="form-label">Jenis Pelayaran</label>
							<input type="text" class="form-control" name="jenis_pelayaran" id="jenis_pelayaran">
							<?php echo form_error('jenis_pelayaran', '<div class="text-small text-danger"></div>'); ?>
						</div>
						<div class="mt-5">
							<input type="submit" class="s col-12" role="button" value="Kirim">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/'); ?>js/jquery-3.6.1.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>