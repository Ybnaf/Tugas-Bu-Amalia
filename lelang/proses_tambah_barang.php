<?php

if($_POST){
    $nama_barang=$_POST['nama_barang'];
    $tgl_daftar=$_POST['tgl_daftar'];
    $harga_awal=$_POST['harga_awal'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
}if(empty($nama_barang)){
    echo "<script>alert('Nama Barang tidak boleh kosong');location.href='tambah_barang.php';</script>";
    
    }elseif(empty($tgl_daftar)){
        echo "<script>alert('Tanggal Daftar tidak boleh kosong');location.href='tambah_barang.php';</script>";
    }elseif(empty($harga_awal)){
        echo "<script>alert('Harga Awal tidak boleh kosong');location.href='tambah_barang.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into barang (nama_barang, tgl_daftar, harga_awal, deskripsi, foto) value ('".$nama_barang."','".$tgl_daftar."','".$harga_awal."','".$deskripsi."','".$foto."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan barang');location.href='tambah_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan barang');location.href='tambah_barang.php';</script>";
        }
    }


?>