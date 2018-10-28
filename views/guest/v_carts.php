<div class="content-wrapper mb-5">
	<div class="container">
		<div class="row">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Carts</li>
			</ol>
		</nav>
		</div>
		<div class="row">
			<h1>Carts</h1>
		</div>
		<div class="row">
			<form action="" method="post" style="width: 100%">
			<table class="table table-striped bg-white table-cart">
				<tr>
					<th width="50px">#</th>
					<th width="100px">Image</th>
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
				<?php
				$price = 0;
				$totalPrice = 0;
				$totalCart = 0;

				if($carts):

				while ($row = $carts->fetch_object()):

				$price = $row->discount_price ? $row->discount_price : $row->price;
				$qty = $_SESSION['cart'][$row->id]['quantity'];
				$total = $price*$qty;
				$totalPrice = 0;
				$totalPrice += $total;
				$totalCart += $totalPrice;

				?>
				<tr>
					<td class="align-middle"><a href="<?= site_url('/carts?deleteCart='.$row->id) ?>" class="btn btn-link"><i class="fa fa-fw fa-close"></i></a></td>
					<td><img class="thumbnail rounded" src="<?= site_url($row->image_path) ?>" alt="" width="80"></td>
					<td width="30%" align="center" class="align-middle"><?= $row->title ?></td>
					<td align="center" class="align-middle"><?= rupiah($price) ?></td>
					<td width="10%" align="center"  class="align-middle">
						<div class="nice-number">
							<input type="number" min="0" name="qty[<?= $row->id ?>]" class="form-control" value="<?= $qty ?>">
						</div>
					</td>
					<td align="center"  class="align-middle"><?= rupiah($total) ?></td>
				</tr>
				<?php
				endwhile;
				else:
				?>
				<tr>
					<td class="align-middle" colspan="6" align="center">Tidak ada item cart</td>
				</tr>
				<?php
				endif;
				?>
				<tr>
					<td colspan="3">
						<h3 class="total-cart align-middle">Total <span class="text-orange"><?= rupiah($totalCart) ?></span></h3>
					</td>
					<td colspan="3" align="right">
						<button class="btn btn-add-cart" name="update"><i class="fa fa-refresh fa-fw"></i> Update Cart</button>
						<a href="<?= site_url('checkout') ?>" class="btn btn-add-cart"><i class="fa fa-cart-arrow-down fa-fw"></i> Checkout</a>
					</td>
				</tr>
			</table>
			</form>
		</div>
		<div class="row">
			<div class="col-md-6 push-md-6 no-padding">
				<h4 class="heading">Order Total Details</h4>
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>
							<th>Cart Subtotal</th>
							<td><span class="amount"><?= rupiah($totalCart) ?></span></td>
						</tr>
						<tr>
							<th>Shipping and Handling</th>
							<td>Free Shipping</td>
						</tr>
						<tr>
							<th>Order Total</th>
							<td><strong><span class="amount"><?= rupiah($totalCart) ?></span></strong> </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
