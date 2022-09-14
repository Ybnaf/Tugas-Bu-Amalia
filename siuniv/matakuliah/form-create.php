<?php

include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Tambah Data Matakuliah</h1>
</head>
<body>
    
    <form action="create.php" method="POST" >
    <table>
        <tr>
            <td>Kode</td>
            <td>:</td>
            <td><input type="text" name = "kode" ></td>
        </tr>

        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name = "nama_matkul" ></td>
        </tr>

        <tr>
            <td>SKS</td>
            <td>:</td>
            <td><input type="text" name = "sks" ></td>
        </tr>
    
        <tr>
            <td> <label for="Semester">Semester</label> </td>
            <td>:</td>
            <td><input type="text" name = "semester" ></td>
        </tr>

        <tr>
            <td> <label for="Dosen Pengajar">Dosen Pengajar</label></td>
            <td>:</td>
            <td> <select name="id_dosen" id="nama_dosen">
                <option value="-" readonly>--Pilih salah satu-- </option>
                <?php
                while ($data = mysqli_fetch_assoc($result)){
                     ?>
                    <option value="<?php echo $data['id_dosen']; ?>">
                      <?php echo $data['nama_dosen']; ?>
                    </option>
                    <?php
                }

                 ?>
                 </select>
            </td>
           
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="Simpan"></input></td>
        </tr>
    </table>
    
    </form>

</body>
</html>