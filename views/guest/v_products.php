<div class="content-wrapper">
	<div class="container">
		<div class="row product-contents">
			<div class="col-lg-<?= $mainColumn ?>">
				<?php if(@$_SESSION['role'] == "admin") { ?>
				<div class="row">
					<a href="<?= site_url("product/create") ?>" class="btn btn-primary btn-md"><i class="fa fa-plus" aria-hidden="true"></i> Create Product</a>
				</div>
				<?php } ?>
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
								<img src="<?= site_url($row->image_path) ?>" alt="">
							</div>
							<div class="product-content text-center px-3 py-4">
								<a href="<?= site_url("product/detail?id=".$row->id)?>"><h3><?= $row->title ?></h3></a>
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
						<li class="page-item"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
						<?php } ?>
						<!-- Testing -->
						<li class="page-item"><a class="page-link" href="?page=100">100 Test</a></li>
						<li class="page-item active"><a class="page-link" href="?page=100">100 Test</a></li>
						<li class="page-item"><a class="page-link" href="?page=100">100 Test</a></li>
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
								<strong><span class="text-orange"><?= @$total_cart ?>0</span></strong>
							</div>
						</div>
					</div>
					<div class="sidebar-body">
						<ul>
							<li class="header"><strong>NAVIGATION</strong></li>
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