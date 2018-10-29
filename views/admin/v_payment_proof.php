<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="container">
        <div class="product-content-details p-5">
            <h3>Konfirmasi Bukti Pembayaran</h3>
            <form action="<?= site_url('dashboard/order/payment?id='.$order->id) ?>" method="POST">
                <input type="hidden" name="order_id" value="<?= $order->id ?>">
                <table class="table table-striped">
                    <tr>
                        <td width="300">Order ID</td>
                        <td>#
                            <?php echo $order->id ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Order</td>
                        <td>
                            <?php echo $order->order_date ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jatuh Tempo</td>
                        <td>
                            <?php echo $order->order_expire ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>
                            <?php echo $order->payment_method ?>
                        </td>
                    </tr>
                    <?php if ($order->payment_proof): ?>
                    <tr>
                        <td>Bukti Pembayaran</td>
                        <td><a href="<?= site_url('public/payment_proof/'.$order->payment_proof) ?>" data-fancybox>Lihat Bukti Pembayaran</a></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td>Tracking Number</td>
                        <td><input type="text" name="tracking_number" class="form-control"></td>
                    </tr>
                </table>
                <a href="<?= site_url('dashboard/orders') ?>" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" name="toverify" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Verify</button>
            </form>
        </div>
    </div>
</main>
