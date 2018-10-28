 <?php
    while($data= mysqli_fetch_array($mysql_query)){
?>
 <div class="content-wrapper mb-5">
     <div class="container">
        <div class="product-content-details p-5">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <h3>Edit Profile</h3>
            </div>
            <div class="row">
                <form action="<?php echo site_url("controllers/functions/c_do_settings.php")?>" method="post">
                    <input class="form-control" type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td><input class="form-control" type="text" name="nama" value="<?php echo $data['nama'] ?>"  required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" type="text" name="email" value="<?php echo $data['email'] ?>"  required></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <input class="form-control" type="text" name="username" value="<?php echo $data['username'] ?>"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input class="form-control" type="password" name="password" placeholder="Password"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input class="form-control" type="password" name="kpassword" placeholder="Konfirmasi Password"  required>
                                <?php
                                if (isset($_SESSION['kpassword massage'])) {
                                    echo $_SESSION['kpassword massage'];
                                    unset($_SESSION['kpassword massage']); 
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>
                                <input class="form-control" type="text" name="address" value="<?php echo $data['address'] ?>" placeholder="Address"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td>
                                <input class="form-control" type="text" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Phone Number" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Postal Code</td>
                            <td>
                                <input class="form-control" type="text" name="postal_code" value="<?php echo $data['postal_code'] ?>" placeholder="Postal Code" required>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-add-cart"><i class="fa fa-save"></i> Simpan</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
     </div>
 </div>
 <?php } ?>