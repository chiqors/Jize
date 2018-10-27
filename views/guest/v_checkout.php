<div class="content-wrapper mb-5">
	<div class="container">
		<div class="row">
		</div>
		<div class="row">
			<div class="col-md-8">
				<h1>Checkout</h1>
			<table class="table table-striped bg-white table-cart">
				<tr>
					<td>Name</td>
					<td><?= $user->nama ?></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><?= $user->username ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?= $user->email ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?= $user->address ?></td>
				</tr>
				<tr>
					<td>No Telp</td>
					<td><?= $user->phone ?></td>
				</tr>
				<tr>
					<td>Kode POS</td>
					<td><?= $user->postal_code ?></td>
				</tr>
			</table>
			</div>

			<div class="col-md-4">
				<h2>Your Cart</h2>
				<form target="" method="post">
					<ul class="list-group mb-3 z-depth-1">
						<?php

						$total = 0;
						while ($row = $carts->fetch_object()):

						$quantity = $_SESSION['cart'][$row->id]['quantity'];
						$totalItemPrice = ($row->discount_price) ? $row->discount_price : $row->price;
						$totalItemPrice *= $quantity;
						$total += $totalItemPrice;

						?>
						<li class="list-group-item d-flex justify-content-between lh-condensed">
							<div>
								<h6 class="my-0"><?= $row->title ?></h6>
								<small class="text-muted">X <?= $quantity ?></small>
							</div>
							<span class="text-muted">Rp. <?= currencyShort($totalItemPrice) ?></span>
						</li>
						<?php endwhile; ?>
						<li class="list-group-item d-flex justify-content-between">
							<h6 class="my-0">Total</h6>
							<strong>Rp. <?= currencyShort($total) ?></strong>
						</li>
						<li class="list-group-item">
							<h6 class="">Payment Method</h6>
							<div class="form-group">
								<select name="payment_method" class="form-control">
									<option selected>Pilih</option>
									<option value="bank">Bank Transfer</option>
									<option value="cc">Credit Card</option>
								</select>
							</div>
						</li>
					</ul>
					<ul  class="list-group mb-3 z-depth-1">
						<div class="input-group">
							<button class="btn btn-add-cart btn-block">Continue To Cart</button>
						</div>
					</ul>
				</form>
			</div>
		</div>
	</div>
</div>
