<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
include 'koneksi.php';

if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "<script>alert('Username & Password salah!!')</script>";
    }else if($_GET['pesan'] == "logout"){
        echo "<script>alert('Anda berhasil logout')</script>";
    }else if($_GET['pesan'] == "belum_login"){
        echo "<script>alert('Anda harus login terlebih dahulu')</script>";
    }
}


?>

<!--Menu-->
<section id="menu">
      <div class="row justify-content-between">
        <div class="col-2"><a href="pendaftaran.php" class="btn btn-success fs-4 text-center py-1 nav-link">Kembali</a></div>
      
      </div>
    </section>
    <!-- Akhir menu -->


    <div class="login-dark">
        <form method="post" action="login-action.php">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Masukkan username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Masukkan passsword"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div></form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>