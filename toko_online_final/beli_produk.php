<?php 

    include "header.php";

    include "koneksi.php";

    $qry_detail_produk=mysqli_query($conn,"SELECT * FROM `produk` WHERE `id_produk` = '".$_GET['id_produk']."'");

    $dt_produk=mysqli_fetch_array($qry_detail_produk);

    $harga=number_format($dt_produk['harga'], 2);

?>

<h2>Checkout</h2>

<div class="row">

    <div class="col-md-4">

        <img src="Photos/<?=$dt_produk['foto_produk']?>" class="card-img-top">

    </div>

    <div class="col-md-8">

        <form action="confirm.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">

            <table class="table table-hover table-striped">

                <thead>

                    <tr>

                        <td>Nama produk</td><td><?=$dt_produk['nama_produk']?></td>

                    </tr>

                    <tr>

                        <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>

                    </tr>

                    <tr>

                        <td>Harga</td><td><?php echo("Rp. ".$harga)?></td>

                    </tr>

                    <tr>

                        <td>Jumlah Produk</td><td><input type="number" name="jumlah_produk" value="0" min="0"></td>

                    </tr>

                    <tr>

                        <td colspan="2"><input class="btn btn-success" type="submit" value="CONFIRM"></td>

                    </tr>

                </thead>

            </table>

        </form>

    </div>

</div>

<?php 

    include "footer.php";

?>

