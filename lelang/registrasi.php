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


    <h3>Registrasi</h3><br>
    <form action="proses_registrasi.php" method="post">


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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>