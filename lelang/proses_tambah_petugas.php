<?php 
    if($_POST){
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
            $insert=mysqli_query($conn,"insert into petugas (nama_petugas, username ,password ,level) value ('".$nama_petugas."','".$username."','".md5($password)."','".$level."')");
            if($insert){
                echo "<script>alert('Sukses menambahkan Petugas');location.href='tambah_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan Petugas');location.href='tambah_petugas.php';</script>";
            }
            }else{
                echo "<script>alert('Kode Salah');location.href='tambah_petugas.php';</script>";
            }
            
        
        }
    }
?>