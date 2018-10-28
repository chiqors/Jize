<div class="container">
    <div class="text-center my-5">
        <h2 class="">Register</h2>
    </div>
    <div class="">
        <div class="mx-auto card rounded-0 my-5" style="max-width:400px;">
            <div class="card-body">
                <form action="<?php echo site_url("controllers/functions/c_do_register.php") ?>" method="post">
                    <?php
                        if (isset($_SESSION['kpassword_message'])) {
                    ?>
                    <div class="alert alert-warning">
                    <?php
                            echo $_SESSION['kpassword_message'];
                            unset($_SESSION['kpassword_message']);
                    ?>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" name="kpassword" required>
                    </div>
                    <button type="submit" class="btn btn-add-cart btn-block">Register</button>
                    <a href="<?= site_url('login') ?>" class="btn btn-link btn-block">Sudah punya akun?</a>
                </form>
            </div>
        </div>
    </div>
</div>
