<?php
  include "koneksi.php";
  session_start();

  $judul_foto=$_POST['judul_foto'];
  $deskripsi_foto=$_POST['deskripsi_foto'];
  $albumid=$_POST['albumid'];
  $tanggal_diunggah=date("Y-m-d");
  $id_user=$_SESSION['id_user'];

  $rand = rand();
  $ekstensi =  array('png','jpg','jpeg','gif');
  $filename = $_FILES['lokasi_file']['name'];
  $ukuran = $_FILES['lokasi_file']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  
  if(!in_array($ext,$ekstensi) ) {
    header("location:foto.php");
  }else{
    if($ukuran < 1044070){		
      $xx = $rand.'_'.$filename;
      move_uploaded_file($_FILES['lokasi_file']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
      mysqli_query($koneksi, "INSERT INTO foto VALUES(NULL,'$judul_foto','$deskripsi_foto','$tanggal_diunggah','$xx','$albumid','$id_user')");
      header("location:foto.php");
    }else{
      header("location:foto.php");
    }
  }
  ?>