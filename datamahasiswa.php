<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - AMIK SERANG</title>
</head>
<body>
 
	<h2>DATA MAHASISWA - AMIK SERANG</h2>
	<br/>
	<br/>
	<br/>
	<table border="1">
	        <tr>
			<th>NO</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat, tgl lahir</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
	        <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['jenis kelamin']; ?></td>
                <td><?php echo$d['tempat, tgl lahir</td>
	        </tr>
	        <?php 
		}
		?>
	        </table>
</body>
</html>
