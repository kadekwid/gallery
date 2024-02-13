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
  <link rel="stylesheet" href="css/edt_foto.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Edit Foto</title>
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
  <h1>Halaman Edit Foto</h1>

  <div class="form">
  <form action="upd_foto.php" method="post" enctype="multipart/form-data">
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
        <td class="label">Album</td>
        <td>
          <select name="albumid" class="input">
          <?php
            $id_user=$_SESSION['id_user'];
            $sql2=mysqli_query($koneksi, "select * from album where id_user='$id_user'");
            while($data2=mysqli_fetch_array($sql2)){
          ?>
                <option value="<?=$data2['albumid']?>" <?php if($data2['albumid']==$data['albumid']){echo 'selected';}?>><?=$data2['nama_album']?></option>
          <?php
            }
          ?>
          </select>
        </td>
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