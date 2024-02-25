<html>
	<head>
		<title>Update</title>
	</head>
	<body>
		<h2>CRUD - Create, Read, Update, and Delete</h2>
	<br>
		<a href="index.php">Kembali</a>
	<br>
		<h3>Update data</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select*from siswa where id='$id'");
	while($id =mysqli_fetch_array($data)){
	?>	
		
	<form method="post" action="aksi-ubah.php">
	<table border="1">
		<tr>
		<td>Nama</td>
		<td>
		<input type="text" name="nama" value="<?php echo $id['nama'];?>">
			<input type="hidden" name="id" value="<?php echo $id['id'];?>">
		</td>
		</tr>
		<tr>
		<td>NIS</td>
		<td>
		<input type="text" name="nis" value="<?php echo $id['nis'];?>">
		</td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td>
		<input type="text" name="alamat" value="<?php echo $id['alamat'];?>">
		</td>
		</tr>
		<tr>
		<td>
		<input type="submit" value="Ubah data">
		</td>
		</tr>
	</table>
	</form>
	
	<?php
	}
	?>
	</body>
</html>
