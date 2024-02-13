<?php
    include "koneksi.php";
    session_start();

    $fotoid=$_POST['fotoid'];
    $isikomentar=$_POST['isikomentar'];
    $tanggal_komentar=date("Y-m-d");
    $userid=$_SESSION['id_user'];

    $sql=mysqli_query($koneksi,"insert into komentarfoto values('','$fotoid','$userid','$isikomentar','$tanggal_komentar')");

    header("location:komentar.php?fotoid=".$fotoid);
?>