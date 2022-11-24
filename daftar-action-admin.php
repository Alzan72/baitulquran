<?php

include'koneksi.php';
$ID=@$_POST['id'];
$name=@$_POST['name'];
$alamat=@$_POST['alamat'];
$tanggal=@$_POST['tanggal'];
$noHP=@$_POST['nohp'];
$motivasi=@$_POST['motivasi'];
$gender=@$_POST['gender'];

$sql="INSERT INTO `pendaftaran` (`ID`, `Nama`, `Alamat`, `No.HP`, `Tgl.Lahir`, `jenis-kelamin`, `Motivasi`) VALUES (NULL, '$name', '$alamat', '$noHP', '$tanggal', '$gender', '$motivasi');";
$conn->query($sql);
header("location:list-daftar.php?pesan=input");

?>