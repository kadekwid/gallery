<?php
  include "koneksi.php";
  session_start();

  $albumid=$_POST['albumid'];
  $nama_album=$_POST['nama_album'];
  $deskripsi=$_POST['deskripsi'];

  $sql=mysqli_query($koneksi, "update album set nama_album='$nama_album',deskripsi='$deskripsi' where albumid='$albumid'");

  header("location:album.php");
  ?>