<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="container">
        <div class="product-content-details p-5">
            <div class="row">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= site_url("dashboard") ?>">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="<?= site_url("dashboard/orders") ?>">Orders</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <?php if(!empty($_SESSION['order_msg'])) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <?php
                            echo @$_SESSION['order_msg'];
                            unset($_SESSION['order_msg']);
                        ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <h3>Order Detail</h3>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <tr>
                        <td>Order ID</td>
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
                    <tr>
                        <td>Status</td>
                        <td>
                            <?= $order->status ?>
                        </td>
                    </tr>
                    <?php if ($order->tracking_number): ?>
                    <tr>
                        <td>Tracking Number</td>
                        <td>
                            <?= $order->tracking_number ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php if ($order->payment_proof) { ?>
                    <tr>
                        <td>Bukti Pembayaran</td>
                        <td><a href="<?= site_url('public/payment_proof/'.$order->payment_proof) ?>" data-fancybox>Lihat Bukti Pembayaran</a></td>
                    </tr>
                    <?php } else { ?>
                    <tr>
                        <td>Bukti Pembayaran</td>
                        <td>Order ini belum menyisipkan bukti pembayaran <a class="btn btn-warning" href="<?= site_url('public/payment_proof/'.$order->payment_proof) ?>" data-fancybox>Sisipkan Bukti Pembayaran</a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <a href="<?= site_url('dashboard/orders') ?>" class="btn btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i> Kembali</a>
            <a href="<?= site_url('invoices?id='.$order->id) ?>" target="_blank" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> See Invoice</a>
        </div>
    </div>
</main>