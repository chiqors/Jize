 <div class="content-wrapper mb-5">
     <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="product-content-details p-5">
            <h3>Profile</h3>
            <table class="table table-striped">
                <tr>
                <td>ID</td>
                <td><?php echo $userData['id'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><?php echo $userData['nama'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $userData['email'] ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?php echo $userData['username'] ?></td>
                </tr>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><?php echo $userData['address'] ?></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><?php echo $userData['phone'] ?></td>
                </tr>
                <tr>
                    <td>Postal Code</td>
                    <td><?php echo $userData['postal_code'] ?></td>
                </tr>
            </table>
            <a href="<?= site_url("settings") ?>" class="btn btn-add-cart">Pengaturan</a>
            <a href="<?= site_url("logout") ?>" class="btn link">Logout</a>
        </div>
     </div>
 </div>
