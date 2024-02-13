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
  <link rel="stylesheet" href="css/album.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Album</title>
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
  <h1>Halaman Album</h1>

  <div class="form">
  <form action="tmb_album.php" method="post">
    <table>
      <tr>
        <td class="label">Nama Album</td>
        <td><input type="text" name="nama_album"></td>
      </tr>
      <tr>
        <td class="label">Deskripsi</td>
        <td><input type="text" name="deskripsi"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Tambah" class="button"></td>
      </tr>
    </table>
  </form>
  </div>

  <div class="input-table">
  <table border="1" cellpading=5 cellspacing=0 width="100%">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Tanggal dibuat</th>
      <th>Aksi</th>
    </tr>
    <?php
      include "koneksi.php";
      $id_user=$_SESSION['id_user'];
      $sql=mysqli_query($koneksi, "select * from album where id_user='$id_user'");
      while($data=mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td><?=$data['albumid']?></td>
      <td><?=$data['nama_album']?></td>
      <td><?=$data['deskripsi']?></td>
      <td><?=$data['tanggal_dibuat']?></td>
      <td>
      <a href="hps_album.php?albumid=<?=$data['albumid']?>">Hapus</a>        
      <a href="edt_album.php?albumid=<?=$data['albumid']?>">Edit</a>
      </td>
    </tr>
      <?php
      }
      ?>
  </table>
  </div>
</body>
</html>