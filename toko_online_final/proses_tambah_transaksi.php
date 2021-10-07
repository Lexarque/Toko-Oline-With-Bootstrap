<?php

if($_POST){

    $id_pelanggan=$_POST['nama_pelanggan'];
    $id_petugas=$_POST['nama_petugas'];
    $tanggal_transaksi=$_POST['tgl_transaksi'];

    if(empty($tanggal_transaksi)){

        echo "<script>alert('tanggal transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into transaksi (id_pelanggan,id_petugas,tgl_transaksi) value ('".$id_pelanggan."','".$id_petugas."','".$tanggal_transaksi."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan data transaksi');location.href='tambah_transaksi.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan data transaksi');location.href='tambah_transaksi.php';</script>";

        }

    }

}

?>