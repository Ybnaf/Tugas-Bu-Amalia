<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>


<body>

    <?php

include "connect.php";
$qry_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
$dt_barang=mysqli_fetch_array($qry_barang);
session_start();

?>

    <h3>Lelang</h3>
    <table class="table table-hover table-striped ">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TANGGAL DAFTAR</th>
                <th>HARGA AWAL</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <form action="proses_lelang.php" method="post">
                <?php 
            include "connect.php";
            $qry_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
            $no=0;
            while($data_barang=mysqli_fetch_array($qry_barang)){
            $no++;?>
                <tr>
                    <td><?=$no?></td>
                    <td><?=$data_barang['nama_barang']?><br><br>Deskripsi :<br><?=$data_barang['deskripsi']?></td>
                    <td><?=$data_barang['tgl_daftar']?></td>
                    <td><?=$data_barang['harga_awal']?></td>

                    <td>
                        <img src="foto/<?=$data_barang['foto']?>">
                    </td>
                    <td>
                        Naik Harga:
                        <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang'] ?>">
                        <input name="harga_akhir" type="text" value="<?=$data_barang['harga_awal']?>"
                            class="form-control">

                    </td>


                </tr>
                <?php 
            }
            ?>

                <td> <label for="">Tanggal Daftar :</label>
                    <input type="date" name="tgl_lelang" value="" class="form-control">
                </td>

                <td> <label for="">Petugas : </label>
                    <select name="id_petugas" class="form-control">
                        <?php 
                            include "connect.php";
                             $qry_petugas=mysqli_query($conn,"select * from petugas where level like '%petugas'");
                             while($data_petugas=mysqli_fetch_array($qry_petugas)){
                            echo '<option value="'.$data_petugas['id_petugas'].'">'.$data_petugas['nama_petugas'].'</option>';    
                             }
                            ?>
                    </select>
                </td>

                <td> <label for="">Status: </label>
                    <input name="status" value="open" readonly>
                </td>

                <td>
                    <label for="">Id Masyarakat : </label>
                    <input name="id_masyarakat" value="<?=$_SESSION['id_masyarakat'] ?>" readonly>
                </td>


                <td><input type="submit" value="Simpan" class="btn btn-primary"></td>
            </form>

        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>