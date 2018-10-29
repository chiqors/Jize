<div class="content-wrapper mb-5">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Orders</li>
			</ol>
		</nav>
		<h1>Orders</h1>
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
						<a href="<?= site_url('/order/detail?id='.$row->id) ?>" class="btn btn-primary btn-sm">Detail</a>
						<?php if (!$row->is_expired && ($row->status == 'unpaid' || $row->status == 'verification')): ?>
							<a href="<?= site_url('/order/payment?id='.$row->id) ?>" class="btn btn-success btn-sm">Bayar</a>
						<?php endif;
						if($row->status == "sending"):
						?>
							<a href="<?= site_url('/orders?received='.$row->id) ?>" class="btn btn-info btn-sm">Terima Barang</a>
						<?php endif; ?>
					</td>
				</tr>
				<?php endwhile; ?>
				<?php if (mysqli_num_rows($orders) < 1): ?>
				<tr>
					<td align="center" colspan="6">Belum ada order.</td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>
