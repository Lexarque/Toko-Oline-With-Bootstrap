<?php 

session_start();

    if($_POST){

        include "koneksi.php";

       $qry_get_produk=mysqli_query($conn,"SELECT * FROM `produk` WHERE `id_produk` = '".$_GET['id_produk']."'");

        $dt_produk=mysqli_fetch_array($qry_get_produk);

        $_SESSION['cart'][]=array(

            'id_produk'=>$dt_produk['id_produk'],

            'nama_produk'=>$dt_produk['nama_produk'],

            'qty'=>$_POST['jumlah_produk'],

            'subtotal'=>$dt_produk['harga'] * $_POST['jumlah_produk']

        );

    }

    header('location: cart.php');

?>