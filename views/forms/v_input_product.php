<h3>Input Produk</h3>
    <!-- Input Gambar Belum -->
    <form action="<?php echo site_url("controllers/functions/c_do_product.php") ?>" method="post">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_product" placeholder="Nama Product" required></td>
            </tr>
            <tr>
                <td>Deskripsi Produk</td>
                <td><textarea name="deskripsi_product" id="" cols="30" rows="5" placeholder="Deskripsi Product" required></textarea> </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" placeholder="Harga" required></td>
            </tr>
                <td>Diskon</td>
                <td><input type="text" name="diskon" placeholder="Diskon"></td>
            <tr><td><input type="submit"></td></tr>
        </table>
    </form>