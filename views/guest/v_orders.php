<div class="content-wrapper mb-5">
	<div class="container">
		<div class="row">
			<h1>Orders</h1>
		</div>
		<div class="row">
			<table class="table table-bordered bg-white table-cart">
				<thead class="thead-dark">
					<tr>
						<th width="150">Order Number</th>
						<th>Total Price</th>
						<th>Order Date</th>
						<th>Expired Order</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php while ($row = $orders->fetch_object()): ?>
					<tr>
						<td align="center" class="align-middle">#<?= $row->id ?></td>
						<td align="center" class="align-middle"><?= rupiah($row->total_price) ?></td>
						<td align="center" class="align-middle"><?= $row->order_date ?></td>
						<td align="center" class="align-middle"><?= $row->order_expire ?></td>
						<td align="center" class="align-middle"><?= $row->status ?></td>
						<td class="align-middle">
							<a href="<?= site_url('/orders/detail?id='.$row->id) ?>" class="btn btn-primary btn-sm">Detail</a>
							<?php if (!$row->is_expired): ?>
								<a href="<?= site_url('/orders/payment?id='.$row->id) ?>" class="btn btn-success btn-sm">Bayar</a>
							<?php endif;
							if($row->status == "sending"):
							?>
								<a href="<?= site_url('/orders?received='.$row->id) ?>" class="btn btn-warning btn-sm">Terima Barang</a>
							<?php endif; ?>
						</td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
