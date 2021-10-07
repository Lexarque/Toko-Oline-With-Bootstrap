<?php

include "koneksi.php";

if($_POST){

    $id_pelanggan=$_POST['id_pelanggan'];

    $nama_pelanggan=$_POST['nama_pelanggan'];

    $alamat=$_POST['alamat'];

    $no_hp=$_POST['noHp_pelanggan'];
    
    if(empty($nama_pelanggan)){

        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";


    } elseif(empty($alamat)){

        echo "<script>alert('alamat tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";


    }elseif(empty($no_hp)){

        echo "<script>alert('Nomer Hp tidak boleh kosong');location.href='ubah_pelanggan.php';</script>";

    } else {

            $update=mysqli_query($conn,"update pelanggan set nama='".$nama_pelanggan."',alamat='".$alamat."',telp='".$no_hp."' where id_pelanggan='".$id_pelanggan."'") or die(mysqli_error($conn));

            if($update){

                echo "<script>alert('Sukses update pelanggan');location.href='tampil_pelanggan.php';</script>";

            } else {

                echo "<script>alert('Gagal update pelanggan');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";

            }

        }

    }

?>