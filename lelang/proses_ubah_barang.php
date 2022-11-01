<?php

if($_POST){
    $id_barang=$_POST['id_barang'];
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
        $update=mysqli_query($conn,"update barang set nama_barang='".$nama_barang."', tgl_daftar = '".$tgl_daftar."' ,harga_awal='".$harga_awal."' ,deskripsi ='".$deskripsi."', foto = '".$foto."' where id_barang = '".$id_barang."' ")or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses Ubah barang');location.href='tambah_barang.php';</script>";
        } else {
            echo "<script>alert('Gagal Ubah barang');location.href='tambah_barang.php';</script>";
        }
    }


?>