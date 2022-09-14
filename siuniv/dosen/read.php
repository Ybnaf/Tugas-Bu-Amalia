<?php

session_start();

if(!(isset($_SESSION['user']))){
    header("location: ../login/form-login.php");
}

include '../connect.php';

$query = "SELECT * FROM dosen";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
     td, tr, th{
        border: 1px solid black;
       
        padding: 5px;
        text-align: center;
    }
    #table1{
        border-collapse: collapse;
    }
    #table2{
        border: none;
    }
   </style>
</head>
<body>
    
<table id="table1" >
    <h2>Data Dosen</h2>
<tr>
    <th>No.</th>
    <th>Nama Dosen</th>
    <th>Telepon</th>
    <th colspan = "2">Aksi</th>
</tr>
<?php

    if($num >0){
    $no=1;
    while($data =mysqli_fetch_assoc($result)){
    echo "<tr>";
        echo "<td>" . $no . "</td>";
    echo "<td>" . $data['nama_dosen'] . "</td>";
    echo "<td>" . $data['telp'] . "</td>";
    echo "<td> <a href='form-update.php?id_dosen=". $data['id_dosen']."'>Edit  |</a>";
    echo " <a href='delete.php?id_dosen=" . $data['id_dosen'] . "'onclick='return confirm(\"Apakah Anda Yakin ingin menghapus data?\")'>Hapus</a> ";
    echo "</tr>";
    $no++;

}


}else{
    echo "<td colspan='3'> Tidak ada data</td> ";
}
?>

</table>
<table id="table2">
   <tr>
    
    <td>  <a href="../login/logout.php"> Logout </a></td> 
</tr>
</table>


</body>
</html>