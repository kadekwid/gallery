<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
      header("location:login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/edt_album.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Edit Album</title>
</head>
<body>
  
  <ul>
    <li><p>Selamat Datang <b><?=$_SESSION['nama_lengkap']?></b></p></li>
    <div class="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="album.php">Album</a></li>
    <li><a href="foto.php">Foto</a></li>
    <li><a href="logout.php">Logout</a></li>
    </div>
  </ul>
  <h1>Halaman Edit Album</h1>

  <div class="form">
  <form action="upd_album.php" method="post">
    <?php
      include "koneksi.php";
      $albumid=$_GET['albumid'];
      $sql=mysqli_query($koneksi, "select * from album where albumid='$albumid'");
      while($data=mysqli_fetch_array($sql)){
    ?>
    <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
    <table>
      <tr>
        <td class="label">Nama Album</td>
        <td><input type="text" name="nama_album" value="<?=$data['nama_album']?>" class="input"></td>
      </tr>
      <tr>
        <td class="label">Deskripsi</td>
        <td><input type="text" name="deskripsi" value="<?=$data['deskripsi']?>" class="input"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Ubah" class="button"></td>
      </tr>
    </table>
    <?php
      }
    ?>
  </form>
  </div>

  
</body>
</html>