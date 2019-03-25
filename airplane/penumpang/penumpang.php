<!DOCTYPE html>
<html>
<head>
	<title>Penumpang</title>
	<style type="text/css">
		body{
			background: rgb(40,40,40);
			color: white;
			font-family: sans-serif;
		}
		a{
			text-decoration: none;
			color: white;
		}
		#n{
			background: white;
			color: rgb(40,40,40);
		}
		#m{
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
	<h1>DAFTAR PENUMPANG</h1>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM penumpang";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='100%' align='center'>
			<tr>
				<td id='n' width='5%'>ID</td>
				<td id='n' width='10%'>Username</td>
				<td id='n' width='10%'>Password</td>
				<td id='n' width='20%'>Nama Penumpang</td>
				<td id='n' width='20%'>Alamat Penumpang</td>
				<td id='n' width='10%'>Tanggal Lahir</td>
				<td id='n' width='5%'>Jenis Kelamin</td>
				<td id='n' width='10%'>Telepon</td>
				<td id='n' width='10%' rowspan='2'>Opsi</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width=100%'><tr><td width='5%'>",$data['id_penumpang'],"</td>";
		 	echo "<td width='10%'>",$data['username'],"</td>";
		 	echo "<td width='10%'>",$data['password'],"</td>";
		 	echo "<td width='20%'>",$data['nama_penumpang'],"</td>";
		 	echo "<td width='20%'>",$data['alamat_penumpang'],"</td>";
		 	echo "<td width='10%'>",$data['tanggal_lahir'],"</td>";
		 	echo "<td width='5%'>",$data['jenis_kelamin'],"</td>";
		 	echo "<td width='10%'>",$data['telepon'],"</td>";
		 	echo "<td width='5%'>","<a href=\"update.php?id=$data[id_penumpang]\">Edit </a>","</td>";
	 		echo "<td width='5%'>","<a href=\"delete.php?id=$data[id_penumpang]\">Delete</a></td></tr></table>";
		 } 
	 ?>
	 <br><a href="../admin.php"> << KEMBALI </a>
	</center>
</body>
</html>

