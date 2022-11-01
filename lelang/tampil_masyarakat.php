<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>


<body>

    <?php 
    include "header.php";

?>


    <h3>Tampil Masyarakat</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>USERNAME</th>
                <th>TELEPON</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
            $qry_msy=mysqli_query($conn,"select * from masyarakat");
            $no=0;
            while($data_msy=mysqli_fetch_array($qry_msy)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_msy['nama']?></td>
                <td><?=$data_msy['username']?></td>
                <td><?=$data_msy['tlp']?></td>
                <td><a href="ubah_masyarakat.php?id_masyarakat=<?=$data_msy['id_masyarakat']?>"
                        class="btn btn-success">Ubah</a> |
                    <a href="hapus_masyarakat.php?id_masyarakat=<?=$data_msy['id_masyarakat']?>"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                        class="btn btn-danger">Hapus</a>
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