<?php

if($_POST){

    $nama_petugas=$_POST['nama_petugas'];
    $username_petugas=$_POST['username_petugas'];
    $password_petugas=$_POST['password_petugas'];
    $level_petugas=$_POST['level_petugas'];

    if(empty($nama_petugas)){

        echo "<script>alert('nama petugas tidak boleh kosong');location.href='tambah_petugas.php';</script>";


    } elseif(empty($username_petugas)){

        echo "<script>alert('username tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } elseif(empty($password_petugas)){

        echo "<script>alert('password tidak boleh kosong');location.href='tambah_petugas.php';</script>";

    } else {

        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into petugas (nama_petugas,username,password,level) value ('".$nama_petugas."','".$username_petugas."','".md5($password_petugas)."','".$level_petugas."')") or die(mysqli_error($conn));

        if($insert){

            echo "<script>alert('Sukses menambahkan petugas');location.href='tampil_petugas.php';</script>";

        } else {

            echo "<script>alert('Gagal menambahkan petugas');location.href='tambah_petugas.php';</script>";

        }

    }

}

?>