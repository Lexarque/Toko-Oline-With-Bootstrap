<?php 
    
    include "header.php";

?>

<h2>Histori Pembelian Produk</h2>

<table class="table table-hover table-striped">

<thead>
        
    <th>NO</th>
    <th>Tanggal Transaksi</th>
    <th>Nama Produk</th>
    <th>Total</th>
    <th>Status</th>
    
</thead>

    <tbody>
        
        <?php 
        
        include "koneksi.php";

        $qry_histori=mysqli_query($conn,"select * from transaksi where id_pelanggan='".$_SESSION['id_pelanggan']."' order by id_transaksi desc");
        
        $no=0;

        while($dt_histori=mysqli_fetch_array($qry_histori)){
            
            $no++;

            $produk_dibeli="<ol>";
            
            $total=0;
            
            $qry_produk=mysqli_query($conn,"select * from  detail_transaksi join produk on produk.id_produk=detail_transaksi.id_produk where id_transaksi = '".$dt_histori['id_transaksi']."'");

            while($dt_produk=mysqli_fetch_array($qry_produk)){
                
                $produk_dibeli.="<li>".$dt_produk['nama_produk']."</li>";
                
                $total += $dt_produk['subtotal'];
            }

            $produk_dibeli.="</ol>";
            $total_formatted = number_format($total, 2);
        ?>
            <tr>
                
            <td><?=$no?></td>
            <td><?=$dt_histori['tgl_transaksi']?></td>
            <td><?=$produk_dibeli?></td>
            <td><?php echo("Rp. ".$total_formatted); ?></td>
            <td><?php echo "<label class='alert alert-danger'>Diproses</label>"?></td>
            
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>

<?php 
    include "footer.php";
?>