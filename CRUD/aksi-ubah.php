<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

$query="update siswa set nama='$nama', nis='$nis', alamat='$alamat' where id='$id'";
mysqli_query($koneksi, $query);

header("Location:index.php");
?>
