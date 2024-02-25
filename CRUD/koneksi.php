<?php

$koneksi = mysqli_connect("localhost","root","","database_name");

if (mysqli_connect_error()){
	echo "Gagal melakukan koneksi database : " . mysqli_connect_error();
}

?>
