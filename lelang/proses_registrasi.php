<?php 
    if($_POST){
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
            $insert=mysqli_query($conn,"insert into masyarakat (nama, username ,password ,tlp) value ('".$nama."','".$username."','".md5($password)."','".$tlp."')");
            if($insert){
                echo "<script>alert('Sukses Registrasi');location.href='registrasi.php';</script>";
            } else {
                echo "<script>alert('Gagal Registrasi');location.href='registrasi.php';</script>";
            }
        
        }
    }
?>