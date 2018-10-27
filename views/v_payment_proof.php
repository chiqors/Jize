<div class="content-wrapper mb-5">
    <div class="container">
       <div class="product-content-details p-5">
           <h3>Unggah Bukti Pembayaran</h3>
           <form action="<?= site_url('orders/payment?id='.$order->id) ?>" method="post" enctype="multipart/form-data">
               <input type="hidden" name="order_id" value="<?= $order->id ?>">
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
                   <td><input type="file" name="payment_proof" class="w-100"></td>
                   <td><button class="btn btn-add-cart">Unggah</button></td>
               </tr>
               <?php if ($order->payment_proof): ?>
               <tr>
                   <td>Bukti Pembayaran</td>
                   <td><a href="<?= site_url('public/payment_proof/'.$order->payment_proof) ?>" data-fancybox>Lihat Bukti Pembayaran</a></td>
               </tr>
               <?php endif; ?>
           </table>
           <a href="<?= site_url('orders') ?>" class="btn btn-add-cart">Kembali</a>
           </form>
       </div>
    </div>
</div>
