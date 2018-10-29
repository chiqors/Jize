<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="<?= site_url('/home#features') ?>">features</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="<?= site_url('/') ?>">Products</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; JIZE <?= date('Y') ?>. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab icon-social-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab icon-social-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab icon-social-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<script src="<?= site_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= site_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('/assets/js/script.js') ?>" type="text/javascript"></script>
<?= isset($fscripts) ? $fscripts : '' ?>
</body>

</html>
