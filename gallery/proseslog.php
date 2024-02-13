<?php
  include "koneksi.php";
  session_start();

  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql=mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

  $cek=mysqli_num_rows($sql);

  if($cek==1){
    while($data=mysqli_fetch_array($sql)){
      $_SESSION['id_user']=$data['id_user'];
      $_SESSION['nama_lengkap']=$data['nama_lengkap'];
    }
    header("location:home.php");
  }else{
  header("location:login.php");
  }

  ?>