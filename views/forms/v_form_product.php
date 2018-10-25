<h3><?= $form ?></h3>
<!-- Input Gambar Belum -->
<form action="<?= site_url($url) ?>" method="post" enctype = "multipart/form-data">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama_product" placeholder="Nama Product" value="<?= @$title_product ?>" required></td>
        </tr>
        <tr>
            <td>Deskripsi Produk</td>
            <td><textarea name="deskripsi_product" id="" cols="30" rows="5" placeholder="Deskripsi Product" value="<?= @$description ?>" required></textarea> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" placeholder="Harga" value="<?= @$price ?>" required></td>
        </tr>
            <td>Diskon</td>
            <td><input type="text" name="diskon" placeholder="Diskon" value="<?= @$discount ?>"></td>
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