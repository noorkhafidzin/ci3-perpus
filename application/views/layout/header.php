<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- <link href="<?= base_url('assets/css/style.css') ?>"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title><?= $judulhlm ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('/assets/img/Logo-TS.jpg') ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Tiga Serangkai
            </a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url('/') ?>">Dashboard</a>
                    <a class="nav-link" href="<?= base_url('/User') ?>">User</a>
                    <a class="nav-link" href="<?= base_url('/Koleksi') ?>">Koleksi</a>
                    <a class="nav-link" href="<?= base_url('/Koleksi/peminjaman') ?>">Peminjaman</a>
                    <a class="nav-link" href="<?= base_url('/About') ?>">About</a>
                    <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </nav>