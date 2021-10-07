<?php

if($_POST){

    $nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat_pelanggan=$_POST['alamat_pelanggan'];
    $telp_pelanggan=$_POST['telp_pelanggan'];

    if(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";


    } elseif(empty($alamat_pelanggan)){

        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp_pelanggan)){

        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into pelanggan (nama,alamat,telp) value ('".$nama_pelanggan."', '".$alamat_pelanggan."', '".$telp_pelanggan."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";

        }

    }

}

?>