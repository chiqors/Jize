<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Product</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <h3><?= $form ?></h3>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <form action="<?= site_url($url) ?>" method="post" enctype = "multipart/form-data">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Nama Produk</td>
                            <td><input type="text" value="<?= isset($product) ? $product->title : '' ?>" name="nama_product" placeholder="Nama Product" value="<?= @$title_product ?>" required></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Produk</td>
                            <td><textarea name="deskripsi_product" id="" cols="30" rows="5" placeholder="Deskripsi Product" value="<?= @$description ?>" required><?= isset($product) ? $product->description : '' ?></textarea> </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input type="text" value="<?= isset($product) ? $product->price : '' ?>" name="harga" placeholder="Harga" value="<?= @$price ?>" required></td>
                        </tr>
                            <td>Diskon</td>
                            <td><input type="text" value="<?= isset($product) ? $product->discount : '' ?>" name="diskon" placeholder="Diskon" value="<?= @$discount ?>"></td>
                        <tr>
                            <td>Gambar </td>
                            <td><input type="file" multiple name="gambar[]"></td>
                        </tr>
                        <tr>
                            <td>*Ctrl+Klik Gambar Untuk Multiple File*</td>
                        </tr>
                        <tr><td><input type="submit" name ="submit"></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>