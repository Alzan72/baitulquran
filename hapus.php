<?php

include 'koneksi.php';

$ID=@$_GET['id'];

// DELETE FROM `silabus` WHERE `silabus`.`ID` = 6;

$sql="DELETE FROM `pendaftaran` WHERE `ID` = $ID;";
$conn->query($sql);

header("location:list-daftar.php?pesan=hapus");
?>