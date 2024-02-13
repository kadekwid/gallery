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
  <link rel="stylesheet" href="css/komentar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Komentar</title>
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
  <h1>Halaman Komentar</h1>

  <div class="form">
  <form action="tmb_komentar.php" method="post">
    <?php
      include "koneksi.php";
      $fotoid=$_GET['fotoid'];
      $sql=mysqli_query($koneksi, "select * from foto where fotoid='$fotoid'");
      while($data=mysqli_fetch_array($sql)){
    ?>
    <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
    <table>
      <tr>
        <td class="label">Judul</td>
        <td><input type="text" name="judul_foto" value="<?=$data['judul_foto']?>" class="input"></td>
      </tr>
      <tr>
        <td class="label">Deskripsi</td>
        <td><input type="text" name="deskripsi_foto" value="<?=$data['deskripsi_foto']?>" class="input"></td>
      </tr>
      <tr>
        <td class="label">Foto</td>
        <td><img src="gambar/<?=$data['lokasi_file']?>" widht="200px" class="lokasi_file"></td>
      </tr>
      <tr>
        <td class="label">Komentar</td>
        <td><input type="text" name="isikomentar" class="input"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah" class="button"></td>
      </tr>
    </table>
    <?php
      }
    ?>
  </form>
  </div>

  <div class="input-table">
  <table width="100%" border="1" cellpadding=5 cellspacing=0>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Komentar</th>
        <th>Tanggal</th>
    </tr>
    <?php
      include "koneksi.php";
      $id_user=$_SESSION['id_user'];
      $sql=mysqli_query($koneksi, "select * from komentarfoto,user where komentarfoto.id_user=user.id_user");
      while($data=mysqli_fetch_array($sql)){
    ?>
        <tr>
            <td><?=$data['komentarid']?></td>
            <td><?=$data['nama_lengkap']?></td>
            <td><?=$data['isikomentar']?></td>
            <td><?=$data['tanggal_komentar']?></td>
        </tr>
    <?php
      }
    ?>
  </table>
  </div>
</body>
</html>