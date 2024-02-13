<?php
  include "koneksi.php";
  session_start();

  $nama_album=$_POST['nama_album'];
  $deskripsi=$_POST['deskripsi'];
  $tanggal_dibuat=date("Y-m-d");
  $id_user=$_SESSION['id_user'];

  $sql=mysqli_query($koneksi, "insert into album values('','$nama_album','$deskripsi','$tanggal_dibuat','$id_user')");

  header("location:album.php");
  ?>