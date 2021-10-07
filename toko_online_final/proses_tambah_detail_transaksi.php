<?php

include "koneksi.php";
if($_POST){

    $id_produk=$_POST['id_produk'];
    $id_transaksi=$_POST['id_transaksi'];
    $qty_produk=$_POST['quantity'];
    
    $qry_harga=mysqli_query($conn,"SELECT * FROM `produk` WHERE `id_produk` = '$id_produk'");
    $data_harga = mysqli_fetch_array($qry_harga);
    $harga = $data_harga['harga'];

    $subtotal = $qty_produk * $harga;
    
    if(empty($id_produk)){

        echo "<script>alert('ID produk tidak boleh kosong');location.href='tambah_detail_transaksi.php';</script>";


    } elseif(empty($id_transaksi)){

        echo "<script>alert('ID Transaksi boleh kosong');location.href='tambah_detail_transaksi.php';</script>";

    } elseif(empty($qty_produk)){

        echo "<script>alert('Quantity produk tidak boleh kosong');location.href='tambah_detail_transaksi.php';</script>";

    } else {

        $insert=mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_produk,qty,subtotal) value ('".$id_transaksi."','".$id_produk."','".$qty_produk."', '".$subtotal."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Berhasil menambahkan detail transaksi');location.href='tambah_detail_transaksi.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan detail transaksi');location.href='tambah_detail_transaksi.php';</script>";

        }

    }

}

?>