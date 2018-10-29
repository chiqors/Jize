<div class="content-wrapper">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
			</ol>
		</nav>
		<?php if(!empty($_SESSION['createproduct_msg']) || !empty($_SESSION['updateproduct_msg']) || !empty($_SESSION['deleteproduct_msg']) || !empty($_SESSION['order_msg'])) { ?>
		<div class="row">
			<div class="col-md-12">
              	<div class="alert alert-info">
					<?php
						echo @$_SESSION['createproduct_msg'];
						echo @$_SESSION['updateproduct_msg'];
						echo @$_SESSION['deleteproduct_msg'];
						echo @$_SESSION['order_msg'];

						unset($_SESSION['createproduct_msg']);
						unset($_SESSION['updateproduct_msg']);
						unset($_SESSION['deleteproduct_msg']);
						unset($_SESSION['order_msg']);
					?>
              	</div>
			</div>
		</div>
		<?php } ?>
		<?php if(@$_SESSION['role'] == "admin") { ?>
		<div class="row">
			<div class="col-md-12">
				<a href="<?= site_url("product/create") ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Create Product</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12"></div>
		</div>
		<?php } ?>
		<div class="row product-contents">
			<div class="col-lg-<?= $mainColumn ?>">
				<div class="row">
					<?php while ($row = $data->fetch_object()) { ?>
					<div class="col-md-<?= $listColumn ?>">
						<div class="product-item">
							<?php if(@$_SESSION['role'] == "admin") { ?>
							<div class="product-item-tools">
								<a class="" href="<?= site_url("product/update?id=".$row->id) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a class="" href="<?= site_url("product/delete?id=".$row->id) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
							</div>
							<?php } ?>
							<div class="product-thumbnail">
								<a href="<?= site_url("product/detail?id=".$row->id)?>">
									<img src="<?= site_url($row->image_path) ?>" alt="">
								</a>
							</div>
							<div class="product-content text-center px-3 py-4">
								<a href="<?= site_url("product/detail?id=".$row->id)?>"><h3><?= ucfirst($row->title) ?></h3></a>
								<div class="price">
									<?php if(@$row->discount_price) { ?>
									<span class="discount text-orange d-block"><del>Rp. <?= currencyShort($row->price) ?></del></span>
									<span>Rp. <?= currencyShort($row->discount_price) ?></span>
									<?php } else { ?>
									<span>Rp. <?= currencyShort($row->price) ?></span>
									<?php } ?>
								</div>
								<div class="button-product mt-3">
									<a href="<?= site_url("product/detail?id=".$row->id)?>" class="btn btn-warning d-block">Lihat Produk</a>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="my-5">
					<ul class="pagination pagination-jize justify-content-center">
						<!-- Pagination System -->
						<?php for ($i=1; $i<=$pages ; $i++){ ?>
						<li class="page-item <?= ($_GET[page]==$i||!isset($_GET[page])) ? 'active' : ''?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<?php if(@$_SESSION['loggedin']) { ?>
			<div class="col-lg-3">
				<div class="sidebar with-bg bg-blue">
					<div class="sidebar-head pb-4">
						<div class="media">
							<img src="assets/img/avatar.png" width="50px" alt="" class="thumbnail">
							<div class="media-body">
								<h4><?= $_SESSION['nama'] ?></h4>
								<span class="d-block">Total Orders</span>
								<strong><span class="text-orange"><?= totalOrders() ?></span></strong>
							</div>
						</div>
					</div>
					<div class="sidebar-body">
						<ul>
							<li class="header"><strong>NAVIGATION</strong></li>
							<?php if(@$_SESSION['role'] == "admin") { ?>
							<li><a href="<?= site_url("dashboard") ?>">Admin</a></li>
							<?php } ?>
							<li><a href="<?= site_url("profile") ?>">Profile</a></li>
							<li><a href="<?= site_url("orders") ?>">Orders</a></li>
							<li><a href="<?= site_url("settings") ?>">Settings</a></li>
							<li><a href="<?= site_url("logout") ?>">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
