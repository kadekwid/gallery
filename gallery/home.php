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
  <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <title>Halaman Home</title>
</head>
<body>
  <div class="container">
  <h1>Selamat Datang <b><?=$_SESSION['nama_lengkap']?></b></h1>
  
  <ul>
    <li><i class="fa-solid fa-house"></i><a href="index.php">Home</a></li>
    <li><i class="fa-solid fa-images"></i><a href="album.php">Album</a></li>
    <li><i class="fa-solid fa-image"></i><a href="foto.php">Foto</a></li>
    <li><i class="fa-solid fa-arrow-right-from-bracket"></i><a href="logout.php">Logout</a></li>
  </ul>
  </div>
</body>
</html>