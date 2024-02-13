<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
  <title>Halaman Login</title>
</head>
<body>
  <div class="kotak-login">
  <form action="proseslog.php" method="post">
    <h1 clwss="tulisan_login">Halaman Login</h1>
    <table>
      <tr>
        <td class="label">Username</td>
        <td><input type="text" name="username" class="form_login"></td>
      </tr>
      <tr>
        <td class="label">Password</td>
        <td><input type="password" name="password" class="form_login"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Login" class="button"></td>
      </tr>
    </table>
  </form>
  </div>
</body>
</html>