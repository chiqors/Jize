<div class="content-wrapper mb-5">
    <div class="container">
        <div class="product-content-details p-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url("") ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Product</li>
                </ol>
            </nav>
        <h3><?= $form ?></h3>
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <form action="<?= site_url($url) ?>" method="post" enctype = "multipart/form-data">
                                <div class="form-group">
                                    <input type="text" value="<?= isset($product) ? $product->title : '' ?>" name="nama_product" placeholder="Nama Product" value="<?= @$title_product ?>" class="form-control" required>
                                </div>
                            
                                <div class="form-group">
                                    <textarea name="deskripsi_product" id="" cols="30" rows="5" placeholder="Deskripsi Product" value="<?= @$description ?>" class="form-control" required><?= isset($product) ? $product->description : '' ?></textarea>
                                </div>
                           
                                <div class="form-group">
                                    <input type="text" value="<?= isset($product) ? $product->price : '' ?>" name="harga" placeholder="Harga" value="<?= @$price ?>" class="form-control" required>
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" value="<?= isset($product) ? $product->discount : '' ?>" name="diskon" placeholder="Diskon" class="form-control" value="<?= @$discount ?>">
                                </div>
                           <input type="file" class="w-100" multiple name="gambar[]">
                            <span class="d-block my-3">*Ctrl+Klik Gambar Untuk Multiple File*</span>
                        <button name="submit" class="btn btn-add-cart">
                            submit
                        </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>