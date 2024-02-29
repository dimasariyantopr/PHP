<?php
	session_start();
	if (!isset($_SESSION['username'])){
		header("Location: login.php");
	}
?>

<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<h1>Selamat datang di halaman beranda</h1>
		<a href="aksi-logout.php">Logout</a>
	</body>
</html>
