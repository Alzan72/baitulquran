<?php

include'koneksi.php';
$ID=@$_POST['id'];
$name=@$_POST['name'];
$alamat=@$_POST['alamat'];
$tanggal=@$_POST['tanggal'];
$noHp=@$_POST['nohp'];
$motivasi=@$_POST['motivasi'];
$gender=@$_POST['gender'];

$sql="INSERT INTO `pendaftaran` (`ID`, `Nama`, `Alamat`, `No.HP`, `Tgl.Lahir`, `jenis-kelamin`, `Motivasi`) VALUES (NULL, '$name', '$alamat', '$noHp', '$tanggal', '$gender', '$motivasi');";
$conn->query($sql);
header("location:pendaftaran.php?pesan=input");

?>