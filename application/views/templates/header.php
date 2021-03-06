<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <title><?php echo $judul; ?></title>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="#">E - Finance</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/santri">Santri</a>
      <!-- <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/bendahara">Bendahara</a> -->
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/penagihan">Penagihan</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/donasi">Donasi</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/laporan">Laporan</a>
      <a class="nav-item nav-link" href="<?php echo base_url(); ?>">Logout <span class="sr-only">(current)</span></a>
      <!-- <a class="nav-item nav-link" href="#">About</a> -->
    </div>
  </div>
</div>
</nav>