<html>
	<head>
		<title>CRUD - Create, Read, Update, and Delete</title>
	</head>
	<body>
		<h2>CRUD - Create, Read, Update, and Delete</h2>
			<br>
			<h3>Create</h3>
				<a href="tambah.php">Tambah data</a>
			<br>
				<table border="1">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>NIS</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					
					<?php	
					include 'koneksi.php';
					$no = 1;
					$data = mysqli_query($koneksi,"select*from siswa");
					while($siswa=mysqli_fetch_array($data)){
					?>
					
					<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $siswa['nama']; ?></td>
					<td><?php echo $siswa['nis']; ?></td>
					<td><?php echo $siswa['alamat']; ?></td>
					<td>
					<a href="edit.php?id=<?php echo $siswa['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $siswa['id']; ?>">Hapus</a>
					</td>
					</tr>
					<?php
					}
					?>
					</table>
					</body>
					</html>
