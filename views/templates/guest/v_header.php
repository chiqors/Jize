<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>JIZE</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Montserrat:400,500,600,700|Raleway:400,500,600" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/style.css">
		<?= isset($hscripts) ? $hscripts : '' ?>
	</head>
	<body>
		<nav class="navbar navbar-jize navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="assets/img/logo.svg">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<form class="form-search position-relative mr-2">
								<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							</form>
						</li>
						<li class="nav-item">
							<a class="nav-link no-bg" href="#"><i class="fa fa-shopping-bag"></i> Cart</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-user"></i> My Account</a>
						</li>
					</ul>
					
				</div>
			</div>
		</nav>