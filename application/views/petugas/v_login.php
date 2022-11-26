<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title><?= $header; ?></title>
</head>

<body>
    <?php echo $this->session->flashdata('pesan'); ?>
    <div class="container box">
        <div class="wrapper">
            <div class="title">
                <img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo kalajivam asti navigasi" width="70" height="70" class="logo">
                <span>Distrik Navigasi Kelas I Tanjung Priok</span>
            </div>
            <form action="<?= base_url('petugas/login'); ?>" method="POST">
                <div class="row">
                    <input type="text" id="kd_akses" name="kd_akses" placeholder="Kode Akses">
                    <?php echo form_error('kd_akses', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="row">
                    <input type="password" id="password" name="password" placeholder="Password">
                    <?php echo form_error('password', '<div class="text-small text-danger"></div>'); ?>
                </div>
                <div class="row button">
                    <input type="submit" value="Masuk">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>