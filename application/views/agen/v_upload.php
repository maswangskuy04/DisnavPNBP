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
							<li><a class="dropdown-item" href="<?= base_url('agen/registrasi'); ?>">Registrasi</a></li>
							<li><a class="dropdown-item active" href="<?= base_url('agen/upload'); ?>">Upload</a></li>
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
		<div class="card p-5 col-lg-8 cust">
			<div class="card-body text-light">
				<h1 class="text-center mb-5 text-light">Form Upload</h1>
				<div class="mb-3">
					<div class="input-group mb-3">
						<input type="file" class="form-control" id="inputGroupFile02">
						<label class="input-group-text" for="inputGroupFile02">Upload PKK</label>
					</div>
				</div>

				<div class="mb-3">
					<div class="input-group mb-3">
						<input type="file" class="form-control" id="inputGroupFile02">
						<label class="input-group-text" for="inputGroupFile02">Upload SPM</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>