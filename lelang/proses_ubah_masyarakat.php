<?php 
    if($_POST){
        $id_masyarakat=$_POST['id_masyarakat'];
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $tlp=$_POST['tlp'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='registrasi.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='registrasi.php';</script>";
        } else {
            include "connect.php";
            $update=mysqli_query($conn,"update masyarakat set nama='".$nama."', username = '".$username."' ,password='".md5($password)."' ,tlp ='".$tlp."' where id_masyarakat = '".$id_masyarakat."' ")or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses Ubah Masyarakat');location.href='registrasi.php';</script>";
            } else {
                echo "<script>alert('Gagal Ubah Masyarakat');location.href='registrasi.php';</script>";
            }
        
        }
    }
?>