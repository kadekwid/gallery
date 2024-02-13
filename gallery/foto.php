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
  <link rel="stylesheet" href="css/foto.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Foto</title>
</head>
<body>
  
  <ul>
    <li><p>Selamat Datang <b><?=$_SESSION['nama_lengkap']?></b></p></li>
    <div class="nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="album.php">Album</a></li>
    <li><a href="Foto.php">Foto</a></li>
    <li><a href="logout.php">Logout</a></li>
    </div>
  </ul>
  <h1>Halaman Foto</h1>

  <div class="form">
  <form action="tmb_foto.php" method="post" enctype="multipart/form-data">
    <table>
      <tr>
        <td class="label">Judul</td>
        <td><input type="text" name="judul_foto"></td>
      </tr>
      <tr>
        <td class="label">Deskripsi</td>
        <td><input type="text" name="deskripsi_foto"></td>
      </tr>
      <tr>
        <td class="label">Lokasi File</td>
        <td><input type="file" name="lokasi_file" class="lokasi_file"></td>
      </tr>
      <tr>
        <td class="label">Album</td>
        <td>
          <select name="albumid" class="input">
          <?php
            include "koneksi.php";
            $id_user=$_SESSION['id_user'];
            $sql=mysqli_query($koneksi, "select * from album where id_user='$id_user'");
            while($data=mysqli_fetch_array($sql)){
          ?>
                <option value="<?=$data['albumid']?>"><?=$data['nama_album']?></option>
          <?php
            }
          ?>
          </select>
        </td>
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
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Tanggal unggah</th>
      <th>Lokasi file</th>
      <th>Album</th>
      <th>Aksi</th>
    </tr>
    <?php
      include "koneksi.php";
      $id_user=$_SESSION['id_user'];
      $sql=mysqli_query($koneksi, "select * from foto,album where foto.id_user='$id_user' and foto.albumid=album.albumid");
      while($data=mysqli_fetch_array($sql)){
    ?>
            <tr>
              <td><?=$data['fotoid']?></td>
              <td><?=$data['judul_foto']?></td>
              <td><?=$data['deskripsi_foto']?></td>
              <td><?=$data['tanggal_unggah']?></td>
              <td>
                <img src="gambar/<?=$data['lokasi_file']?>" widht="100px">
              </td>
              <td><?=$data['nama_album']?></td>
              <td>
                <a href="hps_foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                <a href="edt_foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
              </td>
            </tr>

      <?php
      }
      ?>
  </table>
  </div>
</body>
</html>