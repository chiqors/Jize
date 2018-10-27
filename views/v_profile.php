<?php
    while($data= mysqli_fetch_array($mysql_query)){
?>
 <div class="content-wrapper mb-5">
     <div class="container">
        <div class="product-content-details p-5">
            <h3>Profile</h3>
            <table class="table table-striped">
                <tr>
                <td>ID</td>
                <td><?php echo $data['id'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $data['email'] ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?php echo $data['username'] ?></td>
                </tr>
                    <?php
                }
                    while($data2=mysqli_fetch_array($userdetails)){
                        ?>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $data2['address'] ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo $data2['phone'] ?></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><?php echo $data2['postal_code'] ?></td>
                </tr>
            </table>
            <a href="<?= site_url("settings") ?>" class="btn btn-add-cart">Pengaturan</a>
            <a href="<?= site_url("logout") ?>" class="btn link">Logout</a>
        </div>
     </div>
 </div>
 <?php } ?>
