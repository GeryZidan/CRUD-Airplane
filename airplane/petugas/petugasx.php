<!DOCTYPE html>
<html>
<head>
	<title>Petugas</title>
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
	<h1>DAFTAR PETUGAS</h1>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM petugas";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='90%' align='center'>
			<tr>
				<td id='n' width='10%'>ID Petugas</td>
				<td id='n' width='10%'>Username</td>
				<td id='n' width='10%'>Password</td>
				<td id='n' width='20%'>Nama Petugas</td>
				<td id='n' width='10%'>ID Level</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width='90%'><tr><td width='10%'>",$data['id_petugas'],"</td>";
		 	echo "<td width='10%'>",$data['username'],"</td>";
		 	echo "<td width='10%'>",$data['password'],"</td>";
		 	echo "<td width='20%'>",$data['nama_petugas'],"</td>";
		 	echo "<td width='10%'>",$data['id_level'],"</td></tr></table>";
		 } 
	 ?>
	 <br><a href="../petugas.php"> << KEMBALI </a>
	</center>
</body>
</html>

