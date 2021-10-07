<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>

    <h3>Tampil detail_transaki</h3>

    <table class="table table-hover table-striped">

        <thead>

            <tr>

                <th>NO</th>
                <th>NAMA PRODUK</th>
                <th>TANGGAL TRANSAKSI</th>
                <th>QUANTITY</th>
                <th>SUBTOTAL</th>
                <th>AKSI</th>

            </tr>

        </thead>

        <tbody>

            <?php 

            include "koneksi.php";

            $qry_detail_transaki=mysqli_query($conn,"SELECT * FROM detail_transaksi");

            $no=0;

            while($data_detail_transaki=mysqli_fetch_array($qry_detail_transaki)){

            $no++;?>

        <tr>              
                
            <td><?=$no?></td>
            <td><?=$data_detail_transaki['id_transaksi']?></td> 
            <td>
                <a href="ubah_detail_transaki.php?id_detail_transaki=<?=$data_detail_transaki['id_detail_transaki']?>" class="btn btn-success">Ubah</a> 
                | <a href="hapus_detail_transaki.php?id_detail_transaki=<?=$data_detail_transaki['id_detail_transaki']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
            </td>

        </tr>

            <?php 

            }

            ?>

        </tbody>

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>