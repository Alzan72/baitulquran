<?php
include 'koneksi.php';

$ID=@$_POST['id'];
$name=@$_POST['name'];
$alamat=@$_POST['alamat'];
$tanggal=@$_POST['tanggal'];
$noHP=@$_POST['nohp'];
$motivasi=@$_POST['motivasi'];
$gender=@$_POST['gender'];

$sql="UPDATE `pendaftaran` SET `Nama` = '$name', `Alamat` = '$alamat', `No.HP` = '$noHP', `Tgl.Lahir` = '$tanggal',`jenis-kelamin` = '$gender', `Motivasi` = '$motivasi' WHERE `pendaftaran`.`ID` = $ID;";

$conn->query($sql);

header ("location:list-daftar.php?pesan=update");

?>