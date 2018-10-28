<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Jize - <?= isset($title) ? $title : '' ?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?= site_url('/assets/css/font-awesome.min.css') ?>">
		<link rel="stylesheet" href="<?= site_url('/assets/css/bootstrap.min.css') ?>">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,500,600,700|Raleway:400,500,600" rel="stylesheet">
		<?= isset($hscripts) ? $hscripts : '' ?>
		<link rel="stylesheet" href="<?= site_url('/assets/css/jize.css') ?>">
	</head>
	<body>
		<nav class="navbar navbar-jize navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="<?= site_url("") ?>">
					<img src="<?= site_url('/assets/img/logo.svg') ?>">
				</a>
				<form class="form-search position-relative mr-2 mobile-search" action="<?= site_url("index") ?>" method="GET">
					<input class="form-control" type="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" placeholder="Search" name="search" aria-label="Search">
				</form>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item desktop-search">
							<form class="form-search position-relative mr-2" action="<?= site_url("index") ?>" method="GET">
								<input class="form-control" type="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" placeholder="Search" name="search" aria-label="Search">
							</form>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-cart no-bg" href="<?= site_url("carts") ?>"><i class="fa fa-shopping-bag"></i> Carts <span class="total-cart"><?= totalCart() ?></span></a>
						</li>
						<?php if(@$_SESSION['loggedin']) { ?>

						<li class="nav-item">
							<a class="nav-link" href="<?= site_url("profile")?>"><i class="fa fa-user"></i> My Account</a>
						</li>
						<?php } else { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?= site_url("login")?>"><i class="fa fa-user"></i> Sign In</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
