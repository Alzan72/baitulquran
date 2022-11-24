<?php

session_start();

include 'koneksi.php';


$username=@$_POST['username'];
$password=@$_POST['password'];

$sql = "SELECT * FROM `login` WHERE username='$username' and password='$password' ";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    $_SESSION['username']=$username;
    $_SESSION['status']="login";
    header("location:list-daftar.php");
} else {
    header("location:login.php?pesan=gagal");
};

?>