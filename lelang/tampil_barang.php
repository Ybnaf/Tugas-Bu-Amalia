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
    include "header.php";

?>


    <h3>Tampil barang</h3>
    <table class="table table-hover table-striped ">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TANGGAL DAFTAR</th>
                <th>HARGA AWAL</th>
                <th>DESKRIPSI</th>
                <th>FOTO</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
            $qry_barang=mysqli_query($conn,"select * from barang");
            $no=0;
            while($data_barang=mysqli_fetch_array($qry_barang)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_barang['nama_barang']?></td>
                <td><?=$data_barang['tgl_daftar']?></td>
                <td><?=$data_barang['harga_awal']?></td>
                <td><?=$data_barang['deskripsi']?></td>
                <td>
                    <img src="foto/<?=$data_barang['foto']?>">
                </td>
                <td>
                    <?php if($_SESSION['akses']!='no'){

                    ?>

                    <a href="ubah_barang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-success">Ubah</a>
                    |
                    <a href="hapus_barang.php?id_barang=<?=$data_barang['id_barang']?>"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                        class="btn btn-danger">Hapus</a>
                    <?php
                    }
                    
                    ?>
                    | <a href="lelang.php?id_barang=<?=$data_barang['id_barang']?>" class="btn btn-primary">Lelang</a>
                </td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>