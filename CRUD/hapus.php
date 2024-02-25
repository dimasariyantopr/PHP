<?php

include 'koneksi.php';

$id = $_GET['id'];

$query="delete from siswa where id='$id'";
mysqli_query($koneksi, $query);

header("Location:index.php");

?>
