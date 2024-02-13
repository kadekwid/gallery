<?php
    include "koneksi.php";
    session_start();

    if(!isset($_SESSION['id_user'])){
        //untuk bisa like harus login dulu
        header("location:index.php");
    }else{
    $fotoid=$_GET['fotoid'];
    $id_user=$_SESSION['id_user'];
    //cek apakah user sudah pernah like foto ini apa belum

    $sql=mysqli_query($koneksi, "select * from likefoto where fotoid='$fotoid' and id_user='$id_user'");

    if(mysqli_num_rows($sql)==1){
        //user sudah pernah like foto ini
        header("location:index.php");
    }else{
        $tanggal_like=date("Y-m-d");
        mysqli_query($koneksi, "insert into likefoto values('','$fotoid','$id_user','$tanggal_like')");
        header("location:index.php");
    }
    }
?>