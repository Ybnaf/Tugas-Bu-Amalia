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


    <h3>Tambah Barang</h3><br>
    <form action="proses_tambah_barang.php" method="post">


        <label for="">Nama Barang :</label>
        <input type="text" name="nama_barang" value="" class="form-control">

        <label for="">Tanggal Daftar :</label>
        <input type="date" name="tgl_daftar" value="" class="form-control">

        <label for="">Harga Awal:</label>
        <input type="text" name="harga_awal" class="form-control">

        <label for="">Deskripsi : </label>
        <textarea name="deskripsi" rows="4" class="form-control"></textarea>


        <label for="">Foto Barang :</label>
        <input type="file" name="foto" class="form-control">

        <input type="submit" name="simpan" id="" value="Tambahkan" class="btn btn-primary">

    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>