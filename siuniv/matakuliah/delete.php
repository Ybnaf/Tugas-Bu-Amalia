<?php

include '../connect.php';

$kode = $_GET['kode'];
$query = "DELETE FROM matakuliah WHERE kode = '$kode'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil ubah data <br>";
}else{
    echo "Gagal ubah data <br>";
}echo "<a href = 'read.php'>Lihat Data</a>";

?>