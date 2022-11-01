<?php 
    if($_POST){
        $id_petugas=$_POST['id_petugas'];
        $nama_petugas=$_POST['nama_petugas'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $level=$_POST['level'];
        $kode=$_POST['kode'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        } elseif(empty($level)){
            echo "<script>alert('Level tidak boleh kosong');location.href='tambah_petugas.php';</script>";
        }else {
            if($kode == 12345678){
                include "connect.php";
            $update=mysqli_query($conn,"update petugas set nama_petugas='".$nama_petugas."', username = '".$username."' ,password='".md5($password)."' ,level ='".$level."' where id_petugas = '".$id_petugas."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses ubah Petugas');location.href='tambah_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal ubah Petugas');location.href='tambah_petugas.php';</script>";
            }
            }else{
                echo "<script>alert('Kode Salah');location.href='tambah_petugas.php';</script>";
            }
            
        
        }
    }
?>