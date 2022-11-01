<?php

if($_POST){
 
    $id_barang=$_POST['id_barang'];
    $tgl_lelang=$_POST['tgl_lelang'];
    $harga_akhir=$_POST['harga_akhir'];
    $id_petugas=$_POST['id_petugas'];
    $status=$_POST['status'];
    $id_masyarakat=$_POST['id_masyarakat'];

    if(empty($tgl_lelang)){
        
        echo "<script>alert('Tanggal Lelang tidak boleh kosong');location.href='lelang.php';</script>";
    }else{
        include "connect.php";

      
         $insert=mysqli_query($conn,"insert into lelang_php (id_barang, tgl_lelang, harga_akhir, id_petugas, status, id_masyarakat) value ('".$id_barang."','".$tgl_lelang."','".$harga_akhir."','".$id_petugas."','".$status."','".$id_masyarakat."') ");
         if($insert){

             echo "<script>alert('Sukses menambahkan Lelang');location.href='tampil_barang.php';</script>";
         } else {

             echo "<script>alert('Gagal menambahkan Lelang');location.href='tampil_barang.php';</script>";
         }
    }
}

?>