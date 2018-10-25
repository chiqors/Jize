<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Jize - <?= $title ?></title>
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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<form class="form-search position-relative mr-2" action="<?= site_url("index") ?>" method="GET">
								<input class="form-control" type="search" placeholder="Search" name="search" aria-label="Search">
							</form>
						</li>
						<?php
							//Array Session
							//$_SESSION['cart'][$sessID] = array ('quantity' => 1, 'price' => $prodPrice, 'prodName' => $prodName, 'size' => $size, 'handle' => $handle)
							//Jumlahkan total cart
							//@$total_cart = count($_SESSION['cart'])
						?>
						<li class="nav-item">
							<a class="nav-link no-bg" href="<?= site_url("cart") ?>"><i class="fa fa-shopping-bag"></i> <?= @$total_cart ?>Carts</a>
						</li>
						<li class="nav-item">
							<?php if(@$_SESSION['loggedin']) { ?>
							<a class="nav-link" href="<?= site_url("profile")?>"><i class="fa fa-user"></i> My Account</a>
							<?php } else { ?>
							<a class="nav-link" href="<?= site_url("login")?>"><i class="fa fa-user"></i> Sign In</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>