<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

$query="insert into siswa values('','$nama','$nis','$alamat')";
mysqli_query($koneksi,$query);

header("location:index.php");

?>
