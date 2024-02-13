<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/register.css">
  <title>Halaman Registrasi</title>
</head>
<body>
<div class="kotak-login">
  <form action="prosesreg.php" method="post">
    <h1>Halaman Registrasi</h1>
    <table>
      <tr>
        <td class="label">Username</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td class="label">Password</td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        <td class="label">Email</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td class="label">Nama Lengkap</td>
        <td><input type="text" name="namalengkap"></td>
      </tr>
      <tr>
        <td class="label">Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Daftar Sekarang" class="button"></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>