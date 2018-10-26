<div class="content-wrapper mb-5">
	<div class="container">
		<div class="product-content-details mb-5">
			<div class="row">
				<div class="col-md-6">
					<div class="product-thumbnail owl-carousel">
						<?php while ($row = $productImages->fetch_object()): ?>
						<a href="<?= site_url($row->image_path) ?>" data-fancybox="gallery">
							<img src="<?= site_url($row->image_path) ?>" alt="">
						</a>
						<?php endwhile ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="product-content">
						<h2 class="title pb-2"><?= ucfirst($product->title) ?></h2>
						<div class="price big">
							<?php if(@$product->discount_price) { ?>
							<span class="discount text-orange"><del><?= rupiah($product->price) ?></del></span>
							<span><?= rupiah($product->discount_price) ?></span>
							<?php } else { ?>
							<span><?= rupiah($product->price) ?></span>
							<?php } ?>
						</div>
						<div class="border-bottom my-4"></div>
						<?php if(@$_SESSION['loggedin']) { ?>
						<div class="product-cart">
							<form action="<?= $url ?>">
							<span class="d-block">Quantity</span>
							<input type="number" min="1" name="quant" value="1">
							<input type="hidden" name="id" value="<?= $product->id ?>">
							<button class="btn btn-add-cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add to Cart</button>
							</form>
						</div>
						<?php } ?>
						<div class="product-description">
							<p><?= $product->description ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="row">
				<?php while($row = $featuredProducts->fetch_object()): ?>
				<div class="col-md-3">
					<div class="product-item">
						<div class="product-thumbnail">
							<a href="<?= site_url("product/detail?id=".$row->id)?>">
								<img src="<?= site_url($row->image_path) ?>" alt="">
							</a>
						</div>
						<div class="product-content text-center px-3 py-4">
							<a href="#"><h3><?= ucfirst($row->title) ?></h3></a>
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
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>