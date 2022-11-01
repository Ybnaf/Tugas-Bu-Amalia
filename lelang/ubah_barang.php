<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <?php 
    include "header.php";

?>


    <?php 
    include "connect.php";
    $qry_get_barang=mysqli_query($conn,"select * from barang where id_barang = '".$_GET['id_barang']."'");
    $dt_barang=mysqli_fetch_array($qry_get_barang);
    ?>
    <h3>Ubah barang</h3>
    <form action="proses_ubah_barang.php" method="post">

        <input type="hidden" name="id_barang" value="<?=$dt_barang['id_barang']?>">
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

        <input type="submit" name="simpan" id="" value="Ubah Barang" class="btn btn-primary">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>