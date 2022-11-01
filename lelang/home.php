<?php 
    include "header.php";

?>


<h2>Selamat datang
    <?php

        if($_SESSION['nama']){
            echo $_SESSION['nama'];
        } else{
            echo $_SESSION['nama_petugas'];
        }
    ?>
    di website LELANG </h2>



<?php
    include "footer.php";
?>