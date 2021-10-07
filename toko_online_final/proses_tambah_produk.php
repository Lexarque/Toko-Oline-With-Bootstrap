<?php

if($_POST){

    $nama_produk=$_POST['product_name'];

    $desc_produk=$_POST['product_desc'];

    $harga_produk=$_POST['product_price'];

    $foto_produk=$_POST['product_photo'];

    if(empty($nama_produk)){

        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";


    } elseif(empty($desc_produk)){

        echo "<script>alert('deskripsi produk tidak boleh kosong');location.href='tambah_produk.php';</script>";

    } elseif(empty($harga_produk)){

        echo "<script>alert('harga produk tidak boleh kosong');location.href='tambah_produk.php';</script>";

    }else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into produk (nama_produk, deskripsi, harga, foto_produk) value ('".$nama_produk."','".$desc_produk."','".$harga_produk."','".$foto_produk."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";

        }

    }

}

?>