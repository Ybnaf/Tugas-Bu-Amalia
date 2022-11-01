<?php 
    if($_GET['id_masyarakat']){
        include "connect.php";
        $qry_hapus=mysqli_query($conn,"delete from masyarakat where id_masyarakat='".$_GET['id_masyarakat']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus masyarakat');location.href='tampil_masyarakat.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus masyarakat');location.href='tampil_masyarakat.php';</script>";
        }
    }
?>