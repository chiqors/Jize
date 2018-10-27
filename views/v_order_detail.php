<div class="content-wrapper mb-5">
    <div class="container">
       <div class="product-content-details p-5">
           <h3>Order Detail</h3>
           <table class="table table-striped">
               <tr>
                   <td>Order ID</td>
                   <td>#<?php echo $order->id ?></td>
               </tr>
               <tr>
                   <td>Tanggal Order</td>
                   <td><?php echo $order->order_date ?></td>
               </tr>
               <tr>
                   <td>Jatuh Tempo</td>
                   <td><?php echo $order->order_expire ?></td>
               </tr>
               <tr>
                   <td>Metode Pembayaran</td>
                   <td><?php echo $order->payment_method ?></td>
               </tr>
               <tr>
                   <td>Status</td>
                   <td><?= $order->status ?></td>
               </tr>
               <?php if ($order->tracking_number): ?>
                   <tr>
                       <td>Tracking Number</td>
                       <td><?= $order->tracking_number ?></td>
                   </tr>
               <?php endif; ?>
           </table>
           <a href="<?= site_url('invoices?id='.$order->id) ?>" target="_blank" class="btn btn-add-cart">Invoice</a>
           <a href="<?= site_url('orders') ?>" class="btn btn-link">Kembali</a>
       </div>
    </div>
</div>
