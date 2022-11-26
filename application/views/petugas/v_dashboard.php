<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/viewdashboard.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>UI MAIN</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
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
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item s" href="#">Action</a></li>
              <li><a class="dropdown-item s" href="#">Another action</a></li>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <a href="<?= base_url('petugas/login'); ?>" class="btn btn-primary">Keluar</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="card mt-3 container">
    <div class="card-body">
      <table class="table table-dark table-hover table-bordered table-stripped text-white" id="dataTable" width="100%" cellspacing="0">
        <br>
        <thead>
          <tr>
            <th class="text-center">No</th>
            <th class="text-center" width="12%">Nama Agen</th>
            <th class="text-center" width="12%">Email Agen</th>
            <th class="text-center" width="12%">Telpon Agen</th>
            <th class="text-center" width="12%">Perusahaan Pelayaran</th>
            <th class="text-center" width="12%">Alamat</th>
            <th class="text-center" width="12%">Nama Kapal</th>
            <th class="text-center" width="12%">Kebangsaan</th>
            <th class="text-center" width="12%">GT</th>
            <th class="text-center">Last Port</th>
            <th class="text-center">Next Port</th>
            <th class="text-center" width="12%">Jenis Pelayaran</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($registrasi as $r) : ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $r->nama_agen; ?></td>
              <td><?php echo $r->email_agen; ?></td>
              <td><?php echo $r->telpon; ?></td>
              <td><?php echo $r->perusahaan_pelayaran; ?></td>
              <td><?php echo $r->alamat; ?></td>
              <td><?php echo $r->nama_kapal; ?></td>
              <td><?php echo $r->kebangsaan; ?></td>
              <td><?php echo $r->gt; ?></td>
              <td><?php echo $r->lp; ?></td>
              <td><?php echo $r->np; ?></td>
              <td><?php echo $r->jenis_pelayaran; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="<?= base_url('assets/'); ?>js/jquery-3.6.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>