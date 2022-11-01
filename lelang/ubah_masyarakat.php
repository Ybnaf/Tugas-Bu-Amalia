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
    $qry_get_masyarakat=mysqli_query($conn,"select * from masyarakat where id_masyarakat = '".$_GET['id_masyarakat']."'");
    $dt_masyarakat=mysqli_fetch_array($qry_get_masyarakat);
    ?>
    <h3>Ubah masyarakat</h3>
    <form action="proses_ubah_masyarakat.php" method="post">

        <input type="hidden" name="id_masyarakat" value="<?=$dt_masyarakat['id_masyarakat']?>">
        <label for="">Nama : </label>
        <input type="text" name="nama" value="" class="form-control">

        <label for="">Username : </label>
        <input type="text" name="username" value="" class="form-control">

        <label for="">Password : </label>
        <input type="text" name="password" class="form-control">

        <label for="">No. Telepon : </label>
        <input type="text" name="tlp" class="form-control"></input>

        <input type="submit" name="simpan" id="" value="Tambahkan" class="btn btn-primary">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>