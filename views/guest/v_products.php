<div class="content-wrapper">
	<div class="container">
		<div class="row product-contents">
			<div class="col-lg-<?= $mainColumn ?>">
				<div class="row">
					<?php for($i=1;$i<=$perPage;$i++): ?>
					<div class="col-md-<?= $listColumn ?>">
						<div class="product-item">
							<div class="product-thumbnail">
								<img src="<?= site_url('assets/img/tas.png') ?>" alt="">
							</div>
							<div class="product-content text-center px-3 py-4">
								<a href="#"><h3>ROG RANGER BACKPACK</h3></a>
								<div class="price">
									<span class="discount text-orange d-block"><del>Rp. 500rb</del></span>
									<span>Rp. 300rb</span>
								</div>
								<div class="button-product mt-3">
									<a href="#" class="btn btn-warning d-block">Lihat Produk</a>
								</div>
							</div>
						</div>
					</div>
					<?php endfor; ?>
				</div>
				<div class="my-5">
					<ul class="pagination pagination-jize justify-content-center">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item active"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
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
								<strong><span class="text-orange">0</span></strong>
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