<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jize -
    <?= $title ?>
  </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= site_url('/assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('/assets/css/font-awesome.min.css') ?>">

  <!-- Custom styles for this template -->
  <link href="<?= site_url('/assets/css/dashboard.css') ?>" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Jize Admin Dashboard</a>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?= site_url('logout') ?>"><i class="fa fa-user"></i> Log out</a>
      </li>
    </ul>
  </nav>