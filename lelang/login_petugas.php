<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
            <form action="proses_login_petugas.php" method="post">
                <h3 align="center">LOGIN Perpus Online</h3>
                <h6 align="center">Anda Login Sebagai Petugas</h1>
                    <center><a class="btn btn-primary" aria-current="page" href="login.php">Masyarakat</a><br></center>
                    Username:
                    <input type="text" name="username" value="" class="form-control">
                    password:
                    <input type="password" name="password" class="form-control"><br>
                    <center><input type="submit" name="login" class="btn btn-success" value="LOGIN"></center>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>