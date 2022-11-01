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
    $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
    $dt_petugas=mysqli_fetch_array($qry_get_petugas);
    ?>
    <h3>ubah petugas</h3>
    <form action="proses_ubah_petugas.php" method="post">

        <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">
        <label for="">Nama Petugas : </label>
        <input type="text" name="nama_petugas" value="" class="form-control">

        <label for="">Username : </label>
        <input type="text" name="username" value="" class="form-control">

        <label for="">Password : </label>
        <input type="text" name="password" class="form-control">

        <label for="">Level : </label>
        <select name="level" id="level" class="form-control">
            <option disabled selected>Pilih</option>
            <option value="admin">admin</option>
            <option value="petugas">petugas</option>
        </select>

        <label for="">Kode : </label>
        <input type="text" name="kode" class="form-control">

        <input type="submit" name="simpan" id="" value="Ubah Petugas" class="btn btn-primary">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>