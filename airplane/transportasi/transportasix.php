<!DOCTYPE html>
<html>
<head>
	<title>Transportasi</title>
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
	<h1>DAFTAR TRANSPORTASI</h1>
	<hr>
	<?php 
		//koneksi
		$koneksi = mysqli_connect("localhost", "root", "", "ticket");

		//perintah menampilkan data
		$tampil = "SELECT * FROM transportasi";

		//eksekusi perintah
		$hasil = mysqli_query($koneksi, $tampil);

		echo "<table id='m' border='1' width='90%' align='center'>
			<tr>
				<td id='n' width='10%'>ID Transportasi</td>
				<td id='n' width='20%'>Kode</td>
				<td id='n' width='20%'>Jumlah Kursi</td>
				<td id='n' width='30%'>Keterangan</td>
				<td id='n' width='10%'>ID Tipe</td>
			</tr>
		</table>";
		//memisahkan data
		while ($data = mysqli_fetch_array($hasil)) {

		 	echo "<table id='m' border='1' align='center' width='90%'><tr><td width='10%'>",$data['id_transportasi'],"</td>";
		 	echo "<td width='20%'>",$data['kode'],"</td>";
		 	echo "<td width='20%'>",$data['jumlah_kursi'],"</td>";
		 	echo "<td width='30%'>",$data['keterangan'],"</td>";
		 	echo "<td width='10%'>",$data['id_tipe_transportasi'],"</td></tr></table>";
		 } 
	 ?>
	 <br><a href="../petugas.php"> << KEMBALI </a>
	</center>
</body>
</html>

